<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprisesoussecteur
 *
 * @ORM\Table(name="entreprisesoussecteur", indexes={@ORM\Index(name="FK_association2", columns={"entrepriseSecteurReference"})})
 * @ORM\Entity
 */
class Entreprisesoussecteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseSousSecteurReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entreprisesoussecteurreference;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseSecteurReference", type="integer", nullable=false)
     */
    private $entreprisesecteurreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseSousSecteurLibelle", type="string", length=254, nullable=true)
     */
    private $entreprisesoussecteurlibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseSousSecteurDescription", type="string", length=254, nullable=true)
     */
    private $entreprisesoussecteurdescription;

    public function getEntreprisesoussecteurreference(): ?int
    {
        return $this->entreprisesoussecteurreference;
    }

    public function getEntreprisesecteurreference(): ?int
    {
        return $this->entreprisesecteurreference;
    }

    public function setEntreprisesecteurreference(int $entreprisesecteurreference): self
    {
        $this->entreprisesecteurreference = $entreprisesecteurreference;

        return $this;
    }

    public function getEntreprisesoussecteurlibelle(): ?string
    {
        return $this->entreprisesoussecteurlibelle;
    }

    public function setEntreprisesoussecteurlibelle(?string $entreprisesoussecteurlibelle): self
    {
        $this->entreprisesoussecteurlibelle = $entreprisesoussecteurlibelle;

        return $this;
    }

    public function getEntreprisesoussecteurdescription(): ?string
    {
        return $this->entreprisesoussecteurdescription;
    }

    public function setEntreprisesoussecteurdescription(?string $entreprisesoussecteurdescription): self
    {
        $this->entreprisesoussecteurdescription = $entreprisesoussecteurdescription;

        return $this;
    }


}
