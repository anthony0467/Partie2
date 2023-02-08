<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 2</h1>

<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.</p>

<h2>Résultat</h2>

<?php

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
ksort($capitales);

function tab($arr){

echo "<table border='1px';'>";
echo "<tr><td>Pays</td><td>Capital</td><tr>";
foreach($arr as $capitale => $value){
    $capitalMaj = strtoupper($capitale);

    echo "<tr>
        <td>$capitalMaj</td>
        <td>$value</td>
    <tr>";
    }
    
    echo '</table>';

}

tab($capitales)

 ?>
    
</body>
</html>
