<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Service\EmailVerificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        EmailVerificationService $emailVerificationService
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard');
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        // Dans la méthode register
if ($form->isSubmitted() && $form->isValid()) {
    $user->setPassword(
        $userPasswordHasher->hashPassword(
            $user,
            $form->get('plainPassword')->getData()
        )
    );

    $userType = $form->get('userType')->getData();
    $user->setUserType($userType);

    $entityManager->persist($user);
    $entityManager->flush();

    $emailVerificationService->sendVerificationCode($user->getEmail());

    return $this->redirectToRoute('app_verify_email', ['email' => $user->getEmail()]);
}
        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

   // Ajoute le service dans la signature de la méthode verifyEmail
   #[Route('/verify', name: 'app_verify_email')]
   public function verifyEmail(
       Request $request, 
       EntityManagerInterface $entityManager, 
       EmailVerificationService $emailVerificationService
   ): Response {
       $email = $request->query->get('email');
       $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
   
       if (!$user) {
           throw $this->createNotFoundException("Utilisateur non trouvé.");
       }
   
       if ($request->isMethod('POST')) {
           $submittedCode = $request->request->get('verification_code');
   
           if ($emailVerificationService->verifyCode($email, $submittedCode)) {
               $this->addFlash('success', 'Utilisateur ajouté, bienvenue !');
               return $this->redirectToRoute('app_login');
           } else {
               $this->addFlash('error', 'Code de vérification invalide ou expiré.');
           }
       } 
    return $this->render('security/verify.html.twig', [
        'email' => $email,
    ]);
}

}
