<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316070554 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE item_pedido ADD pedido_id INT DEFAULT NULL, ADD produto_id INT DEFAULT NULL, ADD quantidade INT NOT NULL, ADD valor NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE item_pedido ADD CONSTRAINT FK_421563014854653A FOREIGN KEY (pedido_id) REFERENCES pedido (id)');
        $this->addSql('ALTER TABLE item_pedido ADD CONSTRAINT FK_42156301105CFD56 FOREIGN KEY (produto_id) REFERENCES produto (id)');
        $this->addSql('CREATE INDEX IDX_421563014854653A ON item_pedido (pedido_id)');
        $this->addSql('CREATE INDEX IDX_42156301105CFD56 ON item_pedido (produto_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE item_pedido DROP FOREIGN KEY FK_421563014854653A');
        $this->addSql('ALTER TABLE item_pedido DROP FOREIGN KEY FK_42156301105CFD56');
        $this->addSql('DROP INDEX IDX_421563014854653A ON item_pedido');
        $this->addSql('DROP INDEX IDX_42156301105CFD56 ON item_pedido');
        $this->addSql('ALTER TABLE item_pedido DROP pedido_id, DROP produto_id, DROP quantidade, DROP valor');
    }
}
