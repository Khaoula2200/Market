<?php

declare(strict_types=1);

namespace App\Handler;

use App\Helper\Error\ErrorInterface;
use App\Helper\Response\ResponseInterface as CustomResponseInterface;
use App\Service\Actions\SoftDeleteService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
// use Knp\Component\Pager\PaginatorInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

abstract class Handler extends AbstractController implements HandlerInterface
{
    protected FormInterface $form;
    protected Request $request;
    protected Session $session;

    /**
     * Handler constructor.
     */
    public function __construct(
        protected EntityManagerInterface $entityManager,
        protected FormFactoryInterface $formFactory,
        protected CsrfTokenManagerInterface $csrfManager,
        protected RequestStack $requestStack,
        protected SoftDeleteService $softDeleteService,
        private LoggerInterface $logger,
        // private PaginatorInterface $paginator
    ) {
        $this->request = $this->requestStack->getCurrentRequest();
        $this->session = $this->requestStack->getSession();
    }

    /**
     * {@inheritDoc}
     */
    public function records($target, int $limit = 9): PaginationInterface
    {
        // return $this->paginator->paginate($target, $this->request->query->getInt('page', 1), $limit);
    }

    /**
     * {@inheritDoc}
     */
    public function handleRequest($data, array $options = []): bool
    {
        $this->form = $this->formFactory->create($this->getFormType(), $data, $options)->handleRequest($this->request);
        if ($this->form->isSubmitted()) {
            if ($this->form->isValid() === false) {
                foreach ($this->getFormErrorMessages() as $error) {
                    $this->session->getFlashBag()->add('danger', $error);
                }

                throw new \Exception(CustomResponseInterface::INVALID_FORM);
            }
            $this->process($data);

            $entityName = substr(get_class($data), strrpos(get_class($data), '\\') + 1);
            $this->logger->info(
                sprintf(
                    'Utilisateur %s a %s %s avec ID %d',
                    $this->getUser()->getLogin(),
                    $data->getId() ? 'Edité' : 'Creé',
                    $entityName,
                    $data->getId()
                )
            );

            return true;
        }

        return false;
    }

    /**
     * Initalizing the form Type.
     */
    abstract protected function getFormType(): string;

    /**
     * Retrieve form's errors.
     */
    protected function getFormErrorMessages(): array
    {
        $errors = [];
        foreach ($this->getForm()->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }

        return $errors;
    }

    /**
     * {@inheritDoc}
     */
    public function getForm(): Form
    {
        return $this->form;
    }

    /**
     * Process of Saving.
     *
     * @param mixed $data
     */
    protected function process($data): void
    {
        if ($data->getId() === null) {
            $this->entityManager->persist($data);
        }
        $this->entityManager->flush();
        $this->session->getFlashBag()->add('success', 'Votre opération a été effectuée avec succes');
    }

    /**
     * {@inheritDoc}
     */
    public function remove($data, bool $soft = false): void
    {
        $token = $this->request->request->get('_token');

        try {
            if ($this->csrfManager->isTokenValid(new CsrfToken('delete' . $data->getId(), $token))) {
                $this->softDeleteService->remove($data, $soft);
                $entityName = substr(get_class($data), strrpos(get_class($data), '\\') + 1);
                $this->logger->info(
                    sprintf(
                        'Utilisateur %s a Supprimer %s qui ID: %d',
                        $this->getUser()->getLogin(),
                        $entityName,
                        $data->getId()
                    )
                );
                $this->session->getFlashBag()->add('success', 'La suppression a été bien effectuée.');
            }
        } catch (\Exception $e) {
            $message_exist = 'Vous ne pouvez pas supprimer, Element est déja utilisé';
            $message = 'Erreur! La suppression n\'est pas effectuer';
            $flashMessage = $e->getCode() === ErrorInterface::EXCEPTION_CODE_ENTITY_HAS_CHILDREN ?
                $message_exist : $message;
            $this->session->getFlashBag()->add('danger', $flashMessage);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function handleStatus($data): JsonResponse
    {
        $this->toggleStatus($data);

        return new JsonResponse(['id' => $data->getId(), 'status' => $data->isIsActivated()], Response::HTTP_OK);
    }

    /**
     * Process of toggling the state of the entity.
     *
     * @param mixed $data
     */
    protected function toggleStatus($data): void
    {
        $data->setIsActivated(!$data->isIsActivated());
        $this->process($data);
    }

    /**
     * {@inheritDoc}
     */
    public function createFormView(): FormView
    {
        return $this->getForm()->createView();
    }
}
