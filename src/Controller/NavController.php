<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NavController extends AbstractController
{
    /**
     * @param CategoryRepository $categoryRepository
     * 
     * @return Response
     */
    public function navbar(CategoryRepository $categoryRepository): Response
    {
        return $this->render('nav.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
}
