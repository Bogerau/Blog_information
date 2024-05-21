<?php

namespace App\Entity;

use App\Repository\ContenuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContenuRepository::class)]
class Contenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Illustrations = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Tags = null;

    #[ORM\Column(length: 255)]
    private ?string $Article = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIllustrations(): ?string
    {
        return $this->Illustrations;
    }

    public function setIllustrations(?string $Illustrations): static
    {
        $this->Illustrations = $Illustrations;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->Tags;
    }

    public function setTags(?string $Tags): static
    {
        $this->Tags = $Tags;

        return $this;
    }

    public function getArticle(): ?string
    {
        return $this->Article;
    }

    public function setArticle(string $Article): static
    {
        $this->Article = $Article;

        return $this;
    }
}
