<?php

namespace App\Controller;

use App\Entity\Cadeau;
use App\Form\CadeauType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/cadeau')]
final class CadeauController extends AbstractController
{
    #[Route(name: 'app_cadeau_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $cadeaus = $entityManager
            ->getRepository(Cadeau::class)
            ->findAll();

        return $this->render('cadeau/index.html.twig', [
            'cadeaus' => $cadeaus,
        ]);
    }

    #[Route('/new', name: 'app_cadeau_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cadeau = new Cadeau();
        $form = $this->createForm(CadeauType::class, $cadeau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cadeau);
            $entityManager->flush();

            return $this->redirectToRoute('app_cadeau_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cadeau/new.html.twig', [
            'cadeau' => $cadeau,
            'form' => $form,
        ]);
    }

    #[Route('/{idCadeaux}', name: 'app_cadeau_show', methods: ['GET'])]
    public function show(Cadeau $cadeau): Response
    {
        return $this->render('cadeau/show.html.twig', [
            'cadeau' => $cadeau,
        ]);
    }

    #[Route('/{idCadeaux}/edit', name: 'app_cadeau_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cadeau $cadeau, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CadeauType::class, $cadeau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_cadeau_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cadeau/edit.html.twig', [
            'cadeau' => $cadeau,
            'form' => $form,
        ]);
    }

    #[Route('/{idCadeaux}', name: 'app_cadeau_delete', methods: ['POST'])]
    public function delete(Request $request, Cadeau $cadeau, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cadeau->getIdCadeaux(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($cadeau);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cadeau_index', [], Response::HTTP_SEE_OTHER);
    }
}
