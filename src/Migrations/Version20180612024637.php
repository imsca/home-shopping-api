<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180612024637 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pedido ADD varejo_id INT DEFAULT NULL, ADD data_entrega DATETIME NOT NULL, ADD total NUMERIC(10, 2) NOT NULL, ADD status TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE pedido ADD CONSTRAINT FK_C4EC16CE73F8C5A4 FOREIGN KEY (varejo_id) REFERENCES varejo (id)');
        $this->addSql('CREATE INDEX IDX_C4EC16CE73F8C5A4 ON pedido (varejo_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pedido DROP FOREIGN KEY FK_C4EC16CE73F8C5A4');
        $this->addSql('DROP INDEX IDX_C4EC16CE73F8C5A4 ON pedido');
        $this->addSql('ALTER TABLE pedido DROP varejo_id, DROP data_entrega, DROP total, DROP status');
    }
}
