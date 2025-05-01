<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_produit", type: 'integer')]
    private ?int $idProduit = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom du produit est requis.")]
    #[Assert\Length(max: 100, maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $nom = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "La description est requise.")]
    private ?string $description = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: "Le prix est requis.")]
    #[Assert\Positive(message: "Le prix doit être un nombre positif.")]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $imageUrl = '';

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(name: 'id_fournisseur', referencedColumnName: 'id_fournisseur', nullable: false)]
    #[Assert\NotNull(message: "Le fournisseur est requis.")]
    private ?Fournisseur $fournisseur = null;

    // Image temporaire pour le formulaire (non persistée en BDD)
    #[Assert\File(
        maxSize: '2M',
        maxSizeMessage: "Le fichier ne doit pas dépasser 2 Mo.",
        mimeTypes: ['image/jpeg', 'image/png'],
        mimeTypesMessage: "Veuillez téléverser une image JPG ou PNG valide."
    )]
    private ?File $imageFile = null;

    // === Getters & Setters ===

    public function getId(): ?int
    {
        return $this->idProduit;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix !== null ? (float) $this->prix : null;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;
        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }
}
