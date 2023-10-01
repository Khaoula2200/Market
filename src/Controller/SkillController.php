<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Form\SkillType;
use App\Repository\SkillRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/skill', name: 'skill_', methods: ['GET'])]
class SkillController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SkillRepository $skillRepository): Response
    {
        $skills = $skillRepository->findAll();
//        dd($skills);
        return $this->render('skill/index.html.twig', [
            'skills' => $skills,
        ]);
    }

    #[Route('/create', name: 'create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $skill = new Skill();
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($skill);
            $entityManager->flush();

            return $this->redirectToRoute('skill_index');
        }

        return $this->render('skill/form.html.twig', [
            'skill' => $skill,
            'form' => $form->createView(),
        ]);
    }
}
