<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participantservice
 *
 * @ORM\Table(name="participantservice")
 * @ORM\Entity
 */
class Participantservice
{
    /**
     * @var int
     *
     * @ORM\Column(name="participantServiceReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $participantservicereference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantServiceLibelle", type="string", length=254, nullable=true)
     */
    private $participantservicelibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantServiceDescription", type="string", length=254, nullable=true)
     */
    private $participantservicedescription;

    public function getParticipantservicereference(): ?int
    {
        return $this->participantservicereference;
    }

    public function getParticipantservicelibelle(): ?string
    {
        return $this->participantservicelibelle;
    }

    public function setParticipantservicelibelle(?string $participantservicelibelle): self
    {
        $this->participantservicelibelle = $participantservicelibelle;

        return $this;
    }

    public function getParticipantservicedescription(): ?string
    {
        return $this->participantservicedescription;
    }

    public function setParticipantservicedescription(?string $participantservicedescription): self
    {
        $this->participantservicedescription = $participantservicedescription;

        return $this;
    }


}
