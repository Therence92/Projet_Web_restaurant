<?php
$servername = "localhost"; //serveur
$username = "root";             //identifiant
$password = "";                 //mot de passe
$dbname = "ecommerce";               //nom de la base de données

$access = new mysqli($servername, $username, $password, $dbname); //connexion à MySQL

  
 $email = $_POST['email'];
 $password = $_POST['password'];
 if($_POST['admin'] ){
  $_POST['admin'] = "admin";
 }else{
  $_POST['admin']= "user";
 }
 
 
 $sql = "INSERT INTO utilisateurs VALUES (null, '".$_POST['email']."', '".$_POST['password']."', '".$_POST['admin']."')";
 
 if ( $access->query($sql) ==true) {
   echo("<script>alert('Nouvel utilisateur créé avec succès!')</script>");
   echo("<script>window.location = 'index_utilisateur.php';</script>");
 } else {
   echo "Error: " . $access->error;
 }
 
 $access->close();


?>

