<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200620100016 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE agent ADD commisariat_id INT NOT NULL');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D50A7F08C FOREIGN KEY (commisariat_id) REFERENCES commisariat (id)');
        $this->addSql('CREATE INDEX IDX_268B9C9D50A7F08C ON agent (commisariat_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D50A7F08C');
        $this->addSql('DROP INDEX IDX_268B9C9D50A7F08C ON agent');
        $this->addSql('ALTER TABLE agent DROP commisariat_id');
    }
}
