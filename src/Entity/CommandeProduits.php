<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'commande_produits')]
class CommandeProduits
{
    #[ORM\Id]
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'id_commande', referencedColumnName: 'id_commande')]
    private Commande $commande;

    #[ORM\Id]
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'id_produit', referencedColumnName: 'id_produit')]
    private Produit $produit;

    #[ORM\Column(type: 'integer')]
    private int $quantity;

    public function getCommande(): Commande { return $this->commande; }
    public function setCommande(Commande $commande): self { $this->commande = $commande; return $this; }
    public function getProduit(): Produit { return $this->produit; }
    public function setProduit(Produit $produit): self { $this->produit = $produit; return $this; }
    public function getQuantity(): int { return $this->quantity; }
    public function setQuantity(int $quantity): self { $this->quantity = $quantity; return $this; }
}
