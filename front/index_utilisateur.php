
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  <title></title>


</head>

<body>

 <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"></div>
      
        <form action="ajouter_utilisateurs.php" method= "POST" enctype="multipart/form-data">

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">email</label>
<input type="email" class="form-control" name ="email" id= "email" placeholder = "email@exemple.fr" required>
</div>

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Mot de passe</label>
<input type="password" class="form-control" name ="password" id= "password" placeholder = "password" required>
</div>

<div class="mb-3 form-check">
<label class="form-check-label" for="exampleCheck1">est admin ?</label>
<input type="checkbox" class="form-check-input" name ="admin" id="admin" values = "ok" >

</div>

<button type="submit" name ="submit" id= "submit" class="btn btn-primary">Ajouter un Nouvel utilisateur</button>
</form>
  

 </div></div>
  
  

</body>
</html>

<?php

if(isset($_POST['valider']))
{

if (isset($_POST['email']) and isset($_POST['password']) and isset($_POST['admin']) )
  {
    if (!empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['admin']))
 {

  $email =    htmlspecialchars($_POST['email']);
  $password =    htmlspecialchars($_POST['password']);
  $isadmin =    htmlspecialchars($_POST['admin']);

 }

  }

}
?>
