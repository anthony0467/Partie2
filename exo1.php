<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.</p>

<h2>Résultat</h2>

<?php

$text = 'Mon texte en parametre';

echo 'Si $text = ';
echo "$text";

function convertirMajRouge($str){
   $strMaj = strtoupper($str);

   echo "<p style='color: red;'>$strMaj</p>";
}

convertirMajRouge($text)

 ?>
    
</body>
</html>
