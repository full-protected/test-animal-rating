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
            $toRemove = $this->resolveTripleChoice($existing, $newEntry);
            foreach ($existing as $animal) {
                if (!in_array($animal, $toRemove)) {
                    $this->em->remove($animal);
                }
            }
        }

        $this->em->persist($newEntry);
        $this->em->flush();
    }

    /**
     * Returns the 3 animals to keep (last entry is always kept)
     *
     * @param AnimalRating[] $existing
     * @return AnimalRating[]
     */
    public function resolveTripleChoice(array $existing, AnimalRating $newEntry): array
    {
        if (count($existing) < self::MAX_ANIMALS) {
            return [...$existing, $newEntry];
        }

        usort($existing, function (AnimalRating $a, AnimalRating $b) {
            if ($a->getScore() === $b->getScore()) {
                return $a->getCreatedAt() <=> $b->getCreatedAt();
            }
            return $a->getScore() <=> $b->getScore();
        });

        // Remove the worst, keep the rest + new entry
        array_shift($existing);
        return [...$existing, $newEntry];
    }

    public function normalize(string $value): string
    {
        return strtolower(trim($value));
    }
}
