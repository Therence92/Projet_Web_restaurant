<?php

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

        
      include('config.php');
       $sql= "INSERT INTO produits VALUES (null, '$file_name','$target_file',	'".$_POST['nom']."',	'".$_POST['prix']."', '".$_POST['desc']."')";
      
       if ($access->query($sql)==true){
        
       
        echo("<script>alert('Nouvel enregistrement créé avec succès!')</script>");
        echo("<script>window.location = 'index_admin.php';</script>");

       }else {
        echo "Error: " . $sql . "<br>" . $access->error;
       }



      $access->close();

  

    ?>  

    