<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salonedition
 *
 * @ORM\Table(name="salonedition", indexes={@ORM\Index(name="FK_association10", columns={"salonReference"})})
 * @ORM\Entity
 */
class Salonedition
{
    /**
     * @var int
     *
     * @ORM\Column(name="salonEditionRefrence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $saloneditionrefrence;

    /**
     * @var int
     *
     * @ORM\Column(name="salonReference", type="integer", nullable=false)
     */
    private $salonreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salonEditionAdresse", type="string", length=254, nullable=true)
     */
    private $saloneditionadresse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionDateDebut", type="datetime", nullable=true)
     */
    private $saloneditiondatedebut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionNombreJour", type="integer", nullable=true)
     */
    private $saloneditionnombrejour;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionDateFin", type="datetime", nullable=true)
     */
    private $saloneditiondatefin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionHeureDebutParJour", type="datetime", nullable=true)
     */
    private $saloneditionheuredebutparjour;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionHeureFinParJour", type="datetime", nullable=true)
     */
    private $saloneditionheurefinparjour;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionDureeRencontre", type="integer", nullable=true)
     */
    private $saloneditiondureerencontre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionDebutRepas", type="datetime", nullable=true)
     */
    private $saloneditiondebutrepas;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionDureeRepas", type="datetime", nullable=true)
     */
    private $saloneditiondureerepas;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionFinRepas", type="datetime", nullable=true)
     */
    private $saloneditionfinrepas;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionDebutPauseCafeAM", type="datetime", nullable=true)
     */
    private $saloneditiondebutpausecafeam;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionDureePauseCAfeAM", type="integer", nullable=true)
     */
    private $saloneditiondureepausecafeam;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionFinPauseCafeAM", type="datetime", nullable=true)
     */
    private $saloneditionfinpausecafeam;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionDebutPauseCafePM", type="datetime", nullable=true)
     */
    private $saloneditiondebutpausecafepm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionDureePauseCAfePM", type="integer", nullable=true)
     */
    private $saloneditiondureepausecafepm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionFinPauseCafePM", type="datetime", nullable=true)
     */
    private $saloneditionfinpausecafepm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionDateLimiteInscription", type="datetime", nullable=true)
     */
    private $saloneditiondatelimiteinscription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="salonEditionDateLimiteRencontre", type="datetime", nullable=true)
     */
    private $saloneditiondatelimiterencontre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="salonEditionMaxRencontre", type="integer", nullable=true)
     */
    private $saloneditionmaxrencontre;

    public function getSaloneditionrefrence(): ?int
    {
        return $this->saloneditionrefrence;
    }

    public function getSalonreference(): ?int
    {
        return $this->salonreference;
    }

    public function setSalonreference(int $salonreference): self
    {
        $this->salonreference = $salonreference;

        return $this;
    }

    public function getSaloneditionadresse(): ?string
    {
        return $this->saloneditionadresse;
    }

    public function setSaloneditionadresse(?string $saloneditionadresse): self
    {
        $this->saloneditionadresse = $saloneditionadresse;

        return $this;
    }

    public function getSaloneditiondatedebut(): ?\DateTimeInterface
    {
        return $this->saloneditiondatedebut;
    }

    public function setSaloneditiondatedebut(?\DateTimeInterface $saloneditiondatedebut): self
    {
        $this->saloneditiondatedebut = $saloneditiondatedebut;

        return $this;
    }

    public function getSaloneditionnombrejour(): ?int
    {
        return $this->saloneditionnombrejour;
    }

    public function setSaloneditionnombrejour(?int $saloneditionnombrejour): self
    {
        $this->saloneditionnombrejour = $saloneditionnombrejour;

        return $this;
    }

    public function getSaloneditiondatefin(): ?\DateTimeInterface
    {
        return $this->saloneditiondatefin;
    }

    public function setSaloneditiondatefin(?\DateTimeInterface $saloneditiondatefin): self
    {
        $this->saloneditiondatefin = $saloneditiondatefin;

        return $this;
    }

    public function getSaloneditionheuredebutparjour(): ?\DateTimeInterface
    {
        return $this->saloneditionheuredebutparjour;
    }

    public function setSaloneditionheuredebutparjour(?\DateTimeInterface $saloneditionheuredebutparjour): self
    {
        $this->saloneditionheuredebutparjour = $saloneditionheuredebutparjour;

        return $this;
    }

    public function getSaloneditionheurefinparjour(): ?\DateTimeInterface
    {
        return $this->saloneditionheurefinparjour;
    }

    public function setSaloneditionheurefinparjour(?\DateTimeInterface $saloneditionheurefinparjour): self
    {
        $this->saloneditionheurefinparjour = $saloneditionheurefinparjour;

        return $this;
    }

    public function getSaloneditiondureerencontre(): ?int
    {
        return $this->saloneditiondureerencontre;
    }

    public function setSaloneditiondureerencontre(?int $saloneditiondureerencontre): self
    {
        $this->saloneditiondureerencontre = $saloneditiondureerencontre;

        return $this;
    }

    public function getSaloneditiondebutrepas(): ?\DateTimeInterface
    {
        return $this->saloneditiondebutrepas;
    }

    public function setSaloneditiondebutrepas(?\DateTimeInterface $saloneditiondebutrepas): self
    {
        $this->saloneditiondebutrepas = $saloneditiondebutrepas;

        return $this;
    }

    public function getSaloneditiondureerepas(): ?\DateTimeInterface
    {
        return $this->saloneditiondureerepas;
    }

    public function setSaloneditiondureerepas(?\DateTimeInterface $saloneditiondureerepas): self
    {
        $this->saloneditiondureerepas = $saloneditiondureerepas;

        return $this;
    }

    public function getSaloneditionfinrepas(): ?\DateTimeInterface
    {
        return $this->saloneditionfinrepas;
    }

    public function setSaloneditionfinrepas(?\DateTimeInterface $saloneditionfinrepas): self
    {
        $this->saloneditionfinrepas = $saloneditionfinrepas;

        return $this;
    }

    public function getSaloneditiondebutpausecafeam(): ?\DateTimeInterface
    {
        return $this->saloneditiondebutpausecafeam;
    }

    public function setSaloneditiondebutpausecafeam(?\DateTimeInterface $saloneditiondebutpausecafeam): self
    {
        $this->saloneditiondebutpausecafeam = $saloneditiondebutpausecafeam;

        return $this;
    }

    public function getSaloneditiondureepausecafeam(): ?int
    {
        return $this->saloneditiondureepausecafeam;
    }

    public function setSaloneditiondureepausecafeam(?int $saloneditiondureepausecafeam): self
    {
        $this->saloneditiondureepausecafeam = $saloneditiondureepausecafeam;

        return $this;
    }

    public function getSaloneditionfinpausecafeam(): ?\DateTimeInterface
    {
        return $this->saloneditionfinpausecafeam;
    }

    public function setSaloneditionfinpausecafeam(?\DateTimeInterface $saloneditionfinpausecafeam): self
    {
        $this->saloneditionfinpausecafeam = $saloneditionfinpausecafeam;

        return $this;
    }

    public function getSaloneditiondebutpausecafepm(): ?\DateTimeInterface
    {
        return $this->saloneditiondebutpausecafepm;
    }

    public function setSaloneditiondebutpausecafepm(?\DateTimeInterface $saloneditiondebutpausecafepm): self
    {
        $this->saloneditiondebutpausecafepm = $saloneditiondebutpausecafepm;

        return $this;
    }

    public function getSaloneditiondureepausecafepm(): ?int
    {
        return $this->saloneditiondureepausecafepm;
    }

    public function setSaloneditiondureepausecafepm(?int $saloneditiondureepausecafepm): self
    {
        $this->saloneditiondureepausecafepm = $saloneditiondureepausecafepm;

        return $this;
    }

    public function getSaloneditionfinpausecafepm(): ?\DateTimeInterface
    {
        return $this->saloneditionfinpausecafepm;
    }

    public function setSaloneditionfinpausecafepm(?\DateTimeInterface $saloneditionfinpausecafepm): self
    {
        $this->saloneditionfinpausecafepm = $saloneditionfinpausecafepm;

        return $this;
    }

    public function getSaloneditiondatelimiteinscription(): ?\DateTimeInterface
    {
        return $this->saloneditiondatelimiteinscription;
    }

    public function setSaloneditiondatelimiteinscription(?\DateTimeInterface $saloneditiondatelimiteinscription): self
    {
        $this->saloneditiondatelimiteinscription = $saloneditiondatelimiteinscription;

        return $this;
    }

    public function getSaloneditiondatelimiterencontre(): ?\DateTimeInterface
    {
        return $this->saloneditiondatelimiterencontre;
    }

    public function setSaloneditiondatelimiterencontre(?\DateTimeInterface $saloneditiondatelimiterencontre): self
    {
        $this->saloneditiondatelimiterencontre = $saloneditiondatelimiterencontre;

        return $this;
    }

    public function getSaloneditionmaxrencontre(): ?int
    {
        return $this->saloneditionmaxrencontre;
    }

    public function setSaloneditionmaxrencontre(?int $saloneditionmaxrencontre): self
    {
        $this->saloneditionmaxrencontre = $saloneditionmaxrencontre;

        return $this;
    }


}
