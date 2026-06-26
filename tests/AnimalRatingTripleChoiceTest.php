<?php

namespace App\Tests;

use App\Entity\AnimalRating;
use App\Repository\AnimalRatingRepository;
use App\Service\AnimalRatingService;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class AnimalRatingTripleChoiceTest extends TestCase
{
    private AnimalRatingService $service;

    protected function setUp(): void
    {
        $this->service = new AnimalRatingService(
            $this->createStub(EntityManagerInterface::class),
            $this->createStub(AnimalRatingRepository::class)
        );
    }

    private function makeAnimalRating(string $animal, int $score, string $createdAt): AnimalRating
    {
        $entry = new AnimalRating();
        $entry->setUserName('soner');
        $entry->setAnimalName($animal);
        $entry->setScore($score);
        $entry->setCreatedAt(new \DateTimeImmutable($createdAt));
        return $entry;
    }

    public function testLessThanThreeAnimalsKeepsAll(): void
    {
        $existing = [
            $this->makeAnimalRating('cat', 80, '2024-01-01'),
            $this->makeAnimalRating('dog', 70, '2024-01-02'),
        ];

        $result = $this->service->resolveTripleChoice($existing, $this->makeAnimalRating('lion', 90, '2024-01-03'));

        $this->assertCount(3, $result);
    }

    public function testWorstScoredAnimalIsRemoved(): void
    {
        $existing = [
            $this->makeAnimalRating('cat', 80, '2024-01-01'),
            $this->makeAnimalRating('dog', 50, '2024-01-02'),
            $this->makeAnimalRating('bird', 70, '2024-01-03'),
        ];

        $result = $this->service->resolveTripleChoice($existing, $this->makeAnimalRating('lion', 90, '2024-01-04'));

        $animals = array_map(fn(AnimalRating $r) => $r->getAnimalName(), $result);
        $this->assertCount(3, $result);
        $this->assertNotContains('dog', $animals);
        $this->assertContains('lion', $animals);
    }

    public function testTieOnScoreKeepsMostRecent(): void
    {
        $existing = [
            $this->makeAnimalRating('cat', 80, '2024-01-01'),
            $this->makeAnimalRating('dog', 50, '2024-01-02'),
            $this->makeAnimalRating('bird', 50, '2024-01-03'),
        ];

        $result = $this->service->resolveTripleChoice($existing, $this->makeAnimalRating('lion', 90, '2024-01-04'));

        $animals = array_map(fn(AnimalRating $r) => $r->getAnimalName(), $result);
        $this->assertNotContains('dog', $animals);
        $this->assertContains('bird', $animals);
        $this->assertContains('lion', $animals);
    }
}
