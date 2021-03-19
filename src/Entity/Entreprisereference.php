<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprisereference
 *
 * @ORM\Table(name="entreprisereference", indexes={@ORM\Index(name="AK_Identifiant_2", columns={"entreprisereferenceId"}), @ORM\Index(name="FK_association6", columns={"entrepriseReference"}), @ORM\Index(name="AK_Identifiant_1", columns={"entreprisereferenceId"})})
 * @ORM\Entity
 */
class Entreprisereference
{
    /**
     * @var int
     *
     * @ORM\Column(name="entreprisereferenceId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entreprisereferenceid;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseReference", type="integer", nullable=false)
     */
    private $entreprisereference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entreprisereferenceLibelle", type="string", length=254, nullable=true)
     */
    private $entreprisereferencelibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entreprisereferenceFile", type="string", length=254, nullable=true)
     */
    private $entreprisereferencefile;

    public function getEntreprisereferenceid(): ?int
    {
        return $this->entreprisereferenceid;
    }

    public function getEntreprisereference(): ?int
    {
        return $this->entreprisereference;
    }

    public function setEntreprisereference(int $entreprisereference): self
    {
        $this->entreprisereference = $entreprisereference;

        return $this;
    }

    public function getEntreprisereferencelibelle(): ?string
    {
        return $this->entreprisereferencelibelle;
    }

    public function setEntreprisereferencelibelle(?string $entreprisereferencelibelle): self
    {
        $this->entreprisereferencelibelle = $entreprisereferencelibelle;

        return $this;
    }

    public function getEntreprisereferencefile(): ?string
    {
        return $this->entreprisereferencefile;
    }

    public function setEntreprisereferencefile(?string $entreprisereferencefile): self
    {
        $this->entreprisereferencefile = $entreprisereferencefile;

        return $this;
    }


}
