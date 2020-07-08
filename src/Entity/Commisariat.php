<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommisariatRepository")
 */
class Commisariat
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Agent", mappedBy="commisariat")
     */
    private $Agents;

    public function __construct()
    {
        $this->Agents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

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
     * @return Collection|Agent[]
     */
    public function getAgents(): Collection
    {
        return $this->Agents;
    }

    public function addAgent(Agent $agent): self
    {
        if (!$this->Agents->contains($agent)) {
            $this->Agents[] = $agent;
            $agent->setCommisariat($this);
        }

        return $this;
    }

    public function removeAgent(Agent $agent): self
    {
        if ($this->Agents->contains($agent)) {
            $this->Agents->removeElement($agent);
            // set the owning side to null (unless already changed)
            if ($agent->getCommisariat() === $this) {
                $agent->setCommisariat(null);
            }
        }

        return $this;
    }
}
