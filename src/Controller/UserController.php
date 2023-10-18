<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController{

    #[Route('/toto', name:'toto')]
        public function displayToto(){
    
            $donnees = [
                [
                    'nom'=>'Dupont',
                    "age"=>24,
                ],
                [
                    'nom'=>'Aigna',
                    "age"=>42,
                ],
            ];
    
            return $this->render("toto.html.twig", ['totoTableau' => $donnees]);
        } 
}