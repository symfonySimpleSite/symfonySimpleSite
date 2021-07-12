<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210704111707 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB620727ACA70');
        $this->addSql('DROP INDEX IDX_140AB620727ACA70 ON page');
        $this->addSql('ALTER TABLE page ADD position INT NOT NULL, DROP type, CHANGE parent_id menu_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB620CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id)');
        $this->addSql('CREATE INDEX IDX_140AB620CCD7E912 ON page (menu_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB620CCD7E912');
        $this->addSql('DROP INDEX IDX_140AB620CCD7E912 ON page');
        $this->addSql('ALTER TABLE page ADD type SMALLINT NOT NULL, DROP position, CHANGE menu_id parent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB620727ACA70 FOREIGN KEY (parent_id) REFERENCES page (id)');
        $this->addSql('CREATE INDEX IDX_140AB620727ACA70 ON page (parent_id)');
    }
}
