<?php

namespace App\Entity;

use App\Repository\HobbiesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HobbiesRepository::class)
 */
class Hobbies
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="time")
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?\DateTimeInterface
    {
        return $this->name;
    }

    public function setName(\DateTimeInterface $name): self
    {
        $this->name = $name;

        return $this;
    }
}
