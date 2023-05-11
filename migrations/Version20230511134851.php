<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230511134851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE currency_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE loan_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE loan_proposal_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE loan (id INT NOT NULL, amount DOUBLE PRECISION NOT NULL, term INT NOT NULL, fee INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE loan_proposal (id INT NOT NULL, amount DOUBLE PRECISION NOT NULL, term INT NOT NULL, fee INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE currency');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE loan_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE loan_proposal_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE currency_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE currency (id INT NOT NULL, name VARCHAR(255) NOT NULL, currency_code VARCHAR(255) NOT NULL, exchange_rate DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE loan');
        $this->addSql('DROP TABLE loan_proposal');
    }
}
