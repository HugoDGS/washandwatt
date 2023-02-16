<?php
//php -S 127.0.0.1:8000 -t public
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController
{
    /**
     * @Route("/navbar", name="navbar")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
