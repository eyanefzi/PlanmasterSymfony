<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Il existe déjà un compte avec cet email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    public const ROLE_OWNER = 'ROLE_OWNER';
    public const ROLE_PARTICIPANT = 'ROLE_PARTICIPANT';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(min: 2, max: 30)]
    private ?string $nom = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: 'Le prénom est obligatoire')]
    #[Assert\Length(min: 2, max: 30)]
    private ?string $prenom = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "L'âge est obligatoire")]
    #[Assert\Range(min: 18, max: 120, notInRangeMessage: "L'âge doit être entre {{ min }} et {{ max }} ans")]
    private ?int $age = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire")]
    #[Assert\Email(message: 'L\'email {{ value }} n\'est pas un email valide.')]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le numéro de téléphone est obligatoire')]
    #[Assert\Regex(pattern: "/^[0-9]{8,}$/", message: "Le numéro de téléphone doit contenir au moins 8 chiffres")]
    private ?int $num_telephone = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: ['owner', 'participant'], message: 'Choisissez un rôle valide : owner ou participant')]
    private string $userType = 'participant';

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Avis::class)]
    private Collection $avis;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getNumTelephone(): ?int
    {
        return $this->num_telephone;
    }

    public function setNumTelephone(int $num_telephone): static
    {
        $this->num_telephone = $num_telephone;

        return $this;
    }

    public function getUserType(): string
    {
        return $this->userType;
    }

    public function setUserType(string $userType): self
    {
        $this->userType = $userType;
        // Met à jour les rôles en fonction du type d'utilisateur
        if ($userType === 'owner') {
            $this->roles = ['ROLE_OWNER'];
        } else {
            $this->roles = ['ROLE_PARTICIPANT'];
        }
        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function eraseCredentials(): void
    {
        // Si vous stockez des données temporaires sensibles sur l'utilisateur, effacez-les ici
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvis(Avis $avis): self
    {
        if (!$this->avis->contains($avis)) {
            $this->avis->add($avis);
            $avis->setUser($this);
        }
        return $this;
    }

    public function removeAvis(Avis $avis): self
    {
        if ($this->avis->removeElement($avis)) {
            // set the owning side to null (unless already changed)
            if ($avis->getUser() === $this) {
                $avis->setUser(null);
            }
        }
        return $this;
    }
}
