<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays", indexes={@ORM\Index(name="AK_Identifiant_1", columns={"paysReference"})})
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="paysReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paysreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paysLibelle", type="string", length=254, nullable=true)
     */
    private $payslibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paysDescription", type="string", length=254, nullable=true)
     */
    private $paysdescription;

    public function getPaysreference(): ?int
    {
        return $this->paysreference;
    }

    public function getPayslibelle(): ?string
    {
        return $this->payslibelle;
    }

    public function setPayslibelle(?string $payslibelle): self
    {
        $this->payslibelle = $payslibelle;

        return $this;
    }

    public function getPaysdescription(): ?string
    {
        return $this->paysdescription;
    }

    public function setPaysdescription(?string $paysdescription): self
    {
        $this->paysdescription = $paysdescription;

        return $this;
    }


}
