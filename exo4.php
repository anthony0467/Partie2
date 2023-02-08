<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le  lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>

<h2>Résultat</h2>

<?php

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

ksort($capitales);

function tab($arr){

echo "<table border='1px';'>";
echo "<tr>
        <td>Pays</td>
        <td>Capital</td>
        <td>Lien Wiki</td>
      <tr>";
foreach($arr as $capitale => $value){
    $capitalMaj = strtoupper($capitale);
    $link = 'https://fr.wikipedia.org/wiki/'. $value;

    echo "<tr>
             <td>$capitalMaj</td>
              <td>$value</td>
              <td><a href='$link' target='_blank'>Lien</a></td>
              <tr>";
    }
    
    echo '</table>';

}

tab($capitales)

 ?>
    
</body>
</html>
