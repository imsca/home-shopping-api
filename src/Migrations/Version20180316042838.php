<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316042838 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE usuario (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(64) NOT NULL, senha VARCHAR(128) NOT NULL, email VARCHAR(50) NOT NULL, role VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE consumidor ADD endereco_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE consumidor ADD CONSTRAINT FK_2DB272CC1BB76823 FOREIGN KEY (endereco_id) REFERENCES endereco (id)');
        $this->addSql('CREATE INDEX IDX_2DB272CC1BB76823 ON consumidor (endereco_id)');
        $this->addSql('ALTER TABLE varejo ADD endereco_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE varejo ADD CONSTRAINT FK_5DE8FBA1BB76823 FOREIGN KEY (endereco_id) REFERENCES endereco (id)');
        $this->addSql('CREATE INDEX IDX_5DE8FBA1BB76823 ON varejo (endereco_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE usuario');
        $this->addSql('ALTER TABLE consumidor DROP FOREIGN KEY FK_2DB272CC1BB76823');
        $this->addSql('DROP INDEX IDX_2DB272CC1BB76823 ON consumidor');
        $this->addSql('ALTER TABLE consumidor DROP endereco_id');
        $this->addSql('ALTER TABLE varejo DROP FOREIGN KEY FK_5DE8FBA1BB76823');
        $this->addSql('DROP INDEX IDX_5DE8FBA1BB76823 ON varejo');
        $this->addSql('ALTER TABLE varejo DROP endereco_id');
    }
}
