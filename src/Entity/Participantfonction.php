<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participantfonction
 *
 * @ORM\Table(name="participantfonction")
 * @ORM\Entity
 */
class Participantfonction
{
    /**
     * @var int
     *
     * @ORM\Column(name="participantFonctionReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $participantfonctionreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantFonctionLibelle", type="string", length=254, nullable=true)
     */
    private $participantfonctionlibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantFonctionDescription", type="string", length=254, nullable=true)
     */
    private $participantfonctiondescription;

    public function getParticipantfonctionreference(): ?int
    {
        return $this->participantfonctionreference;
    }

    public function getParticipantfonctionlibelle(): ?string
    {
        return $this->participantfonctionlibelle;
    }

    public function setParticipantfonctionlibelle(?string $participantfonctionlibelle): self
    {
        $this->participantfonctionlibelle = $participantfonctionlibelle;

        return $this;
    }

    public function getParticipantfonctiondescription(): ?string
    {
        return $this->participantfonctiondescription;
    }

    public function setParticipantfonctiondescription(?string $participantfonctiondescription): self
    {
        $this->participantfonctiondescription = $participantfonctiondescription;

        return $this;
    }


}
