<?php

namespace App\Entity;

use App\Repository\AnimalRatingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnimalRatingRepository::class)]
#[ORM\HasLifecycleCallbacks]
class AnimalRating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Veuillez entrer votre nom')]
    #[Assert\Length(max: 100)]
    private ?string $userName = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Veuillez entrer un animal')]
    #[Assert\Length(max: 100)]
    private ?string $animalName = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Veuillez entrer une note')]
    #[Assert\Range(min: 0, max: 100, notInRangeMessage: 'La note doit être entre 0 et 100')]
    private ?int $score = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): static
    {
        $this->userName = $userName;

        return $this;
    }

    public function getAnimalName(): ?string
    {
        return $this->animalName;
    }

    public function setAnimalName(string $animalName): static
    {
        $this->animalName = $animalName;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
