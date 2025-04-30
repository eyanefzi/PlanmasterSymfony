<?php

namespace App\Controller;

use App\Form\ProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

#[Route('/profile')]
#[IsGranted('ROLE_USER')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'app_profile_show')]
    public function show(): Response
    {
        $user = $this->getUser();
        
        return $this->render('profile/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/edit', name: 'app_profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Votre profil a été mis à jour avec succès.');
            return $this->redirectToRoute('app_profile_show');
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/export-pdf', name: 'app_profile_export_pdf')]
public function exportPdf(Pdf $knpSnappyPdf): Response
{
    $user = $this->getUser();
    $html = $this->renderView('profile/pdf.html.twig', [
        'user' => $user,
    ]);

    $pdfFilePath = $this->getParameter('kernel.project_dir') . '/public/pdf/profil_' . $user->getId() . '.pdf';
    $knpSnappyPdf->generateFromHtml($html, $pdfFilePath);

    return new BinaryFileResponse($pdfFilePath, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => ResponseHeaderBag::DISPOSITION_INLINE,
    ]);
}
} 