<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $mail = new Mail();
        $mail->send('ml.debeaune@gmail.com','Marie Laure','Mon premier mail', "Bonjour Mlaure");

        return $this->render('home/index.html.twig');
    }
}
