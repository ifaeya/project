<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salonsalle
 *
 * @ORM\Table(name="salonsalle", indexes={@ORM\Index(name="FK_association11", columns={"salonEditionRefrence"})})
 * @ORM\Entity
 */
class Salonsalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="salonSalleReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salonsallereference;

    /**
     * @var int
     *
     * @ORM\Column(name="salonEditionRefrence", type="integer", nullable=false)
     */
    private $saloneditionrefrence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salonSalleLibelle", type="string", length=254, nullable=true)
     */
    private $salonsallelibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salonSalleDescription", type="string", length=254, nullable=true)
     */
    private $salonsalledescription;

    public function getSalonsallereference(): ?int
    {
        return $this->salonsallereference;
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

    public function getSalonsallelibelle(): ?string
    {
        return $this->salonsallelibelle;
    }

    public function setSalonsallelibelle(?string $salonsallelibelle): self
    {
        $this->salonsallelibelle = $salonsallelibelle;

        return $this;
    }

    public function getSalonsalledescription(): ?string
    {
        return $this->salonsalledescription;
    }

    public function setSalonsalledescription(?string $salonsalledescription): self
    {
        $this->salonsalledescription = $salonsalledescription;

        return $this;
    }


}
