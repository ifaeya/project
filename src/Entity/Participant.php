<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant", indexes={@ORM\Index(name="FK_association13", columns={"participantFonctionReference"}), @ORM\Index(name="FK_association9", columns={"entrepriseReference"}), @ORM\Index(name="AK_Identifiant_1", columns={"participantReference"}), @ORM\Index(name="FK_association14", columns={"participantServiceReference"})})
 * @ORM\Entity
 */
class Participant
{
    /**
     * @var int
     *
     * @ORM\Column(name="participantReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $participantreference;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseReference", type="integer", nullable=false)
     */
    private $entreprisereference;

    /**
     * @var int
     *
     * @ORM\Column(name="participantFonctionReference", type="integer", nullable=false)
     */
    private $participantfonctionreference;

    /**
     * @var int
     *
     * @ORM\Column(name="participantServiceReference", type="integer", nullable=false)
     */
    private $participantservicereference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantNom", type="string", length=254, nullable=true)
     */
    private $participantnom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantPrenom", type="string", length=254, nullable=true)
     */
    private $participantprenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantEmail", type="string", length=254, nullable=true)
     */
    private $participantemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantPhotoProfil", type="string", length=254, nullable=true)
     */
    private $participantphotoprofil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantCivilite", type="string", length=254, nullable=true)
     */
    private $participantcivilite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="participantTelephone", type="integer", nullable=true)
     */
    private $participanttelephone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="participantFax", type="integer", nullable=true)
     */
    private $participantfax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="participantGsm", type="integer", nullable=true)
     */
    private $participantgsm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participantLinkedin", type="string", length=254, nullable=true)
     */
    private $participantlinkedin;

    public function getParticipantreference(): ?int
    {
        return $this->participantreference;
    }

    public function getEntreprisereference(): ?int
    {
        return $this->entreprisereference;
    }

    public function setEntreprisereference(int $entreprisereference): self
    {
        $this->entreprisereference = $entreprisereference;

        return $this;
    }

    public function getParticipantfonctionreference(): ?int
    {
        return $this->participantfonctionreference;
    }

    public function setParticipantfonctionreference(int $participantfonctionreference): self
    {
        $this->participantfonctionreference = $participantfonctionreference;

        return $this;
    }

    public function getParticipantservicereference(): ?int
    {
        return $this->participantservicereference;
    }

    public function setParticipantservicereference(int $participantservicereference): self
    {
        $this->participantservicereference = $participantservicereference;

        return $this;
    }

    public function getParticipantnom(): ?string
    {
        return $this->participantnom;
    }

    public function setParticipantnom(?string $participantnom): self
    {
        $this->participantnom = $participantnom;

        return $this;
    }

    public function getParticipantprenom(): ?string
    {
        return $this->participantprenom;
    }

    public function setParticipantprenom(?string $participantprenom): self
    {
        $this->participantprenom = $participantprenom;

        return $this;
    }

    public function getParticipantemail(): ?string
    {
        return $this->participantemail;
    }

    public function setParticipantemail(?string $participantemail): self
    {
        $this->participantemail = $participantemail;

        return $this;
    }

    public function getParticipantphotoprofil(): ?string
    {
        return $this->participantphotoprofil;
    }

    public function setParticipantphotoprofil(?string $participantphotoprofil): self
    {
        $this->participantphotoprofil = $participantphotoprofil;

        return $this;
    }

    public function getParticipantcivilite(): ?string
    {
        return $this->participantcivilite;
    }

    public function setParticipantcivilite(?string $participantcivilite): self
    {
        $this->participantcivilite = $participantcivilite;

        return $this;
    }

    public function getParticipanttelephone(): ?int
    {
        return $this->participanttelephone;
    }

    public function setParticipanttelephone(?int $participanttelephone): self
    {
        $this->participanttelephone = $participanttelephone;

        return $this;
    }

    public function getParticipantfax(): ?int
    {
        return $this->participantfax;
    }

    public function setParticipantfax(?int $participantfax): self
    {
        $this->participantfax = $participantfax;

        return $this;
    }

    public function getParticipantgsm(): ?int
    {
        return $this->participantgsm;
    }

    public function setParticipantgsm(?int $participantgsm): self
    {
        $this->participantgsm = $participantgsm;

        return $this;
    }

    public function getParticipantlinkedin(): ?string
    {
        return $this->participantlinkedin;
    }

    public function setParticipantlinkedin(?string $participantlinkedin): self
    {
        $this->participantlinkedin = $participantlinkedin;

        return $this;
    }


}
