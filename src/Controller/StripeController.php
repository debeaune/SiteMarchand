<?php

namespace App\Controller;

use App\Classe\Cart;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use App\Entity\Order;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class StripeController extends AbstractController
{
    /**
     * @Route("/commande/create-session/{reference}", name="stripe_create_session")
     */
    public function index(EntityManagerInterface $entityManager, Cart $cart, $reference)
    {
        $products_for_stripe = [];
        $YOUR_DOMAIN= 'http:/127.0.01:8000';

        $order = $entityManager->getRepository(Order::class)->findOneByReference($reference);       

        if(!$order){
            $this->redirectToRoute('order');
        }

        foreach($order->getOrderDetails()->getValues() as $product)
        {
            $product_object = $entityManager->getRepository(Product::class)->findOneByName($product->getProduct());
            $products_for_stripe[] =[
                'price_data' =>[
                    'currency' =>'eur',
                    'unit_amount' =>$product->getPrice(),
                    'product_data' => [
                        'name' => $product->getProduct(),
                        'images' => [$YOUR_DOMAIN."/uploads/".$product_object->getIllustration()],
                    ],
                ],
                'quantity' =>$product->getQuantity(),
            ];
        }

        $products_for_stripe[] =[
            'price_data' =>[
                'currency' =>'eur',
                'unit_amount' =>$order->getCarrierPrice()*100,
                'product_data' => [
                    'name' => $order->getCarrierName(),
                    'images' => [$YOUR_DOMAIN]
                ],
            ],
            'quantity' => 1,
        ];

        Stripe::setApiKey('sk_test_51Kiag2EsJLJBd23IRwidXrhQvxJgm8ecQ9EKsLWhMZvhXj2qo8oCQaGeKpGmnB5FXI4NOcivOAFWWZUzz9NRzgo800BuAtwrjM');

        $checkout_session = Session::create([
            'customer_email' => $this->getUser()->getEmail(),
            'payment_method_types' =>['card'],
            'line_items' =>[
                $products_for_stripe
            ],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN. '/success.html',
            'cancel_url' => $YOUR_DOMAIN. '/cancel.html',
        ]);
        
        return $this->redirect($checkout_session->url);
    }
}
