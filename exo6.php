<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

alimenterListeDeroulante($elements);

function alimenterListeDeroulante($arr){
    echo '<select>';
    foreach($arr as $element){
        echo "<option value='$element'>$element</option>";
    }
    echo '</select>';
}


 ?>
    
</body>
</html>
