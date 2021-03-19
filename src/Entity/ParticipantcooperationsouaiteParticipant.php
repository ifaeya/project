<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipantcooperationsouaiteParticipant
 *
 * @ORM\Table(name="participantcooperationsouaite_participant", indexes={@ORM\Index(name="FK_association15", columns={"participantReference"})})
 * @ORM\Entity
 */
class ParticipantcooperationsouaiteParticipant
{
    /**
     * @var int
     *
     * @ORM\Column(name="participantCooperationSouhaiteReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $participantcooperationsouhaitereference;

    /**
     * @var int
     *
     * @ORM\Column(name="participantReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $participantreference;

    public function getParticipantcooperationsouhaitereference(): ?int
    {
        return $this->participantcooperationsouhaitereference;
    }

    public function getParticipantreference(): ?int
    {
        return $this->participantreference;
    }


}
