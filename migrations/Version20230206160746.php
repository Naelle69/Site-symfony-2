<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230206160746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E663256915B');
        $this->addSql('DROP INDEX IDX_23A0E663256915B ON article');
        $this->addSql('ALTER TABLE article CHANGE relation_id post_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E664B89032C FOREIGN KEY (post_id) REFERENCES restaurant (id)');
        $this->addSql('CREATE INDEX IDX_23A0E664B89032C ON article (post_id)');
        $this->addSql('ALTER TABLE plat DROP FOREIGN KEY FK_2038A207B1E7706E');
        $this->addSql('DROP INDEX IDX_2038A207B1E7706E ON plat');
        $this->addSql('ALTER TABLE plat CHANGE restaurant_id edit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE plat ADD CONSTRAINT FK_2038A2073EF8CFA5 FOREIGN KEY (edit_id) REFERENCES restaurant (id)');
        $this->addSql('CREATE INDEX IDX_2038A2073EF8CFA5 ON plat (edit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E664B89032C');
        $this->addSql('DROP INDEX IDX_23A0E664B89032C ON article');
        $this->addSql('ALTER TABLE article CHANGE post_id relation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E663256915B FOREIGN KEY (relation_id) REFERENCES restaurant (id)');
        $this->addSql('CREATE INDEX IDX_23A0E663256915B ON article (relation_id)');
        $this->addSql('ALTER TABLE plat DROP FOREIGN KEY FK_2038A2073EF8CFA5');
        $this->addSql('DROP INDEX IDX_2038A2073EF8CFA5 ON plat');
        $this->addSql('ALTER TABLE plat CHANGE edit_id restaurant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE plat ADD CONSTRAINT FK_2038A207B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)');
        $this->addSql('CREATE INDEX IDX_2038A207B1E7706E ON plat (restaurant_id)');
    }
}
