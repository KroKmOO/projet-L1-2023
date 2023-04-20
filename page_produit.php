<?php

require("config/commandes.php");

$Produits = afficher();

if (isset($_GET['pdt'])) {

    if (!empty($_GET['pdt']) or is_numeric($_GET['pdt'])) {
        $id = $_GET['pdt'];
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
            <li><a href="Informations.php">Information</a></li>
            <li><a href="Presentation.php">Presentation</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="h-icons">
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

    <!--Produit-->
    <div class="card2-wrapper">
        <div class="card2">
            <!-- card left -->
            <div class="product2-imgs">
                <?php foreach ($Produits as $produit) {
                    if ($produit->id == $id) { ?>
                        <div class="img2-display">
                            <div class="img2-showcase">
                                <img src="<?= $produit->image1 ?>" alt="rose image">
                                <img src="<?= $produit->image2 ?>" alt="rose2 image">
                                <img src="<?= $produit->image3 ?>" alt="rose3 image">
                                <img src="<?= $produit->image4 ?>" alt="rose4 image">
                            </div>
                        </div>
                        <div class="img2-select">
                            <div class="img2-item">
                                <a href="#" data-id="1">
                                    <img src="<?= $produit->image1 ?>" alt="rose image">
                                </a>
                            </div>
                            <div class="img2-item">
                                <a href="#" data-id="2">
                                    <img src="<?= $produit->image2 ?>" alt="rose2 image">
                                </a>
                            </div>
                            <div class="img2-item">
                                <a href="#" data-id="3">
                                    <img src="<?= $produit->image3 ?>" alt="rose3 image">
                                </a>
                            </div>
                            <div class="img2-item">
                                <a href="#" data-id="4">
                                    <img src="<?= $produit->image4 ?>" alt="rose4 image">
                                </a>
                            </div>
                        </div>
            </div>
            <!-- card right -->
            <div class="product2-content">
                <h2 class="product2-title"><?= $produit->nom ?></h2>
                <a href="#" class="product2-link">Appellation de variété: <?= $produit->appv ?></a>

                <div class="product2-price">
                    <p class="last-price">Type: <?= $produit->type ?></p>
                    <p class="new-price">Obtenteur: <?= $produit->obtenteur ?></p>
                </div>

                <div class="product2-detail">
                    <h2>À propos de cet article: </h2>
                    <p><?= $produit->description ?></p>
                    <ul>
                        <li>Couleur/Forme: <span><?= $produit->couleur ?></span></li>
                        <li>Disponible: <span><?= $produit->Dispo ?></span></li>
                        <li>Zone de livraison: <span>De Chinon à Blois</span></li>
                        <li>Coût de livraison: <span>Variable</span>
                        <li>Prix: <span><?= $produit->prix ?> €</span></li>
                    </ul>
                </div>

                <div class="purchase2-info">
                    <input type="number" min="0" value="1">
                    <button type="button" class="btn">
                        <a href="panier.php?pdt=<?= $produit->id ?>">Ajouter au panier <i class="fas fa-shopping-cart"></i></a>
                    </button>
                </div>

                <div class="social2-links">
                    <p>Partager sur: </p> <br>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
        <?php }
                } ?>
            </div>
        </div>

    </div>


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
    <script>
        const imgs = document.querySelectorAll('.img2-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img2-showcase img:first-child').clientWidth;

            document.querySelector('.img2-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
    <!--pour déplier et replier le sous menu compte-->
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu3');
            toggleMenu.classList.toggle('active')
        }
    </script>
</body>

</html>