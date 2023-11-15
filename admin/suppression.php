<?php
include('config.php');

if (isset($_POST["id"])){
    $id = $_POST["id"];

    // Suppression du fichier correspondant à l'ancienne image
    $sql_select = "SELECT image FROM produits WHERE id = '$id'";
    $result = $access->query($sql_select);
    if($result->num_rows > 0){ 
        while($row =  $result->fetch_assoc()){
    
        }
    }
    $old_image = $row["image"];
    if (file_exists($old_image)) {
        unlink($old_image);
    }

    // Suppression du produit
    $sql_delete = "DELETE FROM produits WHERE id = '".$_POST['id']."'";

    if($access->query($sql_delete) === TRUE){
        echo("<script>alert('Produit supprimé avec succès!')</script>");
        echo("<script>window.location = 'suppression.php';</script>");
    } else{
        echo "Erreur lors de la suppression du produit : " . $access->error;
    }
}

$access->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<title>Suppression de produit</title> </head> 
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Ama Pizza</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index_admin.php">Ajouter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="modification.php">Modifier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="suppression.php" style="font-weight: bold">Supprimer</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <br>
   <div class="album py-5 bg-light"> 
    <div class="container"> 
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> 

   <form action="suppression.php" method="POST" enctype="multipart/form-data"> 
       
    <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">id</label>
    <input type="number" class="form-control" name="id" id="id" required>
    </div> 
    <button type="submit" name="submit" id="submit" class="btn btn-danger">Supprimerle produit</button> 
  </form> 
    </div>
    </div>
    </div> 
    </body>
    </html>
