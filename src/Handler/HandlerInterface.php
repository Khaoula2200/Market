<?php

declare(strict_types=1);

namespace App\Handler;

use Knp\Component\Pager\Pagination\PaginationInterface;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Interface HandlerInterface.
 */
interface HandlerInterface
{
    /**
     * Request Handler for controller.
     *
     * @param mixed $target anything what needs to be paginated
     * @param int   $limit  number of items per page. default 9.
     */
    public function records($target, int $limit = 9): PaginationInterface;

    /**
     * Request Handler for controller.
     *
     * @param mixed $data
     */
    public function handleRequest($data, array $options = []): bool;

    /**
     * Remove entity Soft or Hard.
     *
     * @param mixed $data
     * @param bool  $soft: true for soft delete, false otherwise
     */
    public function remove($data, bool $soft = false): void;

    /**
     * Toggle the state of a certain entity.
     *
     * @param mixed $data
     */
    public function handleStatus($data): JsonResponse;

    /**
     * Renders the form.
     */
    public function getForm(): Form;

    /**
     * Create form view for controller.
     */
    public function createFormView(): FormView;
}
