<?php

namespace App\Entity;

use App\Repository\DepecheAFPRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepecheAFPRepository::class)]
class DepecheAFP
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $SourceLocation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DateTime = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Type = null;

    #[ORM\Column(length: 255)]
    private ?string $Content = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepecheAFPID(): ?string
    {
        return $this->DepecheAFP_ID;
    }

    public function setDepecheAFPID(string $DepecheAFP_ID): static
    {
        $this->DepecheAFP_ID = $DepecheAFP_ID;

        return $this;
    }

    public function getSourceLocation(): ?string
    {
        return $this->SourceLocation;
    }

    public function setSourceLocation(string $SourceLocation): static
    {
        $this->SourceLocation = $SourceLocation;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->DateTime;
    }

    public function setDateTime(\DateTimeInterface $DateTime): static
    {
        $this->DateTime = $DateTime;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): static
    {
        $this->Content = $Content;

        return $this;
    }
}
