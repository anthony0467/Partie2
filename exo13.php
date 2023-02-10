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
    private int $vitesseActuel;
    private bool $etat;


    //constructor
    public function __construct(string $marque, string $modele, int $nbPortes){
        $this-> marque = $marque;
        $this-> modele = $modele;
        $this-> nbPortes = $nbPortes;
        $this-> vitesseActuel = 0;
        $this-> etat = false;
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

    function set_etat(bool $etat){
        $this-> etat = $etat;
    }
  
    function set_vitesseActuel(int $vitesseActuel){
        $this-> vitesseActuel = $vitesseActuel;
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
     function get_etat(): int{
        return $this-> etat;
     }

     // VITESSE DU VEHICULE
     function get_vitesseActuel(){
        return  $this->vitesseActuel;
     }
     // ACCELERATION DU VEHICULE SI CELUI CI EST EN MARCHE OU NON
     function accelerer(int $vitesseAccel){
       if($this-> etat == false){
        return "Pour accélerer, il faut démarrer le véhicule " .$this->marque. " " . $this->modele."<br>";
       }else{
        $this->set_vitesseActuel($this->get_vitesseActuel() + $vitesseAccel);
        
        return "Le véhicule accélere de ".$vitesseAccel."km/h. <br> vitesse actuel =". $this->get_vitesseActuel(). "<br>";
       }
     }
    // VEHICULE DEMARRER OU NON
     function demarrer(){
        if($this-> etat == true){
            return "Le vehicule ".$this->marque." ". $this->modele." démarre<br>";
        }else{
            return "Le véhicule ".$this->marque." ". $this->modele." est à l'arrêt.<br>";
        }
     }

    //VEHICULE A L'ARRET OU NON
     function stoppe(){
       if( $this-> vitesseActuel <= 0){
        return "le véhicule ".$this->marque." ". $this->modele." est stoppé<br>";
       }else{
        return "le véhicule ".$this->marque." ". $this->modele." est en mouvement<br>";
       }
     }

  // VEHICULE RALENTI EN FONCTION DE LA VITESSE ACTUEL
     function ralentir(int $vitesseRalentir){
        if($this-> etat == false){
            return "Pour ralentir, il faut démarrer le véhicule " .$this->marque. " " . $this->modele."<br>";
           }else if($vitesseRalentir > $this-> vitesseActuel) {
            return "Mon véhicule ".$this->marque." ". $this->modele." est à l'arrêt.<br>";
            }else{
                $this->set_vitesseActuel($this->get_vitesseActuel() - $vitesseRalentir);
            return "Mon véhicule".$this->marque." ". $this->modele." ralenti de " .$vitesseRalentir. "km/h.<br> vitesse actuel =". $this->get_vitesseActuel(). "<br>";
        }

     }

     function displayInfoVitesse(){
        if($this-> vitesseActuel <= 0){
            echo "Le véhicule est à l'arrêt.";
        }
        echo "La vitesse du véhicule ".$this->marque." ". $this->modele." est de " .$this->get_vitesseActuel(). "km/h<br>";
     }

}

$refVoiture = 'Nom et modèle du véhicule:';
$v1 = new Voiture('Peugeot', '408', 5);
$v2 = new Voiture('Citroên', 'C4', 3);


//SET VEHICULE 1
$v1->set_etat(true);
//SET VEHICULE 2
$v2->set_etat(true);

echo "<div style='display:flex;'>";
echo "<div>";
echo "<h3>Info voitures</h3>";
echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stoppe();
echo $v2->accelerer(20);
echo $v1->ralentir(30);
echo $v1->ralentir(30);
echo $v1->ralentir(30);
echo $v1->ralentir(10);
echo $v2->demarrer();
echo "<br>";
echo "</div>";

//echo $v2->get_stop();


// INFO VEHICULE 1
echo "<div>";
echo "<h3>Infos véhicule 1</h3><br>";
echo "<ul>";
echo "<li>",$refVoiture,PHP_EOL, $v1->get_marque(), PHP_EOL, $v1->get_modele(),"</li>";
echo "<li>Nombre de portes: ", $v1->get_nbPorte(),"</li>";
echo "<li>",$v1->demarrer(),"</li>";
echo "<li>",$v1->displayInfoVitesse(), "</li>";
echo "</ul>";
echo "</div>";
// INFO VEHICULE 2

$v2->set_etat(false); // véhicule à l'arret

echo "<div>";
echo "<h3>Infos véhicule 2</h3><br>";
echo "<ul>";
echo "<li>",$refVoiture,PHP_EOL, $v2->get_marque(), PHP_EOL, $v2->get_modele(),"</li>";
echo "<li>Nombre de portes: ", $v2->get_nbPorte(),"</li>";
echo "<li>",$v2->demarrer(),"</li>";
echo "<li>",$v2->displayInfoVitesse(), "</li>";
echo "</ul>";
echo "</div>";
echo "</div>";
 ?>
    
</body>
</html>
