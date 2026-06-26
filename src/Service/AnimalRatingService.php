<?php

namespace App\Service;

use App\Entity\AnimalRating;
use App\Repository\AnimalRatingRepository;
use Doctrine\ORM\EntityManagerInterface;

class AnimalRatingService
{
    public function __construct(
        private EntityManagerInterface $em,
        private AnimalRatingRepository $repository
    ) {}

    public function save(AnimalRating $animalRating): void
    {
        // Normalize userName & animalName
        $animalRating->setUserName(trim($animalRating->getUserName()));
        $animalRating->setAnimalName(strtolower(trim($animalRating->getAnimalName())));

        // Check if an animal is existing for this username
        $existing = $this->repository->findOneBy(['userName' => $animalRating->getUserName()]);

        if ($existing) {
            $existing->setAnimalName($animalRating->getAnimalName());
            $existing->setScore($animalRating->getScore());
        } else {
            $this->em->persist($animalRating);
        }

        $this->em->flush();
    }
}
