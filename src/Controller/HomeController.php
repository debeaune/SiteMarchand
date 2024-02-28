<?php

namespace App\Controller;


use App\Repository\HeaderRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index(ProductRepository $productRepository, HeaderRepository $headerRepository)
    {
        $products = $productRepository->findByIsBest(1);
        $headers = $headerRepository->findAll();

        return $this->render('home/index.html.twig',[
            'products' => $products,
            'headers' => $headers
        ]);
    }
}
