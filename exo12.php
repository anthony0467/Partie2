<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 12</h1>

<p>La fonction var_dump($variable)permet d’afficher les informations d’une variable.Soit le tableausuivant : $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Résultat</h2>

<?php

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
$sous_tableau = $tableauValeurs[4];

//list($a, $b, $c, $d, $e)= $tableauValeurs;
//implode(',',$e);


foreach($tableauValeurs as $valeur){
   echo '<pre>' ,var_dump($valeur), '</pre>';
}

 ?>
    
</body>
</html>
