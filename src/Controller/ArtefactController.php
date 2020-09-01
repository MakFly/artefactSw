<?php

namespace App\Controller;

use App\Entity\Monsters;
use App\Form\MonstersType;
use App\Manager\ManagerArtefacts;
use App\Repository\SubstatsArtefactByMonstersRepository;
use App\Services\MontersByArtefactsSubsServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ArtefactController extends AbstractController
{
    /**
     * @Route({
     *  "fr": "/artefactByMonster",
     *  "en": "/artefactByMonster"
     * }, name="artefactByMonster")
     */
    public function indexArtefactByMonsters(TranslatorInterface $translator, Request $request)
    {

        return $this->render('artefactByMonsters/index.html.twig', 
            []
        );
    }

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
    * @Route("/ajax", name="ajax_monsters_action")
    */
    public function ajaxAction(Request $request, TranslatorInterface $translatorInterface, SubstatsArtefactByMonstersRepository $substatsArtefactByMonstersRepository)
    {
        /* on récupère la valeur envoyée */
        $idMonsters = $request->request->get('idMonsters');

        /* doctrine : on récupère la data en bdd pour la comparé avec l'option value envoyé  */
        $resultArtefactByMonsters = $substatsArtefactByMonstersRepository->findEntitiesByIdMonsters($idMonsters);
        
        $managerArtefacts = new ManagerArtefacts();
        $monsters = new MontersByArtefactsSubsServices($managerArtefacts, $translatorInterface);
        $arraySubsStatsByMonster = $monsters->showArtefactsByMonsters($resultArtefactByMonsters);

        $dataArtefactByMonsters = [];
        foreach($arraySubsStatsByMonster as $key => $value){
            $dataArtefactByMonsters[$key] = $value;
        }

        /** Response ajax de monster */
        return $monsters->response($dataArtefactByMonsters);
    }
}
