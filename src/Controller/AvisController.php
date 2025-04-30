<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/avis')]
class AvisController extends AbstractController
{
    #[Route('/', name: 'app_avis_index', methods: ['GET'])]
    public function index(AvisRepository $avisRepository): Response
    {
        $avis = $avisRepository->findAll();
        
        return $this->render('avis/index.html.twig', [
            'avis' => $avis
        ]);
    }

    #[Route('/new', name: 'app_avis_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_PARTICIPANT')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $avis = new Avis();
        $avis->setUser($this->getUser());

        if ($request->isMethod('POST')) {
            $note = $request->request->get('note');
            $commentaire = $request->request->get('commentaire');

            $avis->setNote($note);
            $avis->setCommentaire($commentaire);

            $entityManager->persist($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Votre avis a été enregistré avec succès !');
            return $this->redirectToRoute('app_dashboard');
        }

        return $this->render('avis/new.html.twig', [
            'avis' => $avis,
        ]);
    }

    #[Route('/{id}', name: 'app_avis_show', methods: ['GET'])]
    public function show(Avis $avi): Response
    {
        return $this->render('avis/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_avis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avis, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avis->getId(), $request->request->get('_token'))) {
            if ($this->isGranted('ROLE_OWNER') || $avis->getUser() === $this->getUser()) {
                $entityManager->remove($avis);
            $entityManager->flush();
            }
        }

        return $this->redirectToRoute('app_avis_index');
    }
    #[Route('/avis/stat', name: 'app_avis_stat')]
    #[IsGranted('ROLE_OWNER')]
    public function stat(AvisRepository $avisRepository): Response
    {
        $allAvis = $avisRepository->findAll();
    
        // Initialiser les variables de comptage
        $totalNotesReelles = 0;
        $totalNotesCompletes = 0;
        $userIds = [];
    
        // Calculer les valeurs nécessaires
        foreach ($allAvis as $avis) {
            $totalNotesReelles += $avis->getNote();  // Additionner les notes réelles
            $userIds[$avis->getUser()->getId()] = true;  // Ajouter les utilisateurs uniques
        }
    
        $userCount = count($userIds);  // Nombre d'utilisateurs ayant donné une note
        $totalNotesCompletes = $userCount * 5;  // Total des notes complètes attendues (5 pour chaque utilisateur)
    
        // Retourner les résultats dans la vue
        return $this->render('avis/stat.html.twig', [
            'totalNotesReelles' => $totalNotesReelles,
            'totalNotesCompletes' => $totalNotesCompletes,
        ]);
    }
    
}
