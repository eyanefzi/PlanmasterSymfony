<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250410183000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Initial schema for Client, Commande, Produit, Fournisseur, CommandeProduits';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE client (
            id_client INT AUTO_INCREMENT NOT NULL,
            nom VARCHAR(100) NOT NULL,
            prenom VARCHAR(100) NOT NULL,
            adresse_livraison VARCHAR(255) NOT NULL,
            telephone VARCHAR(20) NOT NULL,
            PRIMARY KEY(id_client)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('CREATE TABLE fournisseur (
            id_fournisseur INT AUTO_INCREMENT NOT NULL,
            nom_entreprise VARCHAR(100) NOT NULL,
            contact VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            PRIMARY KEY(id_fournisseur)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('CREATE TABLE produit (
            id_produit INT AUTO_INCREMENT NOT NULL,
            nom VARCHAR(100) NOT NULL,
            description LONGTEXT NOT NULL,
            prix NUMERIC(10, 2) NOT NULL,
            image_url VARCHAR(255) NOT NULL,
            id_fournisseur INT NOT NULL,
            INDEX IDX_FOURNISSEUR (id_fournisseur),
            PRIMARY KEY(id_produit),
            CONSTRAINT FK_PRODUIT_FOURNISSEUR FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('CREATE TABLE commande (
            id_commande INT AUTO_INCREMENT NOT NULL,
            id_client INT NOT NULL,
            date DATE NOT NULL,
            status VARCHAR(20) NOT NULL,
            montant_total NUMERIC(10, 2) NOT NULL,
            quantite INT NOT NULL,
            is_paid TINYINT(1) NOT NULL,
            INDEX IDX_COMMANDE_CLIENT (id_client),
            PRIMARY KEY(id_commande),
            CONSTRAINT FK_COMMANDE_CLIENT FOREIGN KEY (id_client) REFERENCES client (id_client)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('CREATE TABLE commande_produits (
            id_commande INT NOT NULL,
            id_produit INT NOT NULL,
            quantity INT NOT NULL,
            INDEX IDX_COMMANDE_PRODUITS_COMMANDE (id_commande),
            INDEX IDX_COMMANDE_PRODUITS_PRODUIT (id_produit),
            PRIMARY KEY(id_commande, id_produit),
            CONSTRAINT FK_COMMANDE_PRODUITS_COMMANDE FOREIGN KEY (id_commande) REFERENCES commande (id_commande),
            CONSTRAINT FK_COMMANDE_PRODUITS_PRODUIT FOREIGN KEY (id_produit) REFERENCES produit (id_produit)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE commande_produits');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE client');
    }
}
