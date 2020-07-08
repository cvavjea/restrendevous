<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DemandeurRepository")
 */
class Demandeur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Noms;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateNaiss;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $Tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms(): ?string
    {
        return $this->Noms;
    }

    public function setNoms(string $Noms): self
    {
        $this->Noms = $Noms;

        return $this;
    }

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->DateNaiss;
    }

    public function setDateNaiss(\DateTimeInterface $DateNaiss): self
    {
        $this->DateNaiss = $DateNaiss;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->Tel;
    }

    public function setTel(string $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }
}
