<?php 
//connexion à la base de données
$con = mysqli_connect("localhost","root","root","monoshop");
//verifier la connexion
if(!$con) die('Erreur : '.mysqli_connect_error());

if(!isset($_SESSION)){
    //si non demarer la session
    session_start();
 }
 //creer la session
 if(!isset($_SESSION['panier'])){
    //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
    $_SESSION['panier'] = array();
 }

 //récupération de l'id dans le lien
  if(isset($_GET['id'])){//si un id a été envoyé alors :
    $id = $_GET['id'] ;
    //verifier grace a l'id si le produit existe dans la base de  données
    $produit = mysqli_query($con ,"SELECT * FROM produits WHERE id = $id") ;
    if(empty(mysqli_fetch_assoc($produit))){
        //si ce produit n'existe pas
        die("Ce produit n'existe pas");
    }
    //ajouter le produit dans le panier ( Le tableau)
    if(isset($_SESSION['panier'][$id])){// si le produit est déjà dans le panier
        $_SESSION['panier'][$id]++; //Représente la quantité 
        
    }else {
        //si non on ajoute le produit
        $_SESSION['panier'][$id]= 1 ;
    }
}

if(isset($_GET["id"])){
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM cart WHERE product_id = $product_id";
    $result = $con->query($sql); // si ça ne marche pas, modifier le $con en new mysqli
    $total_cart = "SELECT * FROM cart";
    $total_cart_result =$con->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

    $in_cart = "Ajouté au panier !";
    if(mysqli_num_rows($result) > 0){
        
        echo json_encode(["num_cart"=>$cart_num, "in_cart"=>$in_cart]);
    }else{
        $insert = "INSERT INTO cart(product_id) VALUES ($product_id)";
        if($con->query($insert) === true){
            
            echo json_encode(["num_cart"=>$cart_num, "in_cart"=>$in_cart]);
        }else{
            echo "<script>alert(ça ne s'est pas inséré dans la table)</script>";
        }
    }
    
}

?>