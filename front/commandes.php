<?php

$servername = "localhost"; //serveur
$username = "root";             //identifiant
$password = "";                 //mot de passe
$dbname = "ecommerce";               //nom de la base de données

$access = new mysqli($servername, $username, $password, $dbname); //connexion à MySQL

$email= $_POST["email"];
$motdepasse= $_POST["motdepasse"];

$sql = "SELECT * FROM utilisateurs WHERE email= '$email' AND mot_de_passe='$motdepasse' ";    

?>