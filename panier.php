<?php
session_start();
include_once "con_panier.php";


//supprimer les produits
//si la variable del existe
if (isset($_GET['del'])) {
    $id_del = $_GET['del'];
    //suppression
    unset($_SESSION['panier'][$id_del]);
    $con->query("DELETE FROM cart WHERE product_id = $id_del");
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
    <!--panier-->
    <div class="services2">
        <div class="title2">
            <h2>Votre Panier</h2>
        </div>
    </div>
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <tr>
                <?php
                $total = 0;
                // liste des produits
                //récupérer les clés du tableau session
                $ids = array_keys($_SESSION['panier']);
                //s'il n'y a aucune clé dans le tableau
                if (empty($ids)) {
                    ?><div class="card32">
                        <h5>Votre panier est vide</h5>
                    </div> <?php
                } else {
                    //si oui 
                    ?><div class="card32">
                        <h5>Voici vos produits</h5>
                    </div> <?php
                    $products = mysqli_query($con, "SELECT * FROM produits WHERE id IN (" . implode(',', $ids) . ")");

                    //lise des produit avec une boucle foreach
                    foreach ($products as $produits) :
                        //calculer le total ( prix unitaire * quantité) 
                        //et aditionner chaque résutats a chaque tour de boucle
                        $total = $total + $produits['prix'] * $_SESSION['panier'][$produits['id']];
                ?>
            <tr>
                <td><img src="<?= $produits['image1'] ?>"></td>
                <td><?= $produits['nom'] ?></td>
                <td><?= $produits['prix'] ?>€</td>
                <td><?= $_SESSION['panier'][$produits['id']]; // Quantité
                    ?></td>
                <td><a href="panier.php?del=<?= $produits['id'] ?>" class="remove"><i class='bx bxs-trash'></i></a></td>
            </tr>

    <?php endforeach;
                } ?>
    </tr>
        </table>
    </div>
    <div class="total-prix">
        <table>
            <tr>
                <td>Sous-Total</td>
                <td><?= $total ?>€</td>
            </tr>
            <tr>
                <td>Taxes</td>
                <td><?= $total * 0.2 ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?= $total + $total * 0.2 ?>€</td>
            </tr>
        </table>
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
    <!--pour déplier et replier le sous menu compte-->
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu3');
            toggleMenu.classList.toggle('active')
        }
    </script>
    <!--pour éviter de recharger la page-->
    <script>
        var product_id = document.getElementsByClassName("bbtn");
        for (var i = 0; i < product_id.length; i++) {
            product_id[i].addEventListener("click", function(event) {
                var target = event.target;
                var id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var data = JSON.parse(this.responseText);
                        target.innerHTML = data.in_cart;
                        document.getElementById("badge").innerHTML = data.num_cart + 1;
                    }
                }
                xml.open("GET", "con_panier.php?id=" + id, true)
                xml.send();
            })
        }
    </script>

</body>

</html>