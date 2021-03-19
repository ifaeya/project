<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprisechiffreaffaire
 *
 * @ORM\Table(name="entreprisechiffreaffaire")
 * @ORM\Entity
 */
class Entreprisechiffreaffaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseChiffreAffaireReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entreprisechiffreaffairereference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseChiffreAffaireLibelle", type="string", length=254, nullable=true)
     */
    private $entreprisechiffreaffairelibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entrepriseChiffreAffaireDescription", type="string", length=254, nullable=true)
     */
    private $entreprisechiffreaffairedescription;

    public function getEntreprisechiffreaffairereference(): ?int
    {
        return $this->entreprisechiffreaffairereference;
    }

    public function getEntreprisechiffreaffairelibelle(): ?string
    {
        return $this->entreprisechiffreaffairelibelle;
    }

    public function setEntreprisechiffreaffairelibelle(?string $entreprisechiffreaffairelibelle): self
    {
        $this->entreprisechiffreaffairelibelle = $entreprisechiffreaffairelibelle;

        return $this;
    }

    public function getEntreprisechiffreaffairedescription(): ?string
    {
        return $this->entreprisechiffreaffairedescription;
    }

    public function setEntreprisechiffreaffairedescription(?string $entreprisechiffreaffairedescription): self
    {
        $this->entreprisechiffreaffairedescription = $entreprisechiffreaffairedescription;

        return $this;
    }


}
