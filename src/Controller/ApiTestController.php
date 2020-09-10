<?php

namespace App\Controller;

use App\Entity\Monsters;
use App\Repository\MonstersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiTestController extends AbstractController
{
    /**
     * @Route({
     *  "fr": "/api/test",
     *  "en": "/api/test"
     * }, name="api_test")
     * @return Response
     */
    public function index(MonstersRepository $monsters): Response
    {
        return $this->render('api_test/index.html.twig', [
            'monsters' => $monsters->findAll(),
        ]);
    }
}
