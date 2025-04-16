<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250415204250 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE cadeau (Id_cadeaux INT AUTO_INCREMENT NOT NULL, Nom_cadeaux VARCHAR(100) NOT NULL, Type_cadeaux VARCHAR(100) NOT NULL, Quantité_disponible INT NOT NULL, Description VARCHAR(100) NOT NULL, UNIQUE INDEX Id_cadeaux (Id_cadeaux), PRIMARY KEY(Id_cadeaux)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sponsor (Id_sponsor INT AUTO_INCREMENT NOT NULL, Nom_sponsor VARCHAR(100) NOT NULL, Type_sponsor VARCHAR(100) NOT NULL, Description VARCHAR(100) NOT NULL, Id_cadeaux INT NOT NULL, INDEX fk_cadeau (Id_cadeaux), PRIMARY KEY(Id_sponsor)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D45093FC4F FOREIGN KEY (Id_cadeaux) REFERENCES cadeau (Id_cadeaux)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D45093FC4F
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE cadeau
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sponsor
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
