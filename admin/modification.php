<?php
 include('config.php');

if (isset($_POST["id"])){
    $id = $_POST["id"];

    // Récupération des données du produit à modifier
    $sql_select = "SELECT * FROM produits WHERE id = '$id'";
    $result = $access->query($sql_select);

   if($result->num_rows > 0){ 
    while($row =  $result->fetch_assoc()){

    }
    
}
if (isset($_POST["submit"])){
    $file_name = $_FILES["file"]["name"] ; #on recupere le nom du fichier nomer "name"
    $file_tmp  = $_FILES["file"]["tmp_name"];
    $file_type = $_FILES["file"]["type"];
    $file_size = $_FILES["file"]["size"];

    if ($file_type == "image/jpeg" || $file_type == "image/png"  || $file_type == "image/gif"){
      $target_dir= "img/";
      $target_file = $target_dir.basename($file_name) ;
      move_uploaded_file($file_tmp,$target_file); 

    }
  }
    // Mise à jour des informations du produit
   
    $sql_update = "UPDATE produits SET image_name = '$file_name',image_path ='$target_file', nom = '".$_POST['nom']."', prix ='".$_POST['prix']."', description = '".$_POST['desc']."'
    WHERE id = '".$_POST['id']."'";

   
    if($access->query($sql_update) == TRUE){

        echo("<script>alert('Nouvelle modification avec succès!')</script>");

        echo("<script>window.location = 'modification.php';</script>");
       
    } else{
        echo "Erreur lors de la modification du produit : " . $access->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<title>Modification de produit</title> </head> 
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Ama Pizza</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <br>
          
        </button>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
          
           <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index_admin.php">Ajouter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="modification.php" style="font-weight: bold">Modifier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="suppression.php" >Supprimer</a>
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
    <form action="modification.php" method="POST" enctype="multipart/form-data"> 
    <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">id</label>
   <input type="number" class="form-control" name="id" id="id" required>
   </div> 
        <div class="mb-3"> 
            <label for="exampleInputEmail1" class="form-label">Image</label>
             <input type="file" class="form-control" name="file" id="file" required>
             </div>

    <div class="mb-3">
   <label for="exampleInputPassword1" class="form-label">Nom du produit</label> 
   <input type="text" class="form-control" name="nom" id="nom" required> 
  </div>
  
  <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">Prix</label>
   <input type="number" class="form-control" name="prix" id="prix" required>
   </div> 

   <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">Description</label> 
   <textarea class="form-control" name="desc" id="desc" required></textarea>
   </div> 
    </div>
    <button type="submit" name="submit" id="submit" class="btn btn-warning">Modifier le produit</button> </form> </div> </div> </div> </body> </html>
