<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230228130649 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier ADD user_panier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2F79D1F98 FOREIGN KEY (user_panier_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_24CC0DF2F79D1F98 ON panier (user_panier_id)');
        $this->addSql('ALTER TABLE plat ADD user_plat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE plat ADD CONSTRAINT FK_2038A2078F30AB6A FOREIGN KEY (user_plat_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2038A2078F30AB6A ON plat (user_plat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2F79D1F98');
        $this->addSql('DROP INDEX UNIQ_24CC0DF2F79D1F98 ON panier');
        $this->addSql('ALTER TABLE panier DROP user_panier_id');
        $this->addSql('ALTER TABLE plat DROP FOREIGN KEY FK_2038A2078F30AB6A');
        $this->addSql('DROP INDEX IDX_2038A2078F30AB6A ON plat');
        $this->addSql('ALTER TABLE plat DROP user_plat_id');
    }
}
