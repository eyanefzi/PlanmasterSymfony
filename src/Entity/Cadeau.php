<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name: "cadeau")]
#[ORM\UniqueConstraint(name: "Id_cadeaux", columns: ["Id_cadeaux"])]
class Cadeau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "Id_cadeaux", type: 'integer')]
    private ?int $idCadeaux = null;


    #[ORM\Column(name: "Nom_cadeaux", type: "string", length: 100)]
    private string $nomCadeaux;

    #[ORM\Column(name: "Type_cadeaux", type: "string", length: 100)]
    private string $typeCadeaux;

    #[ORM\Column(name: "Quantité_disponible", type: "integer")]
    private int $quantiteDisponible;

    #[ORM\Column(name: "Description", type: "string", length: 100)]
    private string $description;

    public function getIdCadeaux(): ?int
    {
        return $this->idCadeaux;
    }

    public function getNomCadeaux(): ?string
    {
        return $this->nomCadeaux;
    }

    public function setNomCadeaux(string $nomCadeaux): static
    {
        $this->nomCadeaux = $nomCadeaux;

        return $this;
    }

    public function getTypeCadeaux(): ?string
    {
        return $this->typeCadeaux;
    }

    public function setTypeCadeaux(string $typeCadeaux): static
    {
        $this->typeCadeaux = $typeCadeaux;

        return $this;
    }

    public function getQuantiteDisponible(): ?int
    {
        return $this->quantiteDisponible;
    }

    public function setQuantiteDisponible(int $quantiteDisponible): static
    {
        $this->quantiteDisponible = $quantiteDisponible;

        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

}
