<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'app_payment')]
    public function index(): Response
    {
        return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController',
        ]);
    }

   /* #[Route('/create-checkout-session', name: 'create_checkout_session', methods: ['POST'])]
    public function createCheckoutSession(Request $request): JsonResponse
    {
        // 1. Charger la clé secrète Stripe
        Stripe::setApiKey('sk_test_51RBMki4NCECvuRy8UTExa8WVB6rd2jVae5Mgi1xw9KdCVws55g7tyWY6ZTdSpg5OmGv2bdtU1dRhPY2TfTfjmMqH00Eo4whBqR'); // Remplace par ta vraie clé secrète Stripe !

        // 2. Récupérer les données envoyées depuis le JavaScript
        $data = json_decode($request->getContent(), true);
        $totalAmount = $data['totalAmount'] ?? 0; // Attention, montant en CENTIMES

        if ($totalAmount <= 0) {
            return new JsonResponse(['error' => 'Montant invalide'], 400);
        }

        // 3. Créer une session Stripe
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';
        $session = Session::create([
            'payment_method_types' => ['card'], // bien ici, pas de payment_method_collection
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur', 
                    'product_data' => [
                        'name' => 'Commande Planmaster',
                    ],
                    'unit_amount' => $totalAmount, // en centimes
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/success',
            'cancel_url' => $YOUR_DOMAIN . '/cancel',
        ]);
        
        

        // 4. Retourner l'id de la session
        return new JsonResponse([
            'id' => $session->id,
        ]);
    }*/
    
#[Route('/create-checkout-session', name: 'create_checkout_session', methods: ['POST'])]
public function createCheckoutSession(Request $request): JsonResponse
{
    Stripe::setApiKey('sk_test_51RBMki4NCECvuRy8UTExa8WVB6rd2jVae5Mgi1xw9KdCVws55g7tyWY6ZTdSpg5OmGv2bdtU1dRhPY2TfTfjmMqH00Eo4whBqR');

    $data = json_decode($request->getContent(), true);
    $totalAmount = $data['totalAmount'] ?? 0;

    if ($totalAmount <= 0) {
        return new JsonResponse(['error' => 'Montant invalide'], 400);
    }

    $YOUR_DOMAIN = 'http://127.0.0.1:8000';
    $session = Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                    'name' => 'Commande Planmaster',
                ],
                'unit_amount' => $totalAmount,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/success?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => $YOUR_DOMAIN . '/cancel',
    ]);

    return new JsonResponse([
        'id' => $session->id,
    ]);
}

#[Route('/success', name: 'payment_success')]
public function success(Request $request, MailerInterface $mailer): Response
{
    Stripe::setApiKey('sk_test_51RBMki4NCECvuRy8UTExa8WVB6rd2jVae5Mgi1xw9KdCVws55g7tyWY6ZTdSpg5OmGv2bdtU1dRhPY2TfTfjmMqH00Eo4whBqR');

    $sessionId = $request->query->get('session_id');

    if (!$sessionId) {
        throw $this->createNotFoundException('Session ID manquant');
    }

    $session = \Stripe\Checkout\Session::retrieve($sessionId);

   /* $customerEmail = $session->customer_details->email ?? null;

    if ($customerEmail) {
        $this->sendReceiptEmail($mailer, $customerEmail, $session->amount_total);
        dump($customerEmail);
    }*/
    $this->addFlash('success', 'Votre paiement a été effectué avec succès !');

    // Redirection vers app_store_products après succès
    return $this->redirectToRoute('app_store_products');
    //return new Response('Paiement réussi ! Merci.');
}


private function sendReceiptEmail(MailerInterface $mailer, string $email, int $amount): void
{
    $amountInEuros = $amount / 100;

    $emailMessage = (new Email())
    ->from('malekeljendoubi@gmail.com')
    ->to($email)
        ->subject('Votre reçu Planmaster')
        ->html($this->renderView('emails/receipt.html.twig', [
            'amount' => $amountInEuros,
            'date' => new \DateTime(),
        ]));

    $mailer->send($emailMessage);
}

/*
   // Redirection après succès
#[Route('/success', name: 'payment_success')]
public function success(): Response
{
    $this->addFlash('success', 'Votre paiement a été effectué avec succès !');

    // Redirection vers app_store_products après succès
    return $this->redirectToRoute('app_store_products');
}
*/
// Redirection après annulation
#[Route('/cancel', name: 'payment_cancel')]
public function cancel(): Response
{
    $this->addFlash('error', 'Le paiement a été annulé. Veuillez réessayer.');

    // Redirection vers app_store_products après annulation
    return $this->redirectToRoute('app_store_products');
}

}
