<?php

namespace App\Controller;

use App\Entity\Project;
use App\Form\ProjectType;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/project', name: 'project_')]
class ProjectController extends AbstractController
{
    public function __construct(
        private ProjectRepository $projectRepository,
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $projects = $this->projectRepository->findAll();
        return $this->render('project/index.html.twig', [
            'projects' => $projects,
        ]);
    }
    /** Save or update a company */
//    #[
//        Route(
//            '/sauvegarder/{company<\d+>}',
//            name: 'save',
//            options: ['expose' => true],
//            defaults: ['company' => null],
//            methods: ['GET', 'POST']
//        )
//    ]
//    public function save(?int $company = null): Response
//    {
//        if (!$this->authorizationChecker->isGranted('has_role', ['route' => 'app_compagnies_index', 'action' => 'Ajouter'])
//            && !$this->authorizationChecker->isGranted('has_role', ['route' => 'app_compagnies_index', 'action' => 'Editer'])
//        ) {
//            return new Response('Access denied', Response::HTTP_RESERVED);
//        }
//
//        try {
//            $company = $company !== null ?
//                $this->companyRepository->find($company) : new company();
//
//            if ($this->companyHandler->handleRequest($company)) {
//                return $this->redirectToRoute('app_compagnies_index', [], Response::HTTP_FOUND);
//            }
//        } catch (\Exception $e) {
//            if ($e->getMessage() !== CustomResponseInterface::INVALID_FORM) {
//                $this->addFlash('danger', 'Une erreur s\'est produit lors l\'envoi de votre formulaire');
//            }
//
//            return $this->redirectToRoute('app_compagnies_index', [], Response::HTTP_FOUND);
//        }
//        $form = $this->companyHandler->getForm();
//
//        return $this->renderForm(
//            'admin/company/form.html.twig',
//            compact(
//                'company',
//                'form'
//            )
//        );
//    }

    #[
        Route(
            '/create/{project<\d+>}',
            name: 'create',
            options: ['expose' => true],
            defaults: ['project' => null],
            methods: ['GET', 'POST']
        )]
    public function create(?int $project = null, Request $request): Response
    {
        try {
            $project = $project!= null ? $this->projectRepository->find($project) : new Project();
            $form = $this->createForm(ProjectType::class, $project);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->entityManager->persist($project);
                $this->entityManager->flush();
                return $this->redirectToRoute('project_index');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            if ($e->getMessage() !== CustomResponseInterface::INVALID_FORM) {
                $this->addFlash('danger', 'Une erreur s\'est produit lors l\'envoi de votre formulaire');
            }

            return $this->redirectToRoute('project_index', [], Response::HTTP_FOUND);
        }

        return $this->renderForm('project/form.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

}
