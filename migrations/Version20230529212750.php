<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230529212750 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oferta_academica CHANGE actividad_id actividad_id INT DEFAULT NULL, CHANGE area_id area_id INT DEFAULT NULL, CHANGE campo_id campo_id INT DEFAULT NULL, CHANGE carrera_id carrera_id INT DEFAULT NULL, CHANGE unidad_id unidad_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oferta_academica CHANGE campo_id campo_id INT NOT NULL, CHANGE area_id area_id INT NOT NULL, CHANGE carrera_id carrera_id INT NOT NULL, CHANGE actividad_id actividad_id INT NOT NULL, CHANGE unidad_id unidad_id INT NOT NULL');
    }
}
