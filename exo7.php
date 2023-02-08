<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php

$elements = ['choix 1' => false, 'choix 2' => true, 'choix 3' => false];

genererCheckbox($elements);

function genererCheckbox($arr){
    echo '<form >';
    foreach($arr as $element => $value){
        $checkValue = (( $value == false)? '' : "checked");

        // var_dump($checkValue);
    
        echo "<input type='checkbox' $checkValue><label>$element</label><br>";
    }
    echo '</form>';
}

// $tableauChoix = [
//     "Choix1" => "checked",
//     "Choix2" => "unchecked",
//     "Choix3" => "unchecked",
//     "Choix4" => "checked",
//     "Choix5" => "checked",

// ]



 ?>
    
</body>
</html>
