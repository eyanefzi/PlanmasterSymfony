<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sponsor')]
final class SponsorController extends AbstractController
{
    #[Route(name: 'app_sponsor_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $nom = $request->query->get('nom');
        $type = $request->query->get('type');

        $qb = $entityManager->getRepository(Sponsor::class)->createQueryBuilder('s');

        if (!empty($nom)) {
            $qb->andWhere('s.nomSponsor LIKE :nom')
                ->setParameter('nom', '%' . $nom . '%');
        }

        if (!empty($type)) {
            $qb->andWhere('s.typeSponsor LIKE :type')
                ->setParameter('type', '%' . $type . '%');
        }

        $sponsors = $qb->getQuery()->getResult();

        return $this->render('sponsor/index.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }

    #[Route('/statistique', name: 'app_sponsor_statistique', methods: ['GET'])]
    public function statistique(EntityManagerInterface $entityManager): Response
    {
        // On récupère tous les sponsors avec leurs cadeaux
        $sponsors = $entityManager->getRepository(Sponsor::class)->findAll();

        $data = [];
        foreach ($sponsors as $sponsor) {
            $data[] = [
                'nom' => $sponsor->getNomSponsor(),
                'cadeau' => $sponsor->getIdCadeaux()->getNomCadeaux(), // On prend le nom du cadeau associé
            ];
        }

        return $this->render('sponsor/statistique.html.twig', [
            'data' => $data,
        ]);
    }


    #[Route('/new', name: 'app_sponsor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sponsor);
            $entityManager->flush();

            // Envoi de l'email après flush
            $email = (new Email())
                ->from('no-reply@tonsite.com')
                ->to('admin@tonsite.com') // Adresse de destination (peut être dynamique)
                ->subject('Nouveau Sponsor Ajouté')
                ->html(
                    $this->renderView('email/new_sponsor.html.twig', [
                        'sponsor' => $sponsor,
                    ])
                );

            $mailer->send($email);

            $this->addFlash('success', 'Sponsor ajouté et email envoyé avec succès.');

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sponsor/new.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{idSponsor}', name: 'app_sponsor_show', methods: ['GET'])]
    public function show(Sponsor $sponsor): Response
    {
        return $this->render('sponsor/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }

    #[Route('/{idSponsor}/edit', name: 'app_sponsor_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sponsor/edit.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{idSponsor}', name: 'app_sponsor_delete', methods: ['POST'])]
    public function delete(Request $request, Sponsor $sponsor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $sponsor->getIdSponsor(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($sponsor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sponsor_index', [], Response::HTTP_SEE_OTHER);
    }
}
