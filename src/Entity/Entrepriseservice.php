<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrepriseservice
 *
 * @ORM\Table(name="entrepriseservice")
 * @ORM\Entity
 */
class Entrepriseservice
{
    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseServiceReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entrepriseservicereference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseServiceLibelle", type="string", length=254, nullable=true)
     */
    private $entrepriseservicelibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseServiceDescription", type="string", length=254, nullable=true)
     */
    private $entrepriseservicedescription;

    public function getEntrepriseservicereference(): ?int
    {
        return $this->entrepriseservicereference;
    }

    public function getEntrepriseservicelibelle(): ?string
    {
        return $this->entrepriseservicelibelle;
    }

    public function setEntrepriseservicelibelle(?string $entrepriseservicelibelle): self
    {
        $this->entrepriseservicelibelle = $entrepriseservicelibelle;

        return $this;
    }

    public function getEntrepriseservicedescription(): ?string
    {
        return $this->entrepriseservicedescription;
    }

    public function setEntrepriseservicedescription(?string $entrepriseservicedescription): self
    {
        $this->entrepriseservicedescription = $entrepriseservicedescription;

        return $this;
    }


}
