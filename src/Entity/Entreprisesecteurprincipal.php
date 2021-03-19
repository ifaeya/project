<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprisesecteurprincipal
 *
 * @ORM\Table(name="entreprisesecteurprincipal")
 * @ORM\Entity
 */
class Entreprisesecteurprincipal
{
    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseSecteurpPincipalReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entreprisesecteurppincipalreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseSecteurpPincipalLibelle", type="string", length=254, nullable=true)
     */
    private $entreprisesecteurppincipallibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attrientrepriseSecteurpPincipalDescription", type="string", length=254, nullable=true)
     */
    private $attrientreprisesecteurppincipaldescription;

    public function getEntreprisesecteurppincipalreference(): ?int
    {
        return $this->entreprisesecteurppincipalreference;
    }

    public function getEntreprisesecteurppincipallibelle(): ?string
    {
        return $this->entreprisesecteurppincipallibelle;
    }

    public function setEntreprisesecteurppincipallibelle(?string $entreprisesecteurppincipallibelle): self
    {
        $this->entreprisesecteurppincipallibelle = $entreprisesecteurppincipallibelle;

        return $this;
    }

    public function getAttrientreprisesecteurppincipaldescription(): ?string
    {
        return $this->attrientreprisesecteurppincipaldescription;
    }

    public function setAttrientreprisesecteurppincipaldescription(?string $attrientreprisesecteurppincipaldescription): self
    {
        $this->attrientreprisesecteurppincipaldescription = $attrientreprisesecteurppincipaldescription;

        return $this;
    }


}
