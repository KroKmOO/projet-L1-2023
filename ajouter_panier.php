<?php
//inclure la page de connexion
 include "con_panier.php";
 
 //verifier si une session existe
 if(!isset($_SESSION)){
    //si non demarer la session
    session_start();var_dump("test1");
 }
 //creer la session
 if(!isset($_SESSION['panier'])){
    //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
    $_SESSION['panier'] = array();var_dump("test2");
 }

 //récupération de l'id dans le lien
  if(isset($_GET['pdt'])){//si un id a été envoyé alors :
    $id = $_GET['pdt'] ;var_dump("test3");
    //verifier grace a l'id si le produit existe dans la base de  données
    $produit = mysqli_query($con ,"SELECT * FROM produits WHERE id = $id") ;var_dump("test4");
    if(empty(mysqli_fetch_assoc($produit))){
        //si ce produit n'existe pas
        die("Ce produit n'existe pas");
    }
    //ajouter le produit dans le panier ( Le tableau)
    var_dump("test5");
    if(isset($_SESSION['panier'][$id])){// si le produit est déjà dans le panier
        $_SESSION['panier'][$id]++; //Représente la quantité 
        var_dump("test6");
    }else {
        //si non on ajoute le produit
        $_SESSION['panier'][$id]= 1 ;var_dump("test7");
    }

   //redirection vers la page index.php



  }
