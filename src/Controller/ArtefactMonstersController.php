<?php

namespace App\Controller;

use App\Entity\ElementType;
use App\Entity\FlatStats;
use App\Entity\Ranking;
use App\Entity\SubstatArtefact;
use App\Form\ElementTypeForm;
use App\Form\FlatStatsType;
use App\Form\SubStatArtefactType;
use App\Manager\RankingAllSkillsManager;
use App\Manager\RankingManager;
use App\Repository\MonstersRepository;
use App\Service\RankingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ArtefactMonstersController extends AbstractController
{
    /**
     * @Route({
     *  "fr": "/artefactByMonster",
     *  "en": "/artefactByMonster"
     * }, name="artefactByMonster")
     */
    public function indexArtefactByMonsters(Request $request, TranslatorInterface $translator)
    {
        $elementType = new ElementType();
        $flatStatsType = new FlatStats();
        $subStatsType = new SubstatArtefact();

        $formElementType = $this->createForm(ElementTypeForm::class, $elementType);
        $formFlatStatType = $this->createForm(FlatStatsType::class, $flatStatsType);
        $formsubStatsType1 = $this->createForm(SubStatArtefactType::class, $subStatsType);
        $formsubStatsType2 = $this->createForm(SubStatArtefactType::class, $subStatsType);
        $formsubStatsType3 = $this->createForm(SubStatArtefactType::class, $subStatsType);
        $formsubStatsType4 = $this->createForm(SubStatArtefactType::class, $subStatsType);

        $locale = "";
        if($request->getLocale() == "fr") {
            $locale = "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json";
        } else {
            $locale = "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json";
        }

        return $this->render('artefact_monsters/index.html.twig', 
            [
                'locale' => $locale,
                'formElementType' => $formElementType->createView(),
                'formFlatStat' => $formFlatStatType->createView(),
                'formsubStatsType' => $formsubStatsType1->createView(),
                'formsubStatsType2' => $formsubStatsType2->createView(),
                'formsubStatsType3' => $formsubStatsType3->createView(),
                'formsubStatsType4' => $formsubStatsType4->createView(),
            ]
        );
    }

    /**
    * @Route("/ajax_artefact", name="ajax_artefact_action")
    */
    public function ajaxArtefactAction(Request $request, TranslatorInterface $translatorInterface, MonstersRepository $monstersRepository)
    {
         /************* Update VERSION 0.3 *****************/

        $rankingAllSkillsManager = new RankingAllSkillsManager();
        $managerRanking = new RankingManager($rankingAllSkillsManager);
        $rankingMonstersSubStats = new RankingService($managerRanking);


        /* on récupère la valeur envoyée */
        $selectElement_type_form_name = $request->request->get('selectElement_type_form_name');
        $selectFlatType = $request->request->get('selectFlatType');
        $filterSubStatOne = $request->request->get('selectFormsubStatsType1');
        $filterSubStatTwo = $request->request->get('selectFormsubStatsType2');
        $filterSubStatThree = $request->request->get('selectFormsubStatsType3');
        $filterSubStatFour = $request->request->get('selectFormsubStatsType4');

        /* doctrine : on récupère la data en bdd pour la comparé avec l'option value envoyé  */
        // $result = $ajaxJqueryTrainingRepository->findEntitiesById($selectElementType);

        $info = [];
        $monsterFilterByTwoParameters = "";
        $rankings = "";
        if (!empty($selectElement_type_form_name) && !empty($selectFlatType) && !empty($filterSubStatOne)) {         

            /** search Monster by this two first filters */
            $monsterFilterByTwoParameters = $monstersRepository->searchMonstersByFilters($selectElement_type_form_name, $selectFlatType);
            
            /** calcul du ranking */
            $rankings = $rankingMonstersSubStats->rankingSubStats($monsterFilterByTwoParameters, $filterSubStatOne, $filterSubStatTwo, $filterSubStatThree, $filterSubStatFour);

            $i = 1;
            if(!empty($rankings)) {
                foreach($rankings as $monstersRanking){
                    $info[] = [
                        "id" => $i,
                        "awake" => $monstersRanking['awake'],
                        "element" => $monstersRanking['element'],
                        "type" => $monstersRanking['type'],
                        "family" => $monstersRanking['family'],
                        "prefered_flat_stats" => $monstersRanking['prefered_flat_stats'],
                    ];       
                    ++$i;
                }                   
            }

            $response = new Response(json_encode(array(
                'info' => $info
            )));
            $response->headers->set('Content-Type', 'application/json');
    
            return $response;
        }
    }
}
