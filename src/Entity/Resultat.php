<?php

namespace App\Entity;

use App\Repository\ResultatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResultatRepository::class)]
class Resultat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $entiteId = null;

    #[ORM\Column]
    private ?int $tour = null;

    #[ORM\Column]
    private ?int $voix = null;

    #[ORM\Column]
    private ?int $resultat = null;

    #[ORM\Column]
    private ?int $listeId = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_scrutin = null;

    public function getId(): ?int
    {
        return $this->id;
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
    public function getTour(): ?int
    {
        return $this->tour;
    }

    public function setTour(int $tour): static
    {
        $this->tour = $tour;

        return $this;
    }

    public function getVoix(): ?int
    {
        return $this->voix;
    }

    public function setVoix(int $voix): static
    {
        $this->voix = $voix;

        return $this;
    }

    public function getResultat(): ?int
    {
        return $this->resultat;
    }

    public function setResultat(int $resultat): static
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getListeId(): ?int
    {
        return $this->listeId;
    }

    public function setListeId(int $listeId): static
    {
        $this->listeId = $listeId;

        return $this;
    }

    public function getDateScrutin(): ?\DateTimeInterface
    {
        return $this->date_scrutin;
    }

    public function setDateScrutin(\DateTimeInterface $date_scrutin): static
    {
        $this->date_scrutin = $date_scrutin;

        return $this;
    }
}
