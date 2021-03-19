<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participantcooperationsouhaite
 *
 * @ORM\Table(name="participantcooperationsouhaite", indexes={@ORM\Index(name="AK_Identifiant_1", columns={"participantCooperationSouhaiteReference"})})
 * @ORM\Entity
 */
class Participantcooperationsouhaite
{
    /**
     * @var int
     *
     * @ORM\Column(name="participantCooperationSouhaiteReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $participantcooperationsouhaitereference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantCooperationSouhaiteLibelle", type="string", length=254, nullable=true)
     */
    private $participantcooperationsouhaitelibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantCooperationSouhaiteDescription", type="string", length=254, nullable=true)
     */
    private $participantcooperationsouhaitedescription;

    public function getParticipantcooperationsouhaitereference(): ?int
    {
        return $this->participantcooperationsouhaitereference;
    }

    public function getParticipantcooperationsouhaitelibelle(): ?string
    {
        return $this->participantcooperationsouhaitelibelle;
    }

    public function setParticipantcooperationsouhaitelibelle(?string $participantcooperationsouhaitelibelle): self
    {
        $this->participantcooperationsouhaitelibelle = $participantcooperationsouhaitelibelle;

        return $this;
    }

    public function getParticipantcooperationsouhaitedescription(): ?string
    {
        return $this->participantcooperationsouhaitedescription;
    }

    public function setParticipantcooperationsouhaitedescription(?string $participantcooperationsouhaitedescription): self
    {
        $this->participantcooperationsouhaitedescription = $participantcooperationsouhaitedescription;

        return $this;
    }


}
