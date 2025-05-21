<?php
// require_once("head.php");

$bd= new PDO("mysql:host=localhost;dbname=biere", 'root', '');
$sql= "select * from cave";
$requete= $bd -> query($sql);
$donnees= $requete -> fetchAll(PDO::FETCH_ASSOC);

// première requête
// $sql2= "insert into biere (nom_biere,description_biere,degre,pays,photo) values('Kronenbourg','Bière française','4','France','3')";
// $requete2= $bd -> query($sql2);

$nom= $_POST["nomBiere"];
$description= $_POST["descriptionBiere"];
$degre= $_POST["degre"];
$pays= $_POST["pays"];
$photoF= '<img src="drapeau_francais.jpg" width="50px"/>';
$photoB= '<img src="drapeau_belge.jpg" width="50px"/>';
$photoA= '<img src="drapeau_allemand.jpg" width="50px"/>';

// ancienne requete pour inserer
// $sql3= "insert into biere (nom_biere,description_biere,degre,pays,photo) values(".$nom.", ".$description.", ".$degre.", ".$pays.", ".$photo.")";
// $sql3= "insert into biere (nom_biere,description_biere,degre,pays,photo) values(:nom_biere, :description_biere, :degre, :pays, :photo)";
// $requete3= $bd->query($sql3);

// requete pour automatiser
$sql4= $bd -> prepare('insert into cave (nom_biere,description_biere,degre,pays) values (:nom_biere, :description_biere, :degre, :pays)');
$sql4 -> execute(array('nom_biere' => $nom, 'description_biere' => $description, 'degre' => $degre, 'pays' => $pays));

// $sql9= "select nom_biere from cave";
// $requete9= $bd->query($sql9);
// $biere1= $requete9 -> fetchAll(PDO::FETCH_ASSOC);

require_once("ajout.php");
require_once("foot.php");
?>