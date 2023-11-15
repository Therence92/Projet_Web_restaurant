<?php
$servername = "localhost"; //serveur
$username = "root";             //identifiant
$password = "";                 //mot de passe
$dbname = "ecommerce";               //nom de la base de données

$access = new mysqli($servername, $username, $password, $dbname); //connexion à MySQL

    
include('admin/config.php');
$sql= "INSERT INTO panier VALUES (null, '".$_POST['produits']."', '".$_POST['prix']."', '".$_POST['quantite']."')";

if ($access->query($sql)==true){

 echo("<script>alert('Nouveau panier créé avec succès!')</script>");
 echo("<script>window.location = 'index_panier.php';</script>");

}else {
 echo "Error: " . $sql . "<br>" . $access->error;
}
  

$access->close();  //Fermeture de la connexion
?>

