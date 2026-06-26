<?php

namespace App\Controller;

use App\Entity\AnimalRating;
use App\Form\AnimalRatingType;
use App\Repository\AnimalRatingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, EntityManagerInterface $em, AnimalRatingRepository $repository): Response
    {
        $animalRating = new AnimalRating();
        $form = $this->createForm(AnimalRatingType::class, $animalRating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Normalize userName & animalName
            $animalRating->setUserName(trim($animalRating->getUserName()));
            $animalRating->setAnimalName(strtolower(trim($animalRating->getAnimalName())));

            // Check if an animal is existing for this username
            $existing = $repository->findOneBy(['userName' => $animalRating->getUserName()]);

            if ($existing) {
                $existing->setAnimalName($animalRating->getAnimalName());
                $existing->setScore($animalRating->getScore());
            } else {
                $em->persist($animalRating);
            }

            $em->flush();

            $this->addFlash('success', 'Votre animal a bien été enregistré !');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('home/index.html.twig', [
            'form' => $form,
        ]);
    }
}
