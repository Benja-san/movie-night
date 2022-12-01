<?php

namespace App\Controller;

use App\Entity\Program;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/movies')]
class MoviesController extends AbstractController
{
    #[Route('/', name: 'movies_list')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $wallet = $categoryRepository->findAll();
        $magicCategoryNumber = rand(0, count($wallet) - 1);
        $magicCategoryPrograms = $wallet[$magicCategoryNumber]->getPrograms();
        $magicProgramNumber = rand(0, count($magicCategoryPrograms) - 1);
        $onCoverProgram = $magicCategoryPrograms[$magicProgramNumber];

        return $this->render('Movies/index.html.twig', [
            'wallet' => $wallet,
            'onCoverProgram' => $onCoverProgram
        ]);
    }

    #[Route(
        '/{slug}',
        name: 'movie_detail'
    )]
    public function detail(Program $program): Response
    {
        return $this->render('Movies/detail.html.twig', [
            'onCoverProgram' => $program,
            'isFullPage' => true
        ]);
    }
}