<?php
namespace App\Controller;

use App\Entity\Sponsor;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SponsorFrontController extends AbstractController
{
    #[Route('/front/sponsors', name: 'app_sponsor_front_index', methods: ['GET'])]

    public function index(EntityManagerInterface $entityManager): Response
    {
        $sponsors = $entityManager
            ->getRepository(Sponsor::class)
            ->findAll();

        return $this->render('sponsor/front/show.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }
}
