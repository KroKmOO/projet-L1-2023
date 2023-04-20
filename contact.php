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
    <script src="https://kit.fontawesome.com/3aad46f9f1.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!--navbar-->
        <a href="Acceuil.php" class="logo">
            <img src="ressources/logofinal.png" alt="">
        </a>
        <ul class="navbar">
            <li><a href="Acceuil.php">Accueil</a></li>
            <li><a href="catalogue.php">Catalogue</a></li>
            <li><a href="Informations.php">Informations</a></li>
            <li><a href="Presentation.php">Presentation</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="h-icons">
            <a href="#"><i class='bx bx-shopping-bag'></i></a>
            <a href="#"><i class='bx bxs-heart'></i></a>
            <div class="action3">
                <div class="profile3" onclick="menuToggle();">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="menu3">
                    <h3>Voici votre <br><span>Compte Utilisateur</span></h3>
                    <ul>
                        <li><a href="connexion2.php"><i class='bx bx-user-circle'></i>Connexion</a></li>
                        <li><a href="#"><i class='bx bxs-edit'></i>Modifier</a></li>
                        <li><a href="#"><i class='bx bx-envelope'></i>Boîte Mail</a></li>
                        <li><a href="#"><i class='bx bx-cog'></i>Réglage</a></li>
                        <li><a href="#"><i class='bx bx-help-circle'></i>Aide</a></li>
                        <li><a href="admin/destroy.php"><i class='bx bx-log-out-circle'></i>Deconnexion</a></li>
                    </ul>
                </div>
            </div>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!--Contact/num de tel-->
    <section class="top-marg-contact">
        <div class="services2">
            <div class="title">
                <h2>Nos Coordonnées</h2>
            </div>
        </div>
        <div class="boxp">
            <div class="card3">
                <div class="transparent">
                    <i class='bx bxs-phone'></i>
                    <h5>Nous joindre:</h5>
                    <div class="pra3">
                        <p>Numéros de téléphone: <br>
                            Gino Cailleau: 06 81 79 25 98 <br>
                            Patrick Cailleau: 06 86 88 22 87
                        </p>
                    </div>
                </div>
            </div>

            <div class="boxp">
                <div class="card3">
                    <div class="transparent">
                        <i class='bx bxs-leaf'></i>
                        <h5>Adresses: </h5>
                        <div class="pra3">
                            <p><span>Pépinière:</span> Les Terres Noires, <br> Route de Pouant 37120 Assay <br>
                                <span>Marché de Tours (Samedis):</span> <br> boulevard béranger, Tours <br>
                                <span>Marché d'Amboise (Dimanches):</span> <br> Place du marché, Amboise <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="boxp">
                <div class="card3">
                    <div class="transparent">
                        <i class='bx bxs-calendar'></i>
                        <h5>Horaires: </h5>
                        <div class="pra3">
                            <p>✅Lun: 9h-12h30 et 14h-18h30 <br>
                                ✅Mar: 9h-12h30 et 14h-18h30 <br>
                                ✅Mer: 9h-12h30 et 14h-18h30 <br>
                                ✅Jeu: 9h-12h30 et 14h-18h30 <br>
                                ✅Ven: 9h-12h30 et 14h-18h30 <br>
                                ❌Sam: fermé <br>
                                ❌Dim: fermé <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Formulaire-->

    <section class="contact2">
        <div class="contact2-form">
            <div class="services2">
                <div class="title">
                    <h2>Contactez Nous</h2>
                </div>
            </div>
            <p>Merci d'utiliser ce formulaire pour des demandes autres que des
                renseignements,<br> pour cela veuillez nous joindre par téléphone</p>
            <form action="">
                <input type="" placeholder="Votre Nom">
                <input type="email" name="email" id="" placeholder="email" required>
                <input type="" placeholder="Ecrire un objet" required>
                <textarea name="" id="" cols="30" rows="10" placeholder="Votre message" required>

                    </textarea>
                <input type="submit" name="" value="Soumettre" class="btn">
            </form>
        </div>

        <div class="contact2-img">
            <img src="ressources/background-test9.jpg">
        </div>

    </section>

    <!---contact section--->
    <section class="contact">
        <div class="contact-box">
            <h4>MON COMPTE</h4>
            <li><a href="#">Mon compte</a></li>
            <li><a href="contact.php">Nous contacter</a></li>
            <li><a href="#">Mon Panier</a></li>
            <li><a href="#">Liste de souhait</a></li>
        </div>

        <div class="contact-box">
            <h4>LIENS RAPIDES</h4>
            <li><a href="Informations.php">Lieux de ventes</a></li>
            <li><a href="#">Suivis de commande</a></li>

        </div>

        <div class="contact-box">
            <h4>INFORMATION</h4>
            <li><a href="Informations.php">Page Information</a></li>
            <li><a href="Presentation.php">Page Présentation</a></li>
            <li><a href="Informations.php">Livraison</a></li>
        </div>

        <div class="contact-box">
            <h4>SERVICE CLIENT</h4>
            <li><a href="#">Aide et Contactez-nous</a></li>
            <li><a href="Acceuil.php">Boutique en ligne</a></li>
        </div>

        <div class="contact-box">
            <h4>Pépinière Cailleau</h4>
            <h5>Restez en contact avec nous</h5>
            <div class="social">
                <a href="https://www.facebook.com/people/Pépinières-Cailleau/100070915922799/"><i class='bx bxl-facebook'></i></a>
            </div>
        </div>

    </section>

    <!--scroll-->
    <a href="#" class="scroll-top"><i class='bx bx-chevrons-up'></i></a>

    <div class="end-text">
        <p>© 2023 - Pepiniere Cailleau</p>
    </div>

    <!--liens javascipt-->
    <script src="script2.js"></script>
    <!--pour déplier et replier le sous menu compte-->
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu3');
            toggleMenu.classList.toggle('active')
        }
    </script>
</body>

</html>