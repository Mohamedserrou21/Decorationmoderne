<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InteriorController extends AbstractController
{
    /**
     * @Route("/Teinture", name="app_teinture")
     */
    public function index(): Response
    {
        return $this->render('interior/index.html.twig', [
            'controller_name' => 'InteriorController',
        ]);
    }
}
