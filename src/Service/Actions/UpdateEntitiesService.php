<?php

declare(strict_types=1);

namespace App\Service\Actions;

use App\Entity\Admin\Email\ShortTags\DimensionEntity;
use App\Entity\Admin\Email\ShortTags\DimensionField;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManagerInterface;

class UpdateEntitiesService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @throws Exception
     */
    public function updateDimensionEntities(): void
    {
        $connection = $this->entityManager->getConnection();
        $tables = $connection->getSchemaManager()->listTableNames();

        // Generate Entity entities for each table
        foreach ($tables as $table) {
            $existingEntity = $this->entityManager
                ->getRepository(DimensionEntity::class)
                ->findOneBy(['name' => $table]);

            if (!$existingEntity) {
                $existingEntity = new DimensionEntity();
                $existingEntity->setName($table);
                $existingEntity->setIsActivated(false);

                $this->entityManager->persist($existingEntity);
                $this->entityManager->flush();
            }

            $fieldNames = $connection->getSchemaManager()->listTableColumns($table);

            foreach ($fieldNames as $fieldName) {
                $existingField = $this->entityManager->getRepository(DimensionField::class)
                    ->findOneBy(['name' => $fieldName->getName()]);
                if (!$existingField) {
                    $field = new DimensionField();
                    $field->setName($fieldName->getName());
                    $field->setEntity($existingEntity);

                    $this->entityManager->persist($field);
                    $this->entityManager->flush();
                }
            }
        }
    }
}
