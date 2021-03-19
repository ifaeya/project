<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise", indexes={@ORM\Index(name="FK_association4", columns={"entrepriseSousSecteurReference"}), @ORM\Index(name="FK_association7", columns={"entrepriseChiffreAffaireReference"}), @ORM\Index(name="FK_association3", columns={"paysReference"}), @ORM\Index(name="FK_association5", columns={"entrepriseNombreEmployeReference"}), @ORM\Index(name="FK_association8", columns={"entrepriseServiceReference"})})
 * @ORM\Entity
 */
class Entreprise
{
    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entreprisereference;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseNombreEmployeReference", type="integer", nullable=false)
     */
    private $entreprisenombreemployereference;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseSousSecteurReference", type="integer", nullable=false)
     */
    private $entreprisesoussecteurreference;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseChiffreAffaireReference", type="integer", nullable=false)
     */
    private $entreprisechiffreaffairereference;

    /**
     * @var int
     *
     * @ORM\Column(name="paysReference", type="integer", nullable=false)
     */
    private $paysreference;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseServiceReference", type="integer", nullable=false)
     */
    private $entrepriseservicereference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseDenomination", type="string", length=254, nullable=true)
     */
    private $entreprisedenomination;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseLogo", type="string", length=254, nullable=true)
     */
    private $entrepriselogo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseAdresse", type="string", length=254, nullable=true)
     */
    private $entrepriseadresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseEmail", type="string", length=254, nullable=true)
     */
    private $entrepriseemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseSiteWeb", type="string", length=254, nullable=true)
     */
    private $entreprisesiteweb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entrepriseNombreClient", type="integer", nullable=true)
     */
    private $entreprisenombreclient;

    /**
     * @var float|null
     *
     * @ORM\Column(name="entreprisePourcentageCA", type="float", precision=10, scale=0, nullable=true)
     */
    private $entreprisepourcentageca;

    /**
     * @var float|null
     *
     * @ORM\Column(name="entreprisePrixInnovation", type="float", precision=10, scale=0, nullable=true)
     */
    private $entrepriseprixinnovation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entrepriseCellulaire", type="integer", nullable=true)
     */
    private $entreprisecellulaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entrepriseTelephone1", type="integer", nullable=true)
     */
    private $entreprisetelephone1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entrepriseTelephone2", type="integer", nullable=true)
     */
    private $entreprisetelephone2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entrepriseFax", type="integer", nullable=true)
     */
    private $entreprisefax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseTransferExport", type="string", length=254, nullable=true)
     */
    private $entreprisetransferexport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseExport", type="string", length=254, nullable=true)
     */
    private $entrepriseexport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseClient", type="string", length=254, nullable=true)
     */
    private $entrepriseclient;

    public function getEntreprisereference(): ?int
    {
        return $this->entreprisereference;
    }

    public function getEntreprisenombreemployereference(): ?int
    {
        return $this->entreprisenombreemployereference;
    }

    public function setEntreprisenombreemployereference(int $entreprisenombreemployereference): self
    {
        $this->entreprisenombreemployereference = $entreprisenombreemployereference;

        return $this;
    }

    public function getEntreprisesoussecteurreference(): ?int
    {
        return $this->entreprisesoussecteurreference;
    }

    public function setEntreprisesoussecteurreference(int $entreprisesoussecteurreference): self
    {
        $this->entreprisesoussecteurreference = $entreprisesoussecteurreference;

        return $this;
    }

    public function getEntreprisechiffreaffairereference(): ?int
    {
        return $this->entreprisechiffreaffairereference;
    }

    public function setEntreprisechiffreaffairereference(int $entreprisechiffreaffairereference): self
    {
        $this->entreprisechiffreaffairereference = $entreprisechiffreaffairereference;

        return $this;
    }

    public function getPaysreference(): ?int
    {
        return $this->paysreference;
    }

    public function setPaysreference(int $paysreference): self
    {
        $this->paysreference = $paysreference;

        return $this;
    }

    public function getEntrepriseservicereference(): ?int
    {
        return $this->entrepriseservicereference;
    }

