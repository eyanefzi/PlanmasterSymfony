<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailVerificationService
{
    private MailerInterface $mailer;
    private RequestStack $requestStack;

    public function __construct(MailerInterface $mailer, RequestStack $requestStack)
    {
        $this->mailer = $mailer;
        $this->requestStack = $requestStack;
    }

    public function sendVerificationCode(string $email): void
    {
        // Génération du code aléatoire à 4 chiffres
        $code = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);

        // Stockage en session avec expiration à 5 minutes
        $session = $this->requestStack->getSession();
        $session->set('verification_code_' . $email, [
            'code' => $code,
            'expires_at' => time() + 300 // 5 minutes = 300 secondes
        ]);

        // Envoi de l’email
        $emailMessage = (new Email())
            ->from('no-reply@votre-site.com')
            ->to($email)
            ->subject('Votre code de vérification')
            ->text("Votre code de vérification est : $code (valable 5 minutes)");

        $this->mailer->send($emailMessage);
    }

    public function verifyCode(string $email, string $submittedCode): bool
    {
        $session = $this->requestStack->getSession();
        $stored = $session->get('verification_code_' . $email);

        if (!$stored) {
            return false;
        }

        // Vérification de la validité dans le temps
        if (time() > $stored['expires_at']) {
            $session->remove('verification_code_' . $email);
            return false;
        }

        return $stored['code'] === $submittedCode;
    }
}
