<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/{_locale}')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'articles' => $articleRepository->findBy([], ['id' => 'DESC']),
        ]);
    }
}
