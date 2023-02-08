<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet  qui  contient  les  informations suivantes:  champs  de  texteavec  nom,  prénom,  adresse  e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: «Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».</p>

<h2>Résultat</h2>

<?php

$formulaire = [ 'Nom',  'Prénom',  'E-mail', 'Ville', 'Sexe'];
$selection = ['Developpeur logiciel', 'Designer Web', 'Intégrateur', 'chef de projet'];

createForm($formulaire, $selection);

function createForm($form, $select){

    echo '<form style="display: flex;
    flex-direction: column;
    width: 100px;">';

    foreach($form as $element){
        echo "<label>$element</label><input type='text'><br>";
    }

    echo '<select>';
    
    foreach($select as $itemSelect){
        echo "<option>$itemSelect</option>";
    }
    echo '</select><br>';

    echo '<input  type="submit" value="Envoyer">';

    echo '</form>';

}


 ?>
    
</body>
</html>
