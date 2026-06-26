<?php

namespace App\Controller;

use App\Entity\AnimalRating;
use App\Form\AnimalRatingType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $animalRating = new AnimalRating();
        $form = $this->createForm(AnimalRatingType::class, $animalRating);
        $form->handleRequest($request);

        return $this->render('home/index.html.twig', [
            'form' => $form,
        ]);
    }
}
