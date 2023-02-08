<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>

<?php

$nomsRadio = ["Monsieur","Madame","Mademoiselle"];

afficherRadio($nomsRadio);
function afficherRadio($arr){
echo '<form>';
    foreach( $arr as $element){
        echo "<input type='radio'><label>$element</label><br>";
    }
    echo '</form>';
}


 ?>
    
</body>
</html>
