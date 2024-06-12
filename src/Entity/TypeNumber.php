<?php

namespace App\Entity;

use App\Repository\TypeNumberRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeNumberRepository::class)]
class TypeNumber
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $entiteId = null;

    #[ORM\Column]
    private ?int $genreId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEntiteId(): ?int
    {
        return $this->entiteId;
    }

    public function setEntiteId(int $entiteId): static
    {
        $this->entiteId = $entiteId;

        return $this;
    }

    public function getGenreId(): ?int
    {
        return $this->genreId;
    }

    public function setGenreId(int $genreId): static
    {
        $this->genreId = $genreId;

        return $this;
    }
}
