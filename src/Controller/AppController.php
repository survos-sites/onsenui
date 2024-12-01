<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{
    #[Route('/home', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('app/home.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
    #[Route('/kitchen', name: 'app_kitchen')]
    public function kitchen(): Response
    {
        return $this->render('app/kitchen.html.twig', [
        ]);
    }
    #[Route('/', name: 'app_todo')]
    public function todo(): Response
    {
        return $this->render('todo.html.twig', [
        ]
        );
    }

}
