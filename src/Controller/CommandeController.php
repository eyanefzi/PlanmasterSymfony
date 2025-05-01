<?php
namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Commande;
use App\Form\CommandeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande')]
final class CommandeController extends AbstractController
{
    #[Route(name: 'app_commande_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $query = $entityManager->getRepository(Commande::class)->createQueryBuilder('c')->getQuery();

        $commandes = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // page number
            4 // limit per page
        );

        return $this->render('commande/index.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_delete', methods: ['POST'])]
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/commande/export-pdf', name: 'app_commande_export_pdf', methods: ['GET'])]
    public function exportPdf(EntityManagerInterface $entityManager): Response
    {
        // Get the list of commandes (you can filter this if needed)
        $commandes = $entityManager->getRepository(Commande::class)->findAll();

        // Get the absolute path for the logo image
 $imagePath = $this->getParameter('kernel.project_dir') . '/public/images/logo.png';
    $logoContent = base64_encode(file_get_contents($imagePath));

        // Render the HTML template for the PDF
        $html = $this->renderView('commande/pdf_template.html.twig', [
            'commandes' => $commandes,
         'logoBase64' => $logoContent, // Pour la solution 2
        ]);

        // Initialize DOMPDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
         $options->set('isRemoteEnabled', true); // Active le chargement des ressources distantes
// Enable PHP inside the HTML if needed
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF (first pass)
        $dompdf->render();

        // Get the PDF content as a string
        $pdfContent = $dompdf->output();

        // Return the generated PDF as a response (stream it to the browser)
        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="commandes.pdf"'
        ]);
    }

   #[Route('/commandes/search', name: 'app_commande_search_ajax')]
   public function searchAjax(Request $request, EntityManagerInterface $entityManager): Response
   {
       $search = $request->query->get('search');

       $queryBuilder = $entityManager->getRepository(Commande::class)->createQueryBuilder('c');

       if ($search) {
           $queryBuilder->where('c.status LIKE :search')
                        ->orWhere('c.montantTotal LIKE :search')
                        ->orWhere('c.quantite LIKE :search')
                        ->setParameter('search', '%' . $search . '%');
       }

       $commandes = $queryBuilder->getQuery()->getResult();

       return $this->render('commande/_table_rows.html.twig', [
           'commandes' => $commandes,
       ]);
   }


}
