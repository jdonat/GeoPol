<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatRepository::class)]
class Candidat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column]
    private array $listeIds = [];

    #[ORM\Column]
    private array $partiIds = [];

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getListeIds(): array
    {
        return $this->listeIds;
    }

    public function setListeId(array $listeIds): static
    {
        $this->listeIds = $listeIds;

        return $this;
    }

    public function getPartiId(): array
    {
        return $this->partiIds;
    }

    public function setPartiId(array $partiIds): static
    {
        $this->partiIds = $partiIds;

        return $this;
    }
}
