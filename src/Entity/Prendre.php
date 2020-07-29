<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PrendreRepository")
 */
class Prendre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="prendres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Demandeurs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="prendres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Agents;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commisariat", inversedBy="prendres")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commisariat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Dateredevous;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDemandeurs(): ?User
    {
        return $this->Demandeurs;
    }

    public function setDemandeurs(?User $Demandeurs): self
    {
        $this->Demandeurs = $Demandeurs;

        return $this;
    }

    public function getAgents(): ?User
    {
        return $this->Agents;
    }

    public function setAgents(?User $Agents): self
    {
        $this->Agents = $Agents;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateredevous()
    {
        return $this->Dateredevous;
    }

    /**
     * @param mixed $Dateredevous
     */
    public function setDateredevous($Dateredevous): void
    {
        $this->Dateredevous = $Dateredevous;
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
