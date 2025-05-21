<!DOCTYPE html>
<html>
    <head>
        <title>Cave à bière</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>La cave à bière de Romaric</h1>
        <form action="ajoutBiere.php" method="POST">
            <label id="ajout">Ajouter une bière :</label> </br>
            <input type="text" name="nomBiere" id="nomBiere" placeholder="Nom de la bière"/> </br>
            <input type="text" name="descriptionBiere" id="descriptionBiere" placeholder="Description de la bière"/> </br>
            <input type="text" name="degre" id="degre" placeholder="Degré de la bière"/> </br>
            <input type="text" name="pays" id="pays" placeholder="Pays de la bière"/> </br>
            <button type="submit">OK</button>
        </form>
        <img id="image" src="cave.jpg" alt="Photo d'une cave à bière, mais pas la mienne"/>
    </body>
<?php
require_once("foot.php")
?>