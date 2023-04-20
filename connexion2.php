<?php
session_start();

include "config/commandes.php";

if (isset($_SESSION['xRttpHo0greL39'])) {
    if (!empty($_SESSION['xRttpHo0greL39'])) {
        header("Location: admin/afficher.php");
    }
} 

if (isset($_POST['envoyer'])) {
    if (!empty($_POST['email']) and !empty($_POST['motdepasse'])) {
        $login = htmlspecialchars(strip_tags($_POST['email']));
        $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));

        $admin = getAdmin($login, $motdepasse);
        $admin2 = getUsers($login, $motdepasse);

        if ($admin) {
            $_SESSION['xRttpHo0greL39'] = $admin;
            header('Location: admin/afficher.php');
        }elseif($admin2){
            header('Location: Acceuil.php');
        }else{
            
            echo "<script>alert('Votre email ou votre mot de passe est incorrect')</script>";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Pépinière Cailleau</title>
    <link rel="stylesheet" type="text/css" href="style2.css">

    <link rel="icon" href="ressources/image_2023-03-04_114640565-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <a onclick="window.history.back()" class="scroll-back"><i class='bx bx-chevrons-left'>
            <h3>Retour</h3>
        </i></a>


    <section class="connexion">
        <div class="container">
            <h1>Connexion</h1>
            <form method="post">
                <div class="connexion-main">
                    <input type="email" name="email" required autocomplete="off">
                    <span></span>
                    <label>Email</label>
                </div>

                <div class="connexion-main">
                    <input type="password" name="motdepasse" required autocomplete="off">
                    <span></span>
                    <label>Mot de passe</label>
                </div>
                <div class="pass"><a href="inscription.php"> Pas de compte ?</a></div>
                <input type="submit" value="Connexion" name="envoyer">

                <div class="signup">
                    Pas encore membre ? <a href="inscription.php">Creer un compte ici</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>