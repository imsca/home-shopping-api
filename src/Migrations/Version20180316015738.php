<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316015738 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE consumidor (id INT AUTO_INCREMENT NOT NULL, rg VARCHAR(9) NOT NULL, nome VARCHAR(50) NOT NULL, sexo VARCHAR(50) NOT NULL, nascimento DATE NOT NULL, telefone VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE varejo (id INT AUTO_INCREMENT NOT NULL, cnpj VARCHAR(14) NOT NULL, nome VARCHAR(50) NOT NULL, fantasia VARCHAR(50) NOT NULL, telefone VARCHAR(15) NOT NULL, responsavel VARCHAR(50) NOT NULL, area VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE consumidor');
        $this->addSql('DROP TABLE varejo');
    }
}
