<link rel="stylesheet" href="style.css">
<?php
// require_once("ajoutBiere.php");

$nom= $_POST["nomBiere"];
$description= $_POST["descriptionBiere"];
$degre= $_POST["degre"];
$pays= $_POST["pays"];
$photoF= '<img src="drapeau_francais.jpg" width="50px"/>';
$photoB= '<img src="drapeau_belge.jpg" width="50px"/>';
$photoA= '<img src="drapeau_allemand.jpg" width="50px"/>';

// montre l'ajout
echo "<h2>Votre ajout :</h2></br>";
echo "<p>".$nom."</p></br>";
echo "<p>".$description."</p></br>";
echo "<p>".$degre."° </p></br>";
echo "<p>".$pays."</p></br>";
if ($pays=="france") {
    echo "<p>".$photoF."</p></br>";
} elseif ($pays=="France") {
    echo "<p>".$photoF."</p></br>";
} elseif ($pays=="Belgique") {
    echo "<p>".$photoB."</p></br>";
} elseif ($pays=="belgique") {
    echo "<p>".$photoB."</p></br>";
} elseif ($pays=="allemagne") {
    echo "<p>".$photoA."</p></br>";
} elseif ($pays=="Allemagne") {
    echo "<p>".$photoA."</p></br>";
} else {
    echo "Seulement 3 drapeaux en stock (France, Belgique et Allemagne)";
}

require_once("foot.php");
?>