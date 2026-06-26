<?php

namespace App\Controller;

use App\Repository\AnimalRatingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(AnimalRatingRepository $repository): Response
    {
        $stats = $repository->getAnimalStats();

        return $this->render('admin/index.html.twig', [
            'stats' => $stats,
        ]);
    }
}
