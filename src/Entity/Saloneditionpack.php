<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saloneditionpack
 *
 * @ORM\Table(name="saloneditionpack", indexes={@ORM\Index(name="FK_association12", columns={"salonEditionRefrence"})})
 * @ORM\Entity
 */
class Saloneditionpack
{
    /**
     * @var int
     *
     * @ORM\Column(name="salonEditionPackReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $saloneditionpackreference;

    /**
     * @var int
     *
     * @ORM\Column(name="salonEditionRefrence", type="integer", nullable=false)
     */
    private $saloneditionrefrence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionPackLibelle", type="integer", nullable=true)
     */
    private $saloneditionpacklibelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionPackNombreParticipant", type="integer", nullable=true)
     */
    private $saloneditionpacknombreparticipant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionPackMontant", type="integer", nullable=true)
     */
    private $saloneditionpackmontant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionPackDescription", type="integer", nullable=true)
     */
    private $saloneditionpackdescription;

    public function getSaloneditionpackreference(): ?int
    {
        return $this->saloneditionpackreference;
    }

    public function getSaloneditionrefrence(): ?int
    {
        return $this->saloneditionrefrence;
    }

    public function setSaloneditionrefrence(int $saloneditionrefrence): self
    {
        $this->saloneditionrefrence = $saloneditionrefrence;

        return $this;
    }

    public function getSaloneditionpacklibelle(): ?int
    {
        return $this->saloneditionpacklibelle;
    }

    public function setSaloneditionpacklibelle(?int $saloneditionpacklibelle): self
    {
        $this->saloneditionpacklibelle = $saloneditionpacklibelle;

        return $this;
    }

    public function getSaloneditionpacknombreparticipant(): ?int
    {
        return $this->saloneditionpacknombreparticipant;
    }

    public function setSaloneditionpacknombreparticipant(?int $saloneditionpacknombreparticipant): self
    {
        $this->saloneditionpacknombreparticipant = $saloneditionpacknombreparticipant;

        return $this;
    }

    public function getSaloneditionpackmontant(): ?int
    {
        return $this->saloneditionpackmontant;
    }

    public function setSaloneditionpackmontant(?int $saloneditionpackmontant): self
    {
        $this->saloneditionpackmontant = $saloneditionpackmontant;

        return $this;
    }

    public function getSaloneditionpackdescription(): ?int
    {
        return $this->saloneditionpackdescription;
    }

    public function setSaloneditionpackdescription(?int $saloneditionpackdescription): self
    {
        $this->saloneditionpackdescription = $saloneditionpackdescription;

        return $this;
    }


}
