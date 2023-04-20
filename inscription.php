<?php
session_start();
include "config/commandes.php";

if (isset($_SESSION['userxXJppk45hPGu'])) {
    if (!empty($_SESSION['userxXJppk45hPGu'])) {
        header("Location: index.php");
    }
}

if (isset($_POST['envoyer'])) {
    if (!empty($_POST['email']) and !empty($_POST['motdepasse']) and !empty($_POST['nom']) and !empty($_POST['prenom'])) {
        if (($_POST['motdepasse'] == $_POST['motdepasse2'])) {
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));
            $motdepasse2 = htmlspecialchars(strip_tags($_POST['motdepasse2']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
            $num = ($_POST['num']);
            $genre = ($_POST['genre']);

            if($motdepasse2 == $motdepasse){
                $user = ajouterUser($nom, $prenom, $email, $motdepasse, $num, $genre);
            }
            else{
                echo "<script>alert('la confirmation est différente du mot de passe rentré')</script>";
                header('Location: Acceuil.php');
            }


            if ($user) {
                // $_SESSION['userxXJppk45hPGu'] = $user;
                echo "<script>alert('Votre compte a bien été créé')</script>";
                header('Location: Acceuil.php');
            } else {
                echo "Compte non créer !";
            }
        } else {
            echo "Votre mot de passe est différent de votre confirmation";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pépinière Cailleau</title>

    <link rel="stylesheet" type="text/css" href="style2.css">

    <link rel="icon" href="ressources/image_2023-03-04_114640565-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <a onclick="window.history.back()" class="scroll-back"><i class='bx bx-chevrons-left'>
            <h3>Retour</h3>
        </i></a>


    <section class="body-ins">
        <section class="main-ins">
            <h1 class="titre-ins">Inscription</h1>
            <form method="POST">
                <div class="main-box-ins">
                    <div class="input-box-ins">
                        <span class="text-ins">Nom de famille</span>
                        <input type="text" name="nom" placeholder="  Veuillez entrer votre" required autocomplete="off">
                    </div>

                    <div class="input-box-ins">
                        <span class="text-ins">Prénom</span>
                        <input type="text" name="prenom" placeholder="  Veuillez entrer votre" required autocomplete="off">
                    </div>

                    <div class="input-box-ins">
                        <span class="text-ins">Email</span>
                        <input type="email" name="email" placeholder="  Email" required autocomplete="off">
                    </div>

                    <div class="input-box-ins">
                        <span class="text-ins">Numéro de téléphone</span>
                        <input type="Number" name="num" placeholder="  Numéro de téléphone" required autocomplete="off">
                    </div>

                    <div class="input-box-ins">
                        <span class="text-ins">Mot de passe</span>
                        <input type="Password" name="motdepasse" placeholder="  Veuillez entrer votre" required autocomplete="off">
                    </div>

                    <div class="input-box-ins">
                        <span class="text-ins">Confimer le mot de passe</span>
                        <input type="Password" name="motdepasse2" placeholder="  Confirmez votre mot de passe" required>
                    </div>

                </div>

                <div class="container-ins">
                    <input type="radio" name="genre" id="circle-1">
                    <input type="radio" name="genre" id="circle-2">
                    <input type="radio" name="genre" id="circle-3">
                    <span class="gender">Genre</span>
                    <div class="category">
                        <label for="circle-1">
                            <span class="circle one"></span>
                            <span class="male">Homme</span>
                        </label>

                        <label for="circle-2">
                            <span class="circle two"></span>
                            <span class="male">Femme</span>
                        </label>

                        <label for="circle-3">
                            <span class="circle three"></span>
                            <span class="male">Autre</span>
                        </label>
                    </div>
                </div>

                <div class="btn-ins">
                    <input type="submit" name="envoyer" value="S'inscrire">
                </div>
            </form>
        </section>
    </section>
</body>

</html>