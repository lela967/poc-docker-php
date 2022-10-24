<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\JsonResponse;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="app_product")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }



    /**
     * @Route("/products", name="list_products")
     */
    public function getAll(ManagerRegistry $doctrine, MailerInterface $mailer): JsonResponse
    {


      $email = (new Email())
          ->from('hello@symfony.email')
          ->to('me@poc-docker-php.mail')
          //->cc('cc@example.com')
          //->bcc('bcc@example.com')
          //->replyTo('fabien@example.com')
          //->priority(Email::PRIORITY_HIGH)
          ->subject('Time for Symfony Mailer!')
          ->text('Sending emails is fun again!')
          ->html('<p>See Twig integration for better HTML integration!</p>');

      $mailer->send($email);



      $products = $doctrine->getRepository(Product::class)->findAll();

      return new JsonResponse($products[0]->getName());
    }


}
