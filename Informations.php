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

    <!--informations marché-->

    <section class="top-marg-contact">
        <div class="services2">
            <div class="title">
                <h2>Marchés</h2>
            </div>
        </div>
        <div class="boxp">
            <div class="card3">
                <div class="transparent">
                    <i class='bx bx-store'></i>
                    <h5>Marché de Tours</h5>
                    <div class="pra3">
                        <p><big> Tous les samedis <br>
                                de 8h à 19h <br>
                                au boulevard Béranger</big>
                        </p>
                    </div>
                </div>
            </div>

            <div class="boxp">
                <div class="card3">
                    <div class="transparent">
                        <i class='bx bx-store'></i>
                        <h5>Marché d'Amboise </h5>
                        <div class="pra3">
                            <p><big> Tous les dimanches <br>
                                    de 8h à 13h30 <br>
                                    sur les bords de Loire</big>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Slider-->
    <section>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="ressources/marches_tours1.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="ressources/marches_tours2.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="ressources/marches_amboise1.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="ressources/marches_amboise2.jpg" style="width:100%">
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

    <!--Expositions-->

    <div class="services2">
        <div class="title">
            <h2>Expositions</h2>
        </div>
    </div>
    <section class="about" id="about">
        <div class="about-img">
            <img src="ressources/fete_de_la_rose.jpg">
        </div>
        <div class="about-text">
            <h2>Fête <br> de la <br> rose</h2>
            <p>à Saint Yrieux sous Aixe <br>
                le 1er week-end de juin.
            </p>
            <a href="https://goo.gl/maps/bvG9TNcx5xBArUux7" class="btn">Google Maps</a>
            <a href="https://www.saint-yrieix-sous-aixe.fr/la-fete-de-la-rose-saintyrieixsousaixe-87-hautevienne_fr.php" class="btn">Fête de la rose</a>
        </div>

        <div class="about-text">
            <h2>Festival <br> de la <br> Rose</h2>
            <p>à Chédigny <br>
                le dernier week-end de mai
            </p>
            <a href="https://goo.gl/maps/rdSrUFs4UeBJrDQ7A" class="btn">Google maps</a>
            <a href="https://www.jardins-de-france.com/agenda/festival-des-roses-chedigny" class="btn">Festival de La rose</a>
        </div>
        <div class="about-img">
            <img src="ressources/festival_de_la_rose.jpg">
        </div>
    </section>

    <div class="services2">
        <div class="title">
            <h2>Livraisons</h2>
        </div>
    </div>
    <section>
        <div>
            <p>à venir</p>
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