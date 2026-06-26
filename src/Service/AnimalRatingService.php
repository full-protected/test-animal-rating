<?php

namespace App\Service;

use App\Entity\AnimalRating;
use App\Repository\AnimalRatingRepository;
use Doctrine\ORM\EntityManagerInterface;

class AnimalRatingService
{
    private const MAX_ANIMALS = 3;

    public function __construct(
        private EntityManagerInterface $em,
        private AnimalRatingRepository $repository
    ) {}

    public function save(string $userName, string $animalName, int $score): void
    {
        // Normalize
        $userName = trim($userName);
        $animalName = strtolower(trim($animalName));

        // Get existing entries for this user
        $existing = $this->repository->findBy(['userName' => $userName]);

        $newEntry = new AnimalRating();
        $newEntry->setUserName($userName);
        $newEntry->setAnimalName($animalName);
        $newEntry->setScore($score);

        // User already has 3 animals — remove the one with the lowest score (oldest if tie)
        if (count($existing) >= self::MAX_ANIMALS) {
            $toRemove = $this->resolveTripleChoice($existing);
            $this->em->remove($toRemove);
        }

        $this->em->persist($newEntry);
        $this->em->flush();
    }

    /**
     * Returns the animal to remove (lowest score, oldest if tie)
     *
     * @param AnimalRating[] $existing
     */
    private function resolveTripleChoice(array $existing): AnimalRating
    {
        usort($existing, function (AnimalRating $a, AnimalRating $b) {
            if ($a->getScore() === $b->getScore()) {
                return $a->getCreatedAt() <=> $b->getCreatedAt();
            }
            return $a->getScore() <=> $b->getScore();
        });

        return $existing[0];
    }

    public function normalize(string $value): string
    {
        return strtolower(trim($value));
    }
}
