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
     * @ORM\Column(type="string", length=255)
     */
    private $Tel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="commisariat")
     */
    private $Agents;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prendre", mappedBy="commisariat")
     */
    private $Prendre;

    public function __construct()
    {
        $this->Agents = new ArrayCollection();
    }

    public function __toString()
    {
        return 'de '.$this->getNom();
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
     * @return Collection|User[]
     */
    public function getAgents(): Collection
    {
        return $this->Agents;
    }

    public function addAgent(User $agent): self
    {
        if (!$this->Agents->contains($agent)) {
            $this->Agents[] = $agent;
            $agent->setCommisariat($this);
        }

        return $this;
    }

    public function removeAgent(User $agent): self
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

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * @param mixed $Tel
     */
    public function setTel($Tel): void
    {
        $this->Tel = $Tel;
    }


    /**
     * @return Collection|Prendre[]
     */
    public function getPrendres(): Collection
    {
        return $this->Prendre;
    }

    public function addPrendre(Prendre $prendre): self
    {
        if (!$this->Prendre->contains($prendre)) {
            $this->Prendre[] = $prendre;
            $prendre->setCommisariat($this);
        }

        return $this;
    }

    public function removePrendre(Prendre $prendre): self
    {
        if ($this->Prendre->contains($prendre)) {
            $this->Prendre->removeElement($prendre);
            // set the owning side to null (unless already changed)
            if ($prendre->getCommisariat() === $this) {
                $prendre->setCommisariat(null);
            }
        }

        return $this;
    }

}
