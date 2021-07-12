<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210704105338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('SET sql_mode = ""');
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(65) NOT NULL, lft INT NOT NULL, rgt INT NOT NULL, lvl INT NOT NULL, tree INT NOT NULL, parent_id INT NOT NULL, url VARCHAR(255) DEFAULT NULL, path VARCHAR(255) DEFAULT NULL, route VARCHAR(255) DEFAULT NULL, short_url VARCHAR(255) DEFAULT NULL, status SMALLINT NOT NULL, created_at DATETIME DEFAULT \'0000-00-00 00:00:00\' NOT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, INDEX id_lft_rgt (id, lft, rgt), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, url VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, keywords VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, preview LONGTEXT DEFAULT NULL, body LONGTEXT DEFAULT NULL, type SMALLINT NOT NULL, status SMALLINT NOT NULL, created_date DATETIME NOT NULL, image VARCHAR(255) DEFAULT NULL, template VARCHAR(255) DEFAULT NULL, is_recently_preview TINYINT(1) NOT NULL, INDEX IDX_140AB620727ACA70 (parent_id), UNIQUE INDEX url (url), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, status SMALLINT NOT NULL, created_at DATETIME DEFAULT \'0000-00-00 00:00:00\' NOT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB620727ACA70 FOREIGN KEY (parent_id) REFERENCES page (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB620727ACA70');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE user');
    }
}