    public function setEntrepriseservicereference(int $entrepriseservicereference): self
    {
        $this->entrepriseservicereference = $entrepriseservicereference;

        return $this;
    }

    public function getEntreprisedenomination(): ?string
    {
        return $this->entreprisedenomination;
    }

    public function setEntreprisedenomination(?string $entreprisedenomination): self
    {
        $this->entreprisedenomination = $entreprisedenomination;

        return $this;
    }

    public function getEntrepriselogo(): ?string
    {
        return $this->entrepriselogo;
    }

    public function setEntrepriselogo(?string $entrepriselogo): self
    {
        $this->entrepriselogo = $entrepriselogo;

        return $this;
    }

    public function getEntrepriseadresse(): ?string
    {
        return $this->entrepriseadresse;
    }

    public function setEntrepriseadresse(?string $entrepriseadresse): self
    {
        $this->entrepriseadresse = $entrepriseadresse;

        return $this;
    }

    public function getEntrepriseemail(): ?string
    {
        return $this->entrepriseemail;
    }

    public function setEntrepriseemail(?string $entrepriseemail): self
    {
        $this->entrepriseemail = $entrepriseemail;

        return $this;
    }

    public function getEntreprisesiteweb(): ?string
    {
        return $this->entreprisesiteweb;
    }

    public function setEntreprisesiteweb(?string $entreprisesiteweb): self
    {
        $this->entreprisesiteweb = $entreprisesiteweb;

        return $this;
    }

    public function getEntreprisenombreclient(): ?int
    {
        return $this->entreprisenombreclient;
    }

    public function setEntreprisenombreclient(?int $entreprisenombreclient): self
    {
        $this->entreprisenombreclient = $entreprisenombreclient;

        return $this;
    }

    public function getEntreprisepourcentageca(): ?float
    {
        return $this->entreprisepourcentageca;
    }

    public function setEntreprisepourcentageca(?float $entreprisepourcentageca): self
    {
        $this->entreprisepourcentageca = $entreprisepourcentageca;

        return $this;
    }

    public function getEntrepriseprixinnovation(): ?float
    {
        return $this->entrepriseprixinnovation;
    }

    public function setEntrepriseprixinnovation(?float $entrepriseprixinnovation): self
    {
        $this->entrepriseprixinnovation = $entrepriseprixinnovation;

        return $this;
    }

    public function getEntreprisecellulaire(): ?int
    {
        return $this->entreprisecellulaire;
    }

    public function setEntreprisecellulaire(?int $entreprisecellulaire): self
    {
        $this->entreprisecellulaire = $entreprisecellulaire;

        return $this;
    }

    public function getEntreprisetelephone1(): ?int
    {
        return $this->entreprisetelephone1;
    }

    public function setEntreprisetelephone1(?int $entreprisetelephone1): self
    {
        $this->entreprisetelephone1 = $entreprisetelephone1;

        return $this;
    }

    public function getEntreprisetelephone2(): ?int
    {
        return $this->entreprisetelephone2;
    }

    public function setEntreprisetelephone2(?int $entreprisetelephone2): self
    {
        $this->entreprisetelephone2 = $entreprisetelephone2;

        return $this;
    }

    public function getEntreprisefax(): ?int
    {
        return $this->entreprisefax;
    }

    public function setEntreprisefax(?int $entreprisefax): self
    {
        $this->entreprisefax = $entreprisefax;

        return $this;
    }

    public function getEntreprisetransferexport(): ?string
    {
        return $this->entreprisetransferexport;
    }

    public function setEntreprisetransferexport(?string $entreprisetransferexport): self
    {
        $this->entreprisetransferexport = $entreprisetransferexport;

        return $this;
    }

    public function getEntrepriseexport(): ?string
    {
        return $this->entrepriseexport;
    }

    public function setEntrepriseexport(?string $entrepriseexport): self
    {
        $this->entrepriseexport = $entrepriseexport;

        return $this;
    }

    public function getEntrepriseclient(): ?string
    {
        return $this->entrepriseclient;
    }

    public function setEntrepriseclient(?string $entrepriseclient): self
    {
        $this->entrepriseclient = $entrepriseclient;

        return $this;
    }


}
