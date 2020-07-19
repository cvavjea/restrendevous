<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prendre", mappedBy="Demandeurs")
     */
    private $prendres;

    public function __construct()
    {
        $this->prendres = new ArrayCollection();
    }

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

    /**
     * @return Collection|Prendre[]
     */
    public function getPrendres(): Collection
    {
        return $this->prendres;
    }

    public function addPrendre(Prendre $prendre): self
    {
        if (!$this->prendres->contains($prendre)) {
            $this->prendres[] = $prendre;
            $prendre->setDemandeurs($this);
        }

        return $this;
    }

    public function removePrendre(Prendre $prendre): self
    {
        if ($this->prendres->contains($prendre)) {
            $this->prendres->removeElement($prendre);
            // set the owning side to null (unless already changed)
            if ($prendre->getDemandeurs() === $this) {
                $prendre->setDemandeurs(null);
            }
        }

        return $this;
    }
}
