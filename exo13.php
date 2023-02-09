<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 13</h1>

<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPorteset vitesseActuelleainsi que les méthodes demarrer( ), accelerer( ) et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule. </p>

<h2>Résultat</h2>

<?php

class Voiture{

    //déclaration d'une propriété
    private string $marque;
    private string $modele;
    private int  $nbPortes;
    private int $vitesseActuel = 0;
    private int $acceleration;
    //private string $etat;


    //constructor
    public function __construct(string $marque, string $modele, int $nbPortes, int $vitesseActuel, int $acceleration){
        $this-> marque = $marque;
        $this-> modele = $modele;
        $this-> nbPortes = $nbPortes;
        $this-> vitesseActuel = $vitesseActuel;
        $this-> acceleration = $acceleration;
    }

   

    //SET

    function set_marque(string $marque){
        $this-> marque = $marque;
    }
    function set_modele( string $modele){
        $this-> modele = $modele;
    }

    function set_nbPorte(string $nbPortes){
        $this-> nbPortes = $nbPortes;
    }
   /* function set_demarrer(){
        $this-> marque = $marque;
        $this-> modele = $modele;
    }

    function set_stop($marque, $modele){
        $this-> marque = $marque;
        $this-> modele = $modele;
    }*/

    function set_vitesseActuel(int $vitesseActuel){
        $this-> vitesseActuel = $vitesseActuel;
    }

    function set_acceleration(int $acceleration){
        $this-> acceleration = $acceleration;
    }
  

    //GET

    function get_marque(): string{
       return $this-> marque;
    }
    function get_modele(): string{
        return $this-> modele;
     }
     function get_nbPorte(): int{
        return $this-> nbPortes;
     }

     function get_demarrer(){
       if(!$this->vitesseActuel <= 0){
            return "Le véhicule ".$this->marque. " ". $this->modele." démarre.<br>";
        }else{
            return "Le véhicule " .$this->marque. " est à l'arrêt.<br>";
        }
     }

    /* function get_stop(){
        return "Le véhicule " .$this->marque. " est stoppé.<br>";
     }*/

     function get_vitesseActuel(){
        return "Le véhicule " .$this->marque." " .$this->modele. " à une vitesse actuel de  " .$this->vitesseActuel. "km/h<br>";
     }

     function get_acceleration(){
        return "Le véhicule" .$this->marque." ".$this->modele." accélère de " .$this->acceleration. "km/h.<br>";
     }

}

$refVoiture = 'Nom et modèle du véhicule:';
$v1 = new Voiture('Peugeot', 408, 5,50, 50);
$v2 = new Voiture('Citroên', 'C4', 3,0, 20);


//SET VEHICULE 1
/*
$v1->set_marque('Peugeot');
$v1->set_modele(408);
$v1->set_nbPorte(5);
$v1->set_acceleration(50);
$v1->set_vitesseActuel(50);
//SET VEHICULE 2
$v2->set_marque('Citroên');
$v2->set_modele('C4');
$v2->set_nbPorte(3);
$v2->set_acceleration(20);*/

echo "<div style='display:flex;'>";
echo "<div>";
echo "<h3>Info voitures</h3>";
echo $v1->get_demarrer();
echo $v1->get_acceleration();
echo $v2->get_demarrer();
echo $v2->get_acceleration(20);
echo $v1->get_vitesseActuel();
echo $v2->get_vitesseActuel();
echo "<br>";
echo "</div>";


//echo $v2->get_stop();



// INFO VEHICULE 1
echo "<div>";
echo "<h3>Infos véhicule 1</h3><br>";
echo "<ul>";
echo "<li>",$refVoiture,PHP_EOL, $v1->get_marque(), PHP_EOL, $v1->get_modele(),"</li>";
echo "<li>Nombre de portes: ", $v1->get_nbPorte(),"</li>";
echo "<li>",$v1->get_demarrer(),"</li>";
echo "<li>",$v1->get_vitesseActuel(), "</li>";
echo "</ul>";
echo "</div>";
// INFO VEHICULE 2
echo "<div>";
echo "<h3>Infos véhicule 2</h3><br>";
echo "<ul>";
echo "<li>",$refVoiture,PHP_EOL, $v2->get_marque(), PHP_EOL, $v2->get_modele(),"</li>";
echo "<li>Nombre de portes: ", $v2->get_nbPorte(),"</li>";
echo "<li>",$v2->get_demarrer(),"</li>";
echo "<li>",$v2->get_vitesseActuel(), "</li>";
echo "</ul>";
echo "</div>";
echo "</div>";
 ?>
    
</body>
</html>
