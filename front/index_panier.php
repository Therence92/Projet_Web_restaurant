
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  <title></title>


</head>

<body style="margin: 20px;">
  <div class="album py-5 bg-light" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"></div>

    <form action="ajouter.php" method="POST" enctype="multipart/form-data" style="margin-top: 50px; margin-bottom: 20px;">

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">produits</label>
        <input type="text" class="form-control" name="produits" id="produits" required>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">prix</label>
        <input type="number" class="form-control" name="prix" id="prix" required>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">quantite</label>
        <input type="number" class="form-control" name="quantite" id="quantite" required>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
      </div>

      <button type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-top: 20px;">Ajouter un produit au panier</button>
    </form>
  </div>

</body>
</html>

<?php

if(isset($_POST['valider']))
{

if (isset($_POST['produits']) and isset($_POST['prix']) and isset($_POST['quantite']))
  {
    if (!empty($_POST['produits']) and !empty($_POST['prix']) and !empty($_POST['quantite']))
 {

  
  $produits =    htmlspecialchars($_POST['produits']);
  $prix =    htmlspecialchars($_POST['prix']);
  $quantite =    htmlspecialchars($_POST['quantite']);

 }
  }
}
?>
