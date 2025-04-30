<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if (in_array('ROLE_OWNER', $user->getRoles())) {
            return $this->render('dashboard/owner.html.twig');
        }

        return $this->render('dashboard/participant.html.twig');
    }

    #[Route('/admin/users', name: 'app_admin_users')]
    #[IsGranted('ROLE_OWNER')]
    public function usersList(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->redirectToRoute('app_user_index');
    }

    #[Route('/admin/avis', name: 'app_admin_avis')]
    #[IsGranted('ROLE_OWNER')]
    public function avisList(): Response
    {
        return $this->redirectToRoute('app_avis_index');
    }
} 