<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprisesecteur
 *
 * @ORM\Table(name="entreprisesecteur", indexes={@ORM\Index(name="FK_association1", columns={"entrepriseSecteurpPincipalReference"})})
 * @ORM\Entity
 */
class Entreprisesecteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseSecteurReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entreprisesecteurreference;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseSecteurpPincipalReference", type="integer", nullable=false)
     */
    private $entreprisesecteurppincipalreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseSecteurLibelle", type="string", length=254, nullable=true)
     */
    private $entreprisesecteurlibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseSecteurDescription", type="string", length=254, nullable=true)
     */
    private $entreprisesecteurdescription;

    public function getEntreprisesecteurreference(): ?int
    {
        return $this->entreprisesecteurreference;
    }

    public function getEntreprisesecteurppincipalreference(): ?int
    {
        return $this->entreprisesecteurppincipalreference;
    }

    public function setEntreprisesecteurppincipalreference(int $entreprisesecteurppincipalreference): self
    {
        $this->entreprisesecteurppincipalreference = $entreprisesecteurppincipalreference;

        return $this;
    }

    public function getEntreprisesecteurlibelle(): ?string
    {
        return $this->entreprisesecteurlibelle;
    }

    public function setEntreprisesecteurlibelle(?string $entreprisesecteurlibelle): self
    {
        $this->entreprisesecteurlibelle = $entreprisesecteurlibelle;

        return $this;
    }

    public function getEntreprisesecteurdescription(): ?string
    {
        return $this->entreprisesecteurdescription;
    }

    public function setEntreprisesecteurdescription(?string $entreprisesecteurdescription): self
    {
        $this->entreprisesecteurdescription = $entreprisesecteurdescription;

        return $this;
    }


}
