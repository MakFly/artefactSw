<?php

namespace App\Controller;

use App\Entity\ElementType;
use App\Entity\FlatStats;
use App\Entity\SubstatArtefact;
use App\Form\ElementTypeForm;
use App\Form\FlatStatsType;
use App\Form\SubStatArtefactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

        return $this->render('artefact_monsters/index.html.twig', 
            [
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
    public function ajaxArtefactAction(Request $request, TranslatorInterface $translatorInterface)
    {
        
    }
}
