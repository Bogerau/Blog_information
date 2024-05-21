<?php

namespace App\Entity;

use App\Repository\IAGRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IAGRepository::class)]
class IAG
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $ContentType = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DateLastPrompt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->ContentType;
    }

    public function setContentType(string $ContentType): static
    {
        $this->ContentType = $ContentType;

        return $this;
    }

    public function getDateLastPrompt(): ?\DateTimeInterface
    {
        return $this->DateLastPrompt;
    }

    public function setDateLastPrompt(\DateTimeInterface $DateLastPrompt): static
    {
        $this->DateLastPrompt = $DateLastPrompt;

        return $this;
    }
}
