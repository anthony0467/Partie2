<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 14</h1>

<p> Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes: </p>

<h2>Résultat</h2>

<?php

class Voiture{

    //déclaration d'une propriété
    protected string $marque;
    protected string $modele;
    


    //constructor
    public function __construct(string $marque, string $modele){
        $this-> marque = $marque;
        $this-> modele = $modele;

    }


    //SET

    function set_marque(string $marque){
        $this-> marque = $marque;
    }
    function set_modele( string $modele){
        $this-> modele = $modele;
    }

    //GET

    function get_marque(): string{
       return $this-> marque;
    }
    function get_modele(): string{
        return $this-> modele;
     }

     function get_info(){
        return $this->marque . ', ' . $this->modele. "<br>" ;
     }
}


class VoitureElec extends Voiture{

     //déclaration d'une propriété

    private  $autonomie;

    public function __construct($marque, $modele,  $autonomie){
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;  
    }

    // SETTER
    function set_auto( $autonomie){
        $this->autonomie = $autonomie;
    }

    //GETTER
    function get_auto(){
        return $this-> autonomie;
    }

    function get_info(){
        return $this->marque . ', ' . $this->modele . ', ' . $this->autonomie. "<br>" ;
     }
 }



     $v1 = new Voiture('Peugeot', '408');
     $v2 = new VoitureElec('Bmw', 'I3', '100');


   echo  $v1->get_info();
   echo  $v2->get_info();
    
    //echo $v2->get_info()."<br/>"

 ?>


    
</body>
</html>
