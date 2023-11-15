<?php

function creationPanier(){
    if (!isset($_SESSION['panier'])){
       $_SESSION['panier']=array();
       $_SESSION['panier']['Produits'] = array();
       $_SESSION['panier']['prix'] = array();
       $_SESSION['panier']['quantite'] = array();
       $_SESSION['panier']['verrou'] = false;
    }
    return true;
 }

 function ajouterArticle($Produits,$quantite,$prix){

    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($Produits,  $_SESSION['panier']['Produits']);
 
       if ($positionProduit !== false)
       {
          $_SESSION['panier']['quantite'][$positionProduit] += $quantite ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['panier']['$Produits'],$Produits);
          array_push( $_SESSION['panier']['quantite'],$quantite);
          array_push( $_SESSION['panier']['prix'],$prix);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }


?>