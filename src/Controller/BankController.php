<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BankController extends AbstractController
{
    /**
     * @Route("/banque", name="banque")
     */
    public function index(): Response
    {
        return $this->render('bank.html.twig'
        );
    }
}