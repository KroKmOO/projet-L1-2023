<?php
session_start();

if (!isset($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../login.php");
}

if (empty($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../login.php");
}
require("../config/commandes.php");

$Produits = afficher();

if (isset($_GET['pdt'])) {

    if (!empty($_GET['pdt']) or is_numeric($_GET['pdt'])) {
        $id = $_GET['pdt'];
    }
}
foreach ($_SESSION['xRttpHo0greL39'] as $i) {
    $nom = $i->pseudo;
    $email = $i->email;
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>PC - Interface admin</title>


    <link rel="icon" href="image_2023-03-04_114640565-removebg-preview.png" type="image/x-icon">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="afficher.php" class="brand">
            <img src="../ressources/image_2023-03-04_114640565-removebg-preview.png" style="width: 57px; margin-top : 25px; ">
            <img src="../ressources/logofinal - Copie.png" style="width: 150px; margin-top : 25px;">
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="afficher.php">
                    <i class='bx bxs-shopping-bags'></i>
                    <span class="text">Produits</span>
                </a>
            </li>
            <li>
                <a href="index2.php">
                    <i class='bx bxs-message-alt-add'></i>
                    <span class="text">Nouveau</span>
                </a>
            </li>
            <li>
                <a href="supprimer.php">
                    <i class='bx bxs-message-alt-x'></i>
                    <span class="text">Supp</span>
                </a>
            </li>
            <li>
                <a href="image_index.php">
                    <i class='bx bxs-image-add'></i>
                    <span class="text">Images</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Connecté en tant que : <?= $nom ?></span>
                </a>
            </li>
            <li>
                <a href="destroy.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Deconnexion</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Chercher...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="../ressources/image_2023-03-04_114640565-removebg-preview.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Visualisation</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <div class="card2-wrapper">
                        <div class="card2">
                            <!-- card left -->
                            <div class="product2-imgs">
                                <?php foreach ($Produits as $produit) {
                                    if ($produit->id == $id) { ?>
                                        <?php $img1 = $produit->image1;
                                        $img1 = substr($img1, strlen('admin/')); ?>
                                        <?php $img2 = $produit->image2;
                                        $img2 = substr($img2, strlen('admin/')); ?>
                                        <?php $img3 = $produit->image3;
                                        $img3 = substr($img3, strlen('admin/')); ?>
                                        <?php $img4 = $produit->image4;
                                        $img4 = substr($img4, strlen('admin/')); ?>
                                        <div class="img2-display">
                                            <div class="img2-showcase">
                                                <img src="<?= $img1 ?>" alt="rose image">
                                                <img src="<?= $img2 ?>" alt="rose2 image">
                                                <img src="<?= $img3 ?>" alt="rose3 image">
                                                <img src="<?= $img4 ?>" alt="rose4 image">
                                            </div>
                                        </div>
                                        <div class="img2-select">
                                            <div class="img2-item">
                                                <a href="#" data-id="1">
                                                    <img src="<?= $img1 ?>" alt="rose image">
                                                </a>
                                            </div>
                                            <div class="img2-item">
                                                <a href="#" data-id="2">
                                                    <img src="<?= $img2 ?>" alt="rose2 image">
                                                </a>
                                            </div>
                                            <div class="img2-item">
                                                <a href="#" data-id="3">
                                                    <img src="<?= $img3 ?>" alt="rose3 image">
                                                </a>
                                            </div>
                                            <div class="img2-item">
                                                <a href="#" data-id="4">
                                                    <img src="<?= $img4 ?>" alt="rose4 image">
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
                                    <div class="btn">
                                        <a >Ajouter au panier <i class="fas fa-shopping-cart"></i></a>
                                    </div>
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
                </div>

            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <!--liens javascipt-->
    <script src="../script2.js"></script>
    <script src="script.js"></script>
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
</body>

</html>
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

</body>

</html>