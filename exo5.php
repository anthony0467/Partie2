<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 5</h1>

<p>Créer  une  fonction  personnalisée  permettant  de  créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php

$nomsInput = array("Nom","Prénom","Ville");

formulaire($nomsInput);


function formulaire($arr){
echo "<form style='display:flex; flex-direction: column'>";
    foreach($arr as $element){
        echo "<label>$element</label>
              <input style='max-width: 100px' type='text'>";
    }
}
echo "</form>";

 ?>
    
</body>
</html>
