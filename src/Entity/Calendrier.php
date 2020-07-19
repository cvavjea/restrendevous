<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prendre", mappedBy="Calendriers")
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

    public function getDateRdv(): ?\DateTimeInterface
    {
        return $this->DateRdv;
    }

    public function setDateRdv(\DateTimeInterface $DateRdv): self
    {
        $this->DateRdv = $DateRdv;

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
            $prendre->setCalendriers($this);
        }

        return $this;
    }

    public function removePrendre(Prendre $prendre): self
    {
        if ($this->prendres->contains($prendre)) {
            $this->prendres->removeElement($prendre);
            // set the owning side to null (unless already changed)
            if ($prendre->getCalendriers() === $this) {
                $prendre->setCalendriers(null);
            }
        }

        return $this;
    }
}
