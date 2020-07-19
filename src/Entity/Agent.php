<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgentRepository")
 */
class Agent
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
     * @ORM\Column(type="string", length=15)
     */
    private $Tel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commisariat", inversedBy="Agents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commisariat;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prendre", mappedBy="Agents")
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

    public function getTel(): ?string
    {
        return $this->Tel;
    }

    public function setTel(string $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getCommisariat(): ?Commisariat
    {
        return $this->commisariat;
    }

    public function setCommisariat(?Commisariat $commisariat): self
    {
        $this->commisariat = $commisariat;

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
            $prendre->setAgents($this);
        }

        return $this;
    }

    public function removePrendre(Prendre $prendre): self
    {
        if ($this->prendres->contains($prendre)) {
            $this->prendres->removeElement($prendre);
            // set the owning side to null (unless already changed)
            if ($prendre->getAgents() === $this) {
                $prendre->setAgents(null);
            }
        }

        return $this;
    }
}
