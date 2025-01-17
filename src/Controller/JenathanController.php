<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class JenathanController extends AbstractController
{
    #[Route('/jenathan', name: 'app_jenathan', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('jenathan/index.html.twig');
    }
    
    #[Route('/portfolio', name: 'app_portfolio', methods: ['GET'])]
    public function portfolio(): Response
    {
        return $this->render('jenathan/portfolio.html.twig');
    }
    
    #[Route('/competences', name: 'app_competences', methods: ['GET'])]
    public function competences(): Response
    {
        return $this->render('jenathan/competences.html.twig');
    }
    
    #[Route('/contacter', name: 'app_contact', methods: ['GET'])]
    public function contacter(): Response
    {
        return $this->render('jenathan/contacter.html.twig');
    }
}

