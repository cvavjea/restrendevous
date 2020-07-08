<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CalendrierRepository")
 */
class Calendrier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateRdv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRdv(): ?\DateTimeInterface
    {
        return $this->DateRdv;
    }

    public function setDateRdv(\DateTimeInterface $DateRdv): self
    {
        $this->DateRdv = $DateRdv;

        return $this;
    }
}
