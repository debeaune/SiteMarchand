<?php

namespace App\Controller;

use App\Entity\Product;
use App\Classe\Filter;
use App\Form\FilterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/nos-produits", name="products")
     */
    public function index(Request $request)
    {
        $filter=new Filter();
        $form=$this->createForm(FilterType::class, $filter);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $filter=$form->getData();
            $products= $this->entityManager->getRepository(Product::class)->findWithSearch($filter);
        }else{
            $products = $this->entityManager->getRepository(Product::class)->findAll();
        }

        return $this->render('product/index.html.twig',[
            'products' => $products,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/produit/{slug}", name="product")
     */
    public function show($slug)
    {
        $product = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);
        $products = $this->entityManager->getRepository(Product::class)->findByIsBest(1);

        if(!$product){
            return $this->redirectToRoute('products');
        }

        return $this->render('product/show.html.twig',[
            'product' => $product,
            'products' => $products
        ]);
    }
}
