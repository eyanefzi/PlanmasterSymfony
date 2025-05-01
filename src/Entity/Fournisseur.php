<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_fournisseur", type: "integer")]
    private int $idFournisseur;

    #[ORM\Column(length: 100)]
    private string $nomEntreprise;

    #[ORM\Column(length: 100)]
    private string $contact;

    #[ORM\Column(length: 100)]
    private string $email;

    #[ORM\OneToMany(mappedBy: 'fournisseur', targetEntity: Produit::class, cascade: ['persist', 'remove'])]
    private Collection $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getIdFournisseur(): int { return $this->idFournisseur; }
    public function getNomEntreprise(): string { return $this->nomEntreprise; }
    public function setNomEntreprise(string $nom): self { $this->nomEntreprise = $nom; return $this; }
    public function getContact(): string { return $this->contact; }
    public function setContact(string $contact): self { $this->contact = $contact; return $this; }
    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): self { $this->email = $email; return $this; }
    public function getProduits(): Collection { return $this->produits; }
    public function addProduit(Produit $produit): self {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setFournisseur($this);
        }
        return $this;
    }
    public function removeProduit(Produit $produit): self {
        if ($this->produits->removeElement($produit)) {
            if ($produit->getFournisseur() === $this) {
                $produit->setFournisseur(null);
            }
        }
        return $this;
    }
    public function __toString(): string
{
    return $this->nomEntreprise; // or any other field you'd like shown in dropdowns
}
}
