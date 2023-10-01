<?php

declare(strict_types=1);

namespace App\Service\Actions;

use Doctrine\ORM\EntityManagerInterface;

class SoftDeleteService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
    ) {
    }

    /**
     * remove.
     *
     * @param object $object
     */
    public function remove($object, bool $soft): void
    {
        if ($soft === true) {
            $object->setDeleted(true);
            $object->setDeletedAt(new \DateTime());
        } else {
            $this->entityManager->remove($object);
        }
        $this->entityManager->flush();
    }
}
