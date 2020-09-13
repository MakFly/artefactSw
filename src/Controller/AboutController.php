<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route({
     *  "fr": "/about",
     *  "en": "/about"
     * }, name="about")
     */
    public function about(Request $request)
    {
        return $this->render('default/about.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
