<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230730141418 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE project_skill (project_id INT NOT NULL, skill_id INT NOT NULL, INDEX IDX_4D68EDE9166D1F9C (project_id), INDEX IDX_4D68EDE95585C142 (skill_id), PRIMARY KEY(project_id, skill_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(30) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project_skill ADD CONSTRAINT FK_4D68EDE9166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_skill ADD CONSTRAINT FK_4D68EDE95585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_skills DROP FOREIGN KEY FK_C295FD3A7FF61858');
        $this->addSql('ALTER TABLE project_skills DROP FOREIGN KEY FK_C295FD3A166D1F9C');
        $this->addSql('ALTER TABLE skills DROP FOREIGN KEY FK_D531167012469DE2');
        $this->addSql('ALTER TABLE user_category DROP FOREIGN KEY FK_E6C1FDC112469DE2');
        $this->addSql('ALTER TABLE user_category DROP FOREIGN KEY FK_E6C1FDC1A76ED395');
        $this->addSql('DROP TABLE project_skills');
        $this->addSql('DROP TABLE skills');
        $this->addSql('DROP TABLE user_category');
        $this->addSql('ALTER TABLE category CHANGE description description LONGTEXT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD user_id INT NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EEA76ED395 ON project (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE project_skills (project_id INT NOT NULL, skills_id INT NOT NULL, INDEX IDX_C295FD3A166D1F9C (project_id), INDEX IDX_C295FD3A7FF61858 (skills_id), PRIMARY KEY(project_id, skills_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_D531167012469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_category (user_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_E6C1FDC1A76ED395 (user_id), INDEX IDX_E6C1FDC112469DE2 (category_id), PRIMARY KEY(user_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE project_skills ADD CONSTRAINT FK_C295FD3A7FF61858 FOREIGN KEY (skills_id) REFERENCES skills (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_skills ADD CONSTRAINT FK_C295FD3A166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skills ADD CONSTRAINT FK_D531167012469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE user_category ADD CONSTRAINT FK_E6C1FDC112469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_category ADD CONSTRAINT FK_E6C1FDC1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_skill DROP FOREIGN KEY FK_4D68EDE9166D1F9C');
        $this->addSql('ALTER TABLE project_skill DROP FOREIGN KEY FK_4D68EDE95585C142');
        $this->addSql('DROP TABLE project_skill');
        $this->addSql('DROP TABLE skill');
        $this->addSql('ALTER TABLE category CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE slug slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEA76ED395');
        $this->addSql('DROP INDEX IDX_2FB3D0EEA76ED395 ON project');
        $this->addSql('ALTER TABLE project DROP user_id, CHANGE description description VARCHAR(255) DEFAULT NULL');
    }
}
