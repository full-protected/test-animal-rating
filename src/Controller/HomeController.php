<?php

namespace App\Controller;

use App\Entity\AnimalRating;
use App\Data\AnimalList;
use App\Form\AnimalRatingType;
use App\Service\AnimalRatingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, AnimalRatingService $animalRatingService): Response
    {
        $animalRating = new AnimalRating();
        $form = $this->createForm(AnimalRatingType::class, $animalRating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalRatingService->save(
                $animalRating->getUserName(),
                $animalRating->getAnimalName(),
                $animalRating->getScore()
            );

            $this->addFlash('success', 'home.success');

            return $this->redirectToRoute('app_home');
        }

        $locale = $request->getLocale();
        $animals = $locale === 'fr' ? AnimalList::getFrench() : AnimalList::getEnglish();

        return $this->render('home/index.html.twig', [
            'form' => $form,
            'animals' => $animals,
        ]);
    }
}
