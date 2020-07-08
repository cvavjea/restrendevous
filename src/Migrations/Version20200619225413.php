<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200619225413 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commisariat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vgmcertificat (id INT AUTO_INCREMENT NOT NULL, request_time DATETIME NOT NULL, validation_time DATETIME NOT NULL, ticket_number VARCHAR(255) NOT NULL, net_weight DOUBLE PRECISION NOT NULL, tare_weight DOUBLE PRECISION NOT NULL, booking VARCHAR(255) NOT NULL, waybill VARCHAR(255) NOT NULL, consignee VARCHAR(255) NOT NULL, container_number VARCHAR(255) NOT NULL, cargo_type VARCHAR(255) DEFAULT NULL, container_size VARCHAR(255) DEFAULT NULL, seal_number VARCHAR(255) NOT NULL, nature_of_goods VARCHAR(255) NOT NULL, company_id VARCHAR(255) NOT NULL, agreement_number VARCHAR(255) NOT NULL, certifying_officer VARCHAR(255) DEFAULT NULL, validating_officer VARCHAR(255) NOT NULL, weighbridge VARCHAR(255) NOT NULL, transporter VARCHAR(255) NOT NULL, driver VARCHAR(255) DEFAULT NULL, truck_number VARCHAR(255) NOT NULL, tvf_number VARCHAR(255) NOT NULL, tvf_date DATE NOT NULL, weighting_date1 DATE NOT NULL, weighting_date2 DATE DEFAULT NULL, isdelete TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_16215C62ECD2759F (ticket_number), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE commisariat');
        $this->addSql('DROP TABLE vgmcertificat');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
