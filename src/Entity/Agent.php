<?php

namespace App\Entity;

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
}
