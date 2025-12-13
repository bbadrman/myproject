<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact', methods: ['POST'])]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        $email = (new Email())
            ->from($email)
            ->to('badr.bechtiouit@gmail.com')
            ->subject($subject)
            ->text('Sender : ' . $name . \PHP_EOL . $message, 'text/plain');

        try {
            $mailer->send($email);
        } catch (\Exception $e) {
            return new Response('Error sending email: ' . $e->getMessage(), 500);
        }

        return new Response('OK');
    }
}
