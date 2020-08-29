<?php

namespace App\Controller;

use App\Entity\Monsters;
use App\Form\MonstersType;
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
        $currentLocale = $request->getLocale();
        $monsters = new Monsters();
        
        $formMonsters = $this->createForm(MonstersType::class, $monsters);

        return $this->render('monstersByArtefact/index.html.twig', 
            [
                'formMonsters' => $formMonsters->createView()
            ]
        );
    }
}
