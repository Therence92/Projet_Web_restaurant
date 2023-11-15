<?php

$servername = "localhost:3300"; //serveur
$username = "root";             //identifiant
$password = "";                 //mot de passe
$dbname = "ecommerce";               //nom de la base de données

$access = new mysqli($servername, $username, $password, $dbname);  //connexion à MySQL


#$sql = "SELECT * FROM produits"; //Requete SQL, selection de id, modele, code et carburant
#$result = $access->query($sql); //Execution de la requete SQL
/*try {
    //code...

$access = new pdo("mysql:host=" . $servername . ";dbname=" . $dbname, $username ,$password);

$access->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_WARNING);

} catch (Exception $th) {
    //throw $th;
    $th->getMessage();
}
*/
?>