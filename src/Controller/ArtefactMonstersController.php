<?php

namespace App\Controller;

use App\Entity\ElementType;
use App\Entity\FlatStats;
use App\Entity\PreferedStats;
use App\Entity\SubstatArtefact;
use App\Form\ElementTypeForm;
use App\Form\FlatStatsType;
use App\Form\PreferedStatsType;
use App\Form\SubStatArtefactType;
use App\Repository\MonstersRepository;
use App\Services\MonstersRankingServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtefactMonstersController extends AbstractController
{
    /**
     * @Route({
     *  "fr": "/artefactByMonster",
     *  "en": "/artefactByMonster"
     * }, name="artefactByMonster")
     */
    public function indexArtefactByMonsters(Request $request)
    {
        $elementType = new ElementType();
        $flatStatsType = new FlatStats();
        $preferedStats = new PreferedStats();
        $subStatsType = new SubstatArtefact();

        $formElementType = $this->createForm(ElementTypeForm::class, $elementType);
        $formFlatStatType = $this->createForm(FlatStatsType::class, $flatStatsType);
        $formPreferedStat = $this->createForm(PreferedStatsType::class, $preferedStats);
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
                'formPreferedStat' => $formPreferedStat->createView(),
                'formsubStatsType' => $formsubStatsType1->createView(),
                'formsubStatsType2' => $formsubStatsType2->createView(),
                'formsubStatsType3' => $formsubStatsType3->createView(),
                'formsubStatsType4' => $formsubStatsType4->createView(),
            ]
        );
    }

    /**
    * @Route("/artefactByMonstersAction", name="artefact_monsters_action", methods={"POST"})
    */
    public function ajaxArtefactAction(Request $request, MonstersRepository $monstersRepository): Response
    {
        /************* Update VERSION 0.4 *****************/

        $monstersRankingService = new MonstersRankingServices();

        $response = new Response(json_encode(array(
            'info' => $monstersRankingService->getResponseRanking($request, $monstersRepository)
        )));

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
