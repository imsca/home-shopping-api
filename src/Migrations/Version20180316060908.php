<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316060908 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE forma_pagamento (id INT AUTO_INCREMENT NOT NULL, descricao VARCHAR(12) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produto (id INT AUTO_INCREMENT NOT NULL, varejo_id INT DEFAULT NULL, codigo_barras VARCHAR(13) NOT NULL, nome VARCHAR(30) NOT NULL, unidade VARCHAR(6) NOT NULL, preco NUMERIC(10, 2) NOT NULL, imagem VARCHAR(255) NOT NULL, marca VARCHAR(20) NOT NULL, categoria VARCHAR(20) NOT NULL, status TINYINT(1) NOT NULL, INDEX IDX_5CAC49D773F8C5A4 (varejo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produto ADD CONSTRAINT FK_5CAC49D773F8C5A4 FOREIGN KEY (varejo_id) REFERENCES varejo (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE forma_pagamento');
        $this->addSql('DROP TABLE produto');
    }
}
