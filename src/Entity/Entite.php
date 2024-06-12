<?php

namespace App\Entity;

use App\Repository\EntiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntiteRepository::class)]
class Entite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $echelleId = null;

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

    public function getEchelleId(): ?int
    {
        return $this->echelleId;
    }

    public function setEchelleId(int $echelleId): static
    {
        $this->echelleId = $echelleId;

        return $this;
    }
}
