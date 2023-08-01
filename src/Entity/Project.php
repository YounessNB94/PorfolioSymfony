<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $techno = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $repoLink = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTechno(): ?string
    {
        return $this->techno;
    }

    public function setTechno(?string $techno): static
    {
        $this->techno = $techno;

        return $this;
    }

    public function getRepoLink(): ?string
    {
        return $this->repoLink;
    }

    public function setRepoLink(string $repoLink): static
    {
        $this->repoLink = $repoLink;

        return $this;
    }
}
