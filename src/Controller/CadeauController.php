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
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $nom = $request->query->get('nom');
        $type = $request->query->get('type');
        $quantiteMin = $request->query->get('quantite_min');
        $quantiteMax = $request->query->get('quantite_max');

        $qb = $entityManager->getRepository(Cadeau::class)->createQueryBuilder('c');

        if (!empty($nom)) {
            $qb->andWhere('c.nomCadeaux LIKE :nom')
                ->setParameter('nom', '%' . $nom . '%');
        }

        if (!empty($type)) {
            $qb->andWhere('c.typeCadeaux LIKE :type')
                ->setParameter('type', '%' . $type . '%');
        }

        if ($quantiteMin !== null && $quantiteMin !== '') {
            $qb->andWhere('c.quantiteDisponible >= :quantiteMin')
                ->setParameter('quantiteMin', $quantiteMin);
        }

        if ($quantiteMax !== null && $quantiteMax !== '') {
            $qb->andWhere('c.quantiteDisponible <= :quantiteMax')
                ->setParameter('quantiteMax', $quantiteMax);
        }

        $cadeaus = $qb->getQuery()->getResult();


        return $this->render('cadeau/index.html.twig', [
            'cadeaus' => $cadeaus,
        ]);
    }


    #[Route('/wheel', name: 'app_cadeau_wheel', methods: ['GET'])]
    public function wheel(EntityManagerInterface $entityManager): Response
    {
        $cadeaus = $entityManager
            ->getRepository(Cadeau::class)
            ->findAll();

        $cadeauxArray = [];
        foreach ($cadeaus as $cadeau) {
            $cadeauxArray[] = [
                'id' => $cadeau->getIdCadeaux(),
                'nomCadeaux' => $cadeau->getNomCadeaux(),
                'typeCadeaux' => $cadeau->getTypeCadeaux(),
                'quantiteDisponible' => $cadeau->getQuantiteDisponible(),
            ];
        }

        return $this->render('cadeau/wheel.html.twig', [
            'cadeaus' => $cadeauxArray, // ❗ Pass an array, not entity objects
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
        if ($this->isCsrfTokenValid('delete' . $cadeau->getIdCadeaux(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($cadeau);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cadeau_index', [], Response::HTTP_SEE_OTHER);
    }
}
