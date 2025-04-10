<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_commande", type: 'integer')]
    private ?int $idCommande = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[ORM\JoinColumn(name: 'id_client', referencedColumnName: 'id_client', nullable: false)]
    #[Assert\NotNull(message: "Le client est requis.")]
    private ?Client $client = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotNull(message: "La date de commande est obligatoire.")]
    #[Assert\Type(\DateTimeInterface::class, message: "Veuillez entrer une date valide.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le statut est requis.")]
    #[Assert\Length(max: 20, maxMessage: "Le statut ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $status = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: "Le montant total est requis.")]
    #[Assert\PositiveOrZero(message: "Le montant doit être positif.")]
    private ?string $montantTotal = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: "La quantité est requise.")]
    #[Assert\Positive(message: "La quantité doit être un entier positif.")]
    private ?int $quantite = null;

    #[ORM\Column(type: 'boolean')]
    private ?bool $isPaid = false;

    public function getId(): ?int { return $this->idCommande; }

    public function getClient(): ?Client { return $this->client; }
    public function setClient(?Client $client): self { $this->client = $client; return $this; }

    public function getDate(): ?\DateTimeInterface { return $this->date; }
    public function setDate(\DateTimeInterface $date): self { $this->date = $date; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(?string $status): self { $this->status = $status; return $this; }

    public function getMontantTotal(): ?float { return (float) $this->montantTotal; }
    public function setMontantTotal(?float $montantTotal): self { $this->montantTotal = $montantTotal; return $this; }

    public function getQuantite(): ?int { return $this->quantite; }
    public function setQuantite(?int $quantite): self { $this->quantite = $quantite; return $this; }

    public function getIsPaid(): ?bool { return $this->isPaid; }
    public function setIsPaid(?bool $isPaid): self { $this->isPaid = $isPaid; return $this; }
}
