<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name: "sponsor")]
#[ORM\Index(name: "fk_cadeau", columns: ["Id_cadeaux"])]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "Id_sponsor", type: "integer")]
    private ?int $idSponsor = null;

    #[ORM\Column(name: "Nom_sponsor", type: "string", length: 100)]

    private ?string $nomSponsor = null;
    #[ORM\Column(name: "Type_sponsor", type: "string", length: 100)]

    private ?string $typeSponsor = null;

    #[ORM\Column(name: "Description", type: "string", length: 100)]

    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: Cadeau::class)]
    #[ORM\JoinColumn(name: "Id_cadeaux", referencedColumnName: "Id_cadeaux", nullable: false)]
    private Cadeau $idCadeaux;

    public function getIdSponsor(): ?int
    {
        return $this->idSponsor;
    }

    public function getNomSponsor(): ?string
    {
        return $this->nomSponsor;
    }

    public function setNomSponsor(string $nomSponsor): static
    {
        $this->nomSponsor = $nomSponsor;

        return $this;
    }

    public function getTypeSponsor(): ?string
    {
        return $this->typeSponsor;
    }

    public function setTypeSponsor(string $typeSponsor): self
    {
        $this->typeSponsor = $typeSponsor;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdCadeaux(): ?Cadeau
    {
        return $this->idCadeaux;
    }

    public function setIdCadeaux(?Cadeau $idCadeaux): static
    {
        $this->idCadeaux = $idCadeaux;

        return $this;
    }
}
