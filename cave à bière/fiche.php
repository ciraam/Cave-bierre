<link rel="stylesheet" href="style.css">
<h2 id="cave">Cave :</h2>
<?php
$bd= new PDO("mysql:host=localhost;dbname=biere", 'root', '');
$sql= "select * from cave";
$requete= $bd -> query($sql);
$donnees= $requete -> fetchAll(PDO::FETCH_ASSOC);

$photoF= '<img src="drapeau_francais.jpg" width="50px"/>';
$photoB= '<img src="drapeau_belge.jpg" width="50px"/>';
$photoA= '<img src="drapeau_allemand.jpg" width="50px"/>';

for ($i=0;$i<count($donnees);$i++) {
    echo "<hr />";
    echo "<ul>";
    echo "<li>";
   // Nom
    echo "<p>".$donnees[$i]['nom_biere']."</p>";
    echo "</li>";
    // Description
    echo "<li>";
    echo "<p>".$donnees[$i]['description_biere']."</p></br>";
    echo "</li>";
    // Pays
    echo "</li>";
    echo "<li>";
    echo "<p>".$donnees[$i]['pays']."</p>";
    echo "</li>";
    // Degré
    echo "</li>";
    echo "<li>";
    echo "<p>".$donnees[$i]['degre']."</p>";
    echo "</li>";
    // Photo
    echo "</li>";
    echo "<li>";
    if ($donnees[$i]['pays']=="france") {
        echo $photoF;
    } elseif ($donnees[$i]['pays']=="France") {
        echo $photoF;
    } elseif ($donnees[$i]['pays']=="Belgique") {
        echo $photoB;
    } elseif ($donnees[$i]['pays']=="belgique") {
        echo $photoB;
    } elseif ($donnees[$i]['pays']=="allemagne") {
        echo $photoA;
    } elseif ($donnees[$i]['pays']=="Allemagne") {
        echo $photoA;
    } else {
        echo "Seulement 3 drapeaux en stock (France, Belgique et Allemagne)";
    }
    echo "</li>";
    echo "</ul>";
}

    // affichage foreach, j'y arrive pas avec
// foreach ($donnees as $valeur) {
//     print_r($valeur);
// }

require_once("foot.php");
?>