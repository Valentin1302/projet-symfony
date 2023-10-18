<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    #[Route('/', name:'accueil')]
     public function displayHome(){
      $user1 = new User("Hommer", "Dalor", 24, "homerdalor@test.fr");
      $u1Prenom = $user1->getFirstName();
      $u1Prenom = $user1->setFirstName("Jacquie");
      $u1Prenom = $user1->getFirstName();
       return $this->render("base.html.twig", ["prenom"=>$u1Prenom]);
     }

 
}