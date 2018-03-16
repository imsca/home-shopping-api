<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316044131 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE consumidor ADD usuario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE consumidor ADD CONSTRAINT FK_2DB272CCDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2DB272CCDB38439E ON consumidor (usuario_id)');
        $this->addSql('ALTER TABLE varejo ADD usuario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE varejo ADD CONSTRAINT FK_5DE8FBADB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5DE8FBADB38439E ON varejo (usuario_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE consumidor DROP FOREIGN KEY FK_2DB272CCDB38439E');
        $this->addSql('DROP INDEX UNIQ_2DB272CCDB38439E ON consumidor');
        $this->addSql('ALTER TABLE consumidor DROP usuario_id');
        $this->addSql('ALTER TABLE varejo DROP FOREIGN KEY FK_5DE8FBADB38439E');
        $this->addSql('DROP INDEX UNIQ_5DE8FBADB38439E ON varejo');
        $this->addSql('ALTER TABLE varejo DROP usuario_id');
    }
}
