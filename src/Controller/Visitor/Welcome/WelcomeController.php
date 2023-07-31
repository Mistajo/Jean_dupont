<?php

namespace App\Controller\Visitor\Welcome;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_visitor_welcome_welcome')]
    public function index(): Response
    {
        return $this->render('pages/visitor/welcome/index.html.twig');
    }
}