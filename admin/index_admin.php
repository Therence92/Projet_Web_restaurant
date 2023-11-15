
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <title></title>
</head>
<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Ama Pizza</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <br>
          <br>
          <br>
        </button>   
          <div class="collapse navbar-collapse" id="navbarCollapse">
          
           <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index_admin.php">Ajouter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="modification.php">Modifier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="suppression.php">Supprimer</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Ama Pizza</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <br>
          <br>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index_admin" style="font-weight: bold">Ajouter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="modification.php" >Modifier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="suppression.php">Supprimer</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <br>
 <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"></div>
      
      <form action="ajouter.php" method= "POST" enctype="multipart/form-data">

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Image</label>
<input type="file" class="form-control" name="file" id= "file" required>
</div>  
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Nom du produit</label>
<input type="text" class="form-control" name ="nom" id= "nom" required>
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">prix</label>
<input type="number" class="form-control" name ="prix" id= "prix" required>
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Description</label>
<textarea class="form-control" name="desc" id= "desc" required ></textarea>
</div>
<button type="submit" name ="submit" id= "submit" href="http://localhost/ECOMMERCE/page_admin.php" class="btn btn-success">Ajouter un Nouveu produit</button>
</form>

        </div></div>
     
</body>
</html>

<?php

if(isset($_POST['valider']))
{

if (isset($_POST['image']) and isserisset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['desc']))
  {
    if (!empty($_POST['image']) and !empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['desc']))
 {

  
  $image = htmlspecialchars($_POST['image']);
  $nom =    htmlspecialchars($_POST['nom']);
  $prix =    htmlspecialchars($_POST['prix']);
  $desc =    htmlspecialchars($_POST['desc']);



 }
  }
}
?>
