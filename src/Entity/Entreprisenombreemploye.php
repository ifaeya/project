<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprisenombreemploye
 *
 * @ORM\Table(name="entreprisenombreemploye")
 * @ORM\Entity
 */
class Entreprisenombreemploye
{
    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseNombreEmployeReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entreprisenombreemployereference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attributEntrepriseNombreEmployeLibelle", type="string", length=254, nullable=true)
     */
    private $attributentreprisenombreemployelibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseNombreEmployeDescription", type="string", length=254, nullable=true)
     */
    private $entreprisenombreemployedescription;

    public function getEntreprisenombreemployereference(): ?int
    {
        return $this->entreprisenombreemployereference;
    }

    public function getAttributentreprisenombreemployelibelle(): ?string
    {
        return $this->attributentreprisenombreemployelibelle;
    }

    public function setAttributentreprisenombreemployelibelle(?string $attributentreprisenombreemployelibelle): self
    {
        $this->attributentreprisenombreemployelibelle = $attributentreprisenombreemployelibelle;

        return $this;
    }

    public function getEntreprisenombreemployedescription(): ?string
    {
        return $this->entreprisenombreemployedescription;
    }

    public function setEntreprisenombreemployedescription(?string $entreprisenombreemployedescription): self
    {
        $this->entreprisenombreemployedescription = $entreprisenombreemployedescription;

        return $this;
    }


}
