<?php

function ajouterUser($nom, $prenom, $email, $motdepasse, $num, $genre)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("INSERT INTO users (nom, prenom, email, motdepasse, num, genre) VALUES (?, ?, ?, ?, ?, ?)");

    $req->execute(array($nom, $prenom, $email, $motdepasse, $num, $genre));

    return true;

    $req->closeCursor();
  }
}

 function getUsers($email, $password){
  
   if(require("connexion.php")){

     $req = $access->prepare("SELECT * FROM users ");

     $req->execute();

     if($req->rowCount() == 1){
      
       $data = $req->fetchAll(PDO::FETCH_OBJ);

       foreach($data as $i){
         $mail = $i->email;
         $mdp = $i->motdepasse;
       }

        if($mail == $email AND $mdp == $password)
       {
         return $data;
       }
       else{
            return false;
       }

     }

   }

 }

function modifier($image1, $image2, $image3, $image4, $nom, $prix, $desc, $id, $appv, $type, $obtenteur, $couleur, $Dispo)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE produits SET `image1` = ?, `image2` = ?, `image3` = ?, `image4` = ?, nom = ?, prix = ?, description = ?, appv = ?, type = ?, obtenteur = ?, couleur  = ?, Dispo = ? WHERE id=?");

    $req->execute(array($image1, $image2, $image3, $image4, $nom, $prix, $desc, $appv, $type, $obtenteur, $couleur, $Dispo, $id)); // mettre dans le mm sens que le prepare

    $req->closeCursor();
  }
}

function afficherUnProduit($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

  function ajouter($image1, $image2, $image3, $image4, $nom, $prix, $desc, $appv, $type, $obtenteur, $couleur, $Dispo)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO produits (image1, image2, image3, image4, nom, prix, description, appv, type, obtenteur, couleur, Dispo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

      $req->execute(array($image1, $image2, $image3, $image4, $nom, $prix, $desc,  $appv, $type, $obtenteur, $couleur, $Dispo,));

      $req->closeCursor();
    }
  }

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM produits WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

function getAdmin($email, $password){
  
  if(require("connexion.php")){

    $req = $access->prepare("SELECT * FROM admin WHERE id=33");

    $req->execute();

    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

  }

}

