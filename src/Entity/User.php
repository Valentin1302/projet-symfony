<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
     #[ORM\Id]
     #[ORM\GeneratedValue]
     #[ORM\Column]
     private $id;

     #[ORM\Column(length:60)]
     private $firstName;

     #[ORM\Column(length:60)]
     private $lastName;

     #[ORM\Column(type: "integer")]
     private $age;

     #[ORM\Column(type: "string", length:255, unique:true)]
     private $email;
    
    public function __construct($prenom, $nom, $age, $mail){
        $this->firstName = $prenom;
        $this->lastName = $nom;
        $this->age = $age;
        $this->email = $mail;

    }


     public function getFirstName(){
        return $this->firstName;
     }

     public function setFirstName($newFirstName){
         $this->firstName = $newFirstName;
     }

     public function getLastName(){
        return $this->lastName;
     }

}