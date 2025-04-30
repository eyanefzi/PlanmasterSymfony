<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240317000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create user table with all required fields';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE user (
            id INT AUTO_INCREMENT NOT NULL,
            nom VARCHAR(30) NOT NULL,
            prenom VARCHAR(30) NOT NULL,
            age INT NOT NULL,
            email VARCHAR(180) NOT NULL,
            roles JSON NOT NULL,
            password VARCHAR(255) NOT NULL,
            num_telephone INT NOT NULL,
            user_type VARCHAR(20) NOT NULL,
            UNIQUE INDEX UNIQ_8D93D649E7927C74 (email),
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE user');
    }
} 