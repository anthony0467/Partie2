<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 8</h1>

<p>Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpg Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Résultat</h2>

<?php

$url = 'http://my.mobirise.com/data/userpic/764.jpg';

repeterImage($url, 4);

function repeterImage($image, $number){

/*$i = 1;
while($i <= $number) {
    echo "<img src='$image'>";
    $i++;
    }   */
    
    for ($i = 1; $i <= $number; $i++){
        echo "<img src='$image'>";
    } 
}



 ?>
    
</body>
</html>
