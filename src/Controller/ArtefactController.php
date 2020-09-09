<?php

namespace App\Controller;

use App\Entity\Monsters;
use App\Form\MonstersType;
use App\Manager\ManagerMonstersByArtefacts;
use App\Repository\SubstatsArtefactByMonstersRepository;
use App\Manager\MontersByArtefactsSubsServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ArtefactController extends AbstractController
{
    /**
     * @Route({
     *  "fr": "/monstersByArtefact",
     *  "en": "/monstersByArtefact"
     * }, name="monstersByArtefact")
     */
    public function indexMonstersByArtefact(Request $request)
    {
        $monsters = new Monsters();
        
        $formMonsters = $this->createForm(MonstersType::class, $monsters);

        return $this->render('monstersByArtefact/index.html.twig', 
            [
                'formMonsters' => $formMonsters->createView()
            ]
        );
    }

    /**
    * @Route("/ajax_monsters", name="ajax_monsters_action")
    */
    public function ajaxMonsterAction(Request $request, TranslatorInterface $translatorInterface, SubstatsArtefactByMonstersRepository $substatsArtefactByMonstersRepository)
    {
        /* on récupère la valeur envoyée */
        $idMonsters = $request->request->get('idMonsters');

        /* doctrine : on récupère la data en bdd pour la comparé avec l'option value envoyé  */
        $resultArtefactByMonsters = $substatsArtefactByMonstersRepository->findEntitiesByIdMonsters($idMonsters);
        
        $managerMonstersByArtefacts = new ManagerMonstersByArtefacts();
        $monsters = new MontersByArtefactsSubsServices($managerMonstersByArtefacts, $translatorInterface);
        $arraySubsStatsByMonster = $monsters->showArtefactsByMonsters($resultArtefactByMonsters);

        /** Tableau des resultats des subs_stats d'artefact par monstre */
        $dataArtefactByMonsters = [];
        foreach($arraySubsStatsByMonster as $key => $value){
            $dataArtefactByMonsters[$key] = $value;
        }

        /** Response ajax de monster */
        return $monsters->response($dataArtefactByMonsters);
    }
}
