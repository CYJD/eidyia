<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EidyiaController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index()
    {

        return $this->render('home/index.html.twig', [
            'controller'    => ""
        ]);
    }
}