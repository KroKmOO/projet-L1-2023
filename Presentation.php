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
    rel="stylesheet">
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
            <li><a href="Informations.php">Information</a></li>
            <li><a href="Presentation.php">Presentation</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="h-icons">
            <div><a href="panier.php"><span class="num" id="badge">0</span></a></div>
            <a href="panier.php"><i class='bx bx-shopping-bag'></i></a>
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

    <!--a propos-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="ressources/papa_ruisseau.jpg">
        </div>
        <div class="about-text">
            <h2>Qui sommes-nous ?</h2>
            <h5>
                <span1>Pépiniériste </span1>
                <span2>& rosieriste</span2>
            </h5>
            <p>Nous sommes les Cailleau, passionnés par notre travail de père en fils depuis trois générations.
                Notre exploitation de pépinières et de roseraies s’étend sur 9 ha, aux Terres-Noires,
                à Champigny-sur-Veude, aux confins de l’Indre-et-Loire et de la Vienne.
                Patrick Cailleau a intégré l’exploitation de son père en 1970. <br>

                Titulaire d’une formation de pépiniériste-paysagiste, il a développé la production de plants de fruitiers et d’arbres d’ornement mais,
                sa passion de tout temps – qu’il a su transmettre à son fils Gino – reste le rosier, et plus particulièrement, le rosier parfumé.
                Il en cultive plus de cent-cinquante variétés. <br>
                Gino a débuté à côté de son père il y a 25 ans et dirige désormais l’exploitation.
            </p>
        </div>

        <div class="about-text">
            <h2>Comment sont cultivés nos roses ?</h2>
            <h5>
                <span1>Pépiniériste </span1>
                <span2>& rosieriste</span2>
            </h5>
            <p>Nous plantons et taillons nos greffes pour que des arbustes
                en bon uniforme puissent vous être proposé sur nos divers <a href="Informations.php"> lieux de ventes</a>
                <br>
                Nous produisons pas moins de 20 000 rosiers par an,
                dont vous pourrez, par ailleurs, y retrouver une grande variété sur notre page <a href="catalogue.php">catalogue</a>
            </p>
            <a href="contact.php" class="btn">Nous contacter</a>
        </div>
        <div class="about-img">
            <img src="ressources/haie.jpg">
        </div>
    </section>

    <section>
        <div class="about-text3">
            <h2>Notre Équipe</h2>
        </div>
        <div class="profiles">
            <div class="profile">
                <img src="ressources/papa.jpg" class="profile-img">

                <div class="about-text2">
                    <h2>Gino Cailleau</h2>
                </div>
                <h5>Dirigent actuel</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eveniet soluta hic sunt sit reprehenderit.</p>
            </div>
            <div class="profile">
                <img src="ressources/papi.jpg" class="profile-img">

                <div class="about-text2">
                    <h2>Patrick Cailleau</h2>
                </div>
                <h5>Fondateur</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam facilis sint quod.</p>
            </div>

        </div>

    </section>

    <!--Slider-->
    <section>
        <div class="about-text3">
            <h2>Notre Pépinière</h2>
        </div>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="ressources/pepiniere_1.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="ressources/pepiniere_2.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="ressources/pepiniere_5.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="ressources/pepiniere_4.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </section>

    <!--Divisions-->
    <section>
        <div class="services">
            <div class="title">
                <h2>Autres services</h2>
            </div>
        </div>

        <div class="boxp">
            <div class="card">
                <i class='bx bx-hard-hat'></i>
                <h5>Travailler avec nous</h5>
                <div class="pra">
                    <p>Vous aimeriez travailler dans notre pépinière ?
                        Vous pouvez postuler via
                        le lien ci-dessous ou nous
                        joindre par téléphone.
                    </p>
                    <p style="text-align: center;">
                        <a class="btn" href="contact.php">Contact</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class='bx bxs-user-account'></i>
                <h5>Renseignement ?</h5>
                <div class="pra">
                    <p>Contactez nous par téléphone
                        afin d'obtenir des renseignements.
                        Consultez notre
                        notre page contact.
                    </p>
                    <p style="text-align: center;">
                        <a class="btn" href="contact.php">Contact</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class='bx bx-package'></i>
                <h5>Livraison</h5>
                <div class="pra">
                    <p>Vous pouvez obtenir
                        des informations complémentaires
                        sur nos modalités
                        de livraison via le bouton ci-dessous.
                        <br>

                    </p>
                    <p style="text-align: center;">
                        <a class="btn" href="Informations.php">Information</a>
                    </p>
                </div>
            </div>
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