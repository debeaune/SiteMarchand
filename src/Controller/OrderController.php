<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Form\OrderType;
use App\Entity\Order;
use App\Entity\OrderDetails;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Doctrine\ORM\EntityManagerInterface ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/commande", name="order")
     */
    public function index(Cart $cart, Request $request)
    {
        if(!$this->getUser()->getAddresses()->getValues())
        {
            return $this->redirectToRoute('account_address_add');
        }

        $form = $this->createForm(OrderType::class,null, [
            'user' => $this->getUser()
        ]);

        return $this->render('order/index.html.twig',[
            'form' => $form->createView(),
            'cart' => $cart->getFull()
        ]);
    }

    /**
     * @Route("/commande/recapitulatif", name="order_recap",methods={"POST"})
     */
    public function add(Cart $cart, Request $request)
    {
        $form = $this->createForm(OrderType::class,null, [
            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            
           $date = new \DateTimeImmutable();
           $carriers = $form->get('carriers')->getData();
           $delivery = $form->get('addresses')->getData();
           $delivery_content=$delivery->getFirstName().' '.$delivery->getLastName();
           $delivery_content .= '<br/>'.$delivery->getPhone();

           if($delivery->getCompany())
           {
                $delivery_content .= '<br/>'.$delivery->getCompany();
           }
           $delivery_content .= '<br/>'.$delivery->getAddress();
           $delivery_content .= '<br/>'.$delivery->getPostal().' '.$delivery->getCity();
           $delivery_content .= '<br/>'.$delivery->getCountry();

           $order = new Order();
           $order->setUser($this->getUser());
           $order->setCreatedAt($date);
           $order->setCarrierName($carriers->getName());
           $order->setCarrierPrice($carriers->getPrice());
           $order->setDelivery($delivery_content);
           $order->setIsPaid(0);

           $this->entityManager->persist($order);

           $products_for_stripe = [];
           $YOUR_DOMAIN= 'http:/127.0.01:8000';

           foreach($cart->getFull() as $product)
           {
                $orderDetails = new orderDetails();
                $orderDetails->setMyOrder($order);
                $orderDetails->setProduct($product['product']->getName());
                $orderDetails->setQuantity($product['quantity']);
                $orderDetails->setPrice($product['product']->getPrice());
                $orderDetails->setTotal($product['product']->getPrice() * $product['quantity']);
                $this->entityManager->persist($orderDetails);

                $products_for_stripe[] =[
                    'price_data' =>[
                        'currency' =>'eur',
                        'unit_amount' =>$product['product']->getPrice(),
                        'product_data' => [
                            'name' => $product['product']->getName(),
                            'images' => [$YOUR_DOMAIN."/uploads/".$product['product']->getIllustration()],
                        ],
                    ],
                    'quantity' =>$product['quantity'],
                ];
           }

            //$this->entityManager->flush();

            Stripe::setApiKey('sk_test_51Kiag2EsJLJBd23IRwidXrhQvxJgm8ecQ9EKsLWhMZvhXj2qo8oCQaGeKpGmnB5FXI4NOcivOAFWWZUzz9NRzgo800BuAtwrjM');
            
            $checkout_session = Session::create([
                'payment_method_types' =>['card'],
                'line_items' =>[
                        $products_for_stripe
                    ],
                    'mode' => 'payment',
                    'success_url' => $YOUR_DOMAIN. '/success.html',
                    'cancel_url' => $YOUR_DOMAIN. '/cancel.html',
                ]);

            //echo json_encode(['id' => $checkout_session->id]);


            return $this->render('order/add.html.twig',[
                'cart' => $cart->getFull(),
                'carrier' => $carriers,
                'delivery' => $delivery_content,
                'stripe_checkout_session' => $checkout_session->id
            ]);

        }

        return $this->redirectToRoute('cart');
    }
}
