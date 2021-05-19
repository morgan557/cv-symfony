<?php

namespace App\Entity;

use App\Repository\ProffesionnalExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProffesionnalExperienceRepository::class)
 */
class ProffesionnalExperience
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $durée;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entreprise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDurée(): ?\DateTimeInterface
    {
        return $this->durée;
    }

    public function setDurée(?\DateTimeInterface $durée): self
    {
        $this->durée = $durée;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }
}
