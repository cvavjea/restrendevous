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
     * @ORM\ManyToOne(targetEntity="App\Entity\Demandeur", inversedBy="prendres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Demandeurs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Agent", inversedBy="prendres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Agents;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Calendrier", inversedBy="prendres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Calendriers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDemandeurs(): ?Demandeur
    {
        return $this->Demandeurs;
    }

    public function setDemandeurs(?Demandeur $Demandeurs): self
    {
        $this->Demandeurs = $Demandeurs;

        return $this;
    }

    public function getAgents(): ?Agent
    {
        return $this->Agents;
    }

    public function setAgents(?Agent $Agents): self
    {
        $this->Agents = $Agents;

        return $this;
    }

    public function getCalendriers(): ?Calendrier
    {
        return $this->Calendriers;
    }

    public function setCalendriers(?Calendrier $Calendriers): self
    {
        $this->Calendriers = $Calendriers;

        return $this;
    }
}
