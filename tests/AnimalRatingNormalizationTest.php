<?php

namespace App\Tests;

use App\Repository\AnimalRatingRepository;
use App\Service\AnimalRatingService;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class AnimalRatingNormalizationTest extends TestCase
{
    private AnimalRatingService $service;

    protected function setUp(): void
    {
        $this->service = new AnimalRatingService(
            $this->createStub(EntityManagerInterface::class),
            $this->createStub(AnimalRatingRepository::class)
        );
    }

    public function testAnimalNameIsLowercased(): void
    {
        $this->assertSame('cat', $this->service->normalize('CAT'));
    }

    public function testAnimalNameIsTrimmed(): void
    {
        $this->assertSame('cat', $this->service->normalize('  cat  '));
    }

    public function testUserNameIsLowercased(): void
    {
        $this->assertSame('soner', $this->service->normalize('SONER'));
    }
}
