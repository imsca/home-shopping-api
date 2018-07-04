<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180610053716 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE forma_pagamento ADD pedido_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE forma_pagamento ADD CONSTRAINT FK_58C6854854653A FOREIGN KEY (pedido_id) REFERENCES varejo (id)');
        $this->addSql('CREATE INDEX IDX_58C6854854653A ON forma_pagamento (pedido_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE forma_pagamento DROP FOREIGN KEY FK_58C6854854653A');
        $this->addSql('DROP INDEX IDX_58C6854854653A ON forma_pagamento');
        $this->addSql('ALTER TABLE forma_pagamento DROP pedido_id');
    }
}
