<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salon
 *
 * @ORM\Table(name="salon")
 * @ORM\Entity
 */
class Salon
{
    /**
     * @var int
     *
     * @ORM\Column(name="salonReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salonreference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salonLibelle", type="string", length=254, nullable=true)
     */
    private $salonlibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salonDescription", type="string", length=254, nullable=true)
     */
    private $salondescription;

    public function getSalonreference(): ?int
    {
        return $this->salonreference;
    }

    public function getSalonlibelle(): ?string
    {
        return $this->salonlibelle;
    }

    public function setSalonlibelle(?string $salonlibelle): self
    {
        $this->salonlibelle = $salonlibelle;

        return $this;
    }

    public function getSalondescription(): ?string
    {
        return $this->salondescription;
    }

    public function setSalondescription(?string $salondescription): self
    {
        $this->salondescription = $salondescription;

        return $this;
    }


}
