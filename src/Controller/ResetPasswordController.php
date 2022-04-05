<?php

namespace App\Controller;

use App\Entity\ResetPassword;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/mot-de-passe-oublie", name="reset_password")
     */
    public function index(Request $request)
    {
        if($this->getUser())
        {
           return $this->redirectToRoute('home');
        }

        if($request->get('email'))
        {
            $user = $this->entityManager->getRepository(User::class)->findOneByEmail($request->get('email'));
            
            if($user)
            {
                //Enregistrer en base la demande de reset_password avec user, token, createdAt
                $reset_password = new ResetPassword();
                $reset_password->setUser($user);
                $reset_password->setToken(uniqid());
                $reset_password->setCreatedAt(new\DateTime());
                $this->entityManager->persist($reset_password);
                $this->entityManager->flush();

                //Envoi d'un email à l'utilisateur avec un lien lui permettant de mettrre à jour son mot de passe
                
                $url = $this->generateUrl('update_password', [
                    'token' => $reset_password->getToken()
                ]);

                $content = "Bonjour".$user->getFirstname()."<br/>Vous avez demandé à réinitialiser votre mot de passe sur le site de La Boutique Française.<br/><br/>";
                $content .= "Merci de bien vouloir cliquer sur le lien suivant pour <a href='".$url."'>mettre à jour votre mot de passe.";

                $mail = new Mail();
                $mail->send($user->getEmail(),$user->getFirstname().''.$user->getLastname(),
                'Réinitialiser votre mot de passe sur La Boutique Française', $content);
            }
        }
        return $this->render('reset_password/index.html.twig');
    }

     /**
     * @Route("/modifier-mon-mot-de-passe/{token}", name="update_password")
     */

    public function update($token)
    {

    }
}
