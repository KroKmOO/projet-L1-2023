<?php
session_start();

require("../config/commandes.php");

if (!isset($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../login.php");
}

if (empty($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../login.php");
}

if (!isset($_GET['id'])) {
    header("Location: afficher.php");
}

if (empty($_GET['id']) or !is_numeric($_GET['id'])) {
    header("Location: afficher.php");
}

if (isset($_GET['id'])) {

    if (!empty($_GET['id']) or is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $leProduit = afficherUnProduit($id);
    }
}

foreach ($_SESSION['xRttpHo0greL39'] as $i) {
    $nom = $i->pseudo;
    $email = $i->email;
}

?>

<?php

if (isset($_POST['valider'])) {

    if (!empty($_POST['image1']) and !empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['desc'])) {
        $image1 = htmlspecialchars(strip_tags($_POST['image1']));
        $image2 = htmlspecialchars(strip_tags($_POST['image2']));
        $image3 = htmlspecialchars(strip_tags($_POST['image3']));
        $image4 = htmlspecialchars(strip_tags($_POST['image4']));
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
        $prix = htmlspecialchars(strip_tags($_POST['prix']));
        $desc = htmlspecialchars(strip_tags($_POST['desc']));
        $appv = htmlspecialchars(strip_tags($_POST['appv']));
        $type = htmlspecialchars(strip_tags($_POST['type']));
        $obtenteur = htmlspecialchars(strip_tags($_POST['obtenteur']));
        $couleur = htmlspecialchars(strip_tags($_POST['couleur']));
        $Dispo = htmlspecialchars(strip_tags($_POST['Dispo']));


        if (isset($_GET['id'])) {

            if (!empty($_GET['id']) or is_numeric($_GET['id'])) {
                $id = $_GET['id'];
            }
        }

        try {
            modifier($image1, $image2, $image3, $image4, $nom, $prix, $desc, $id, $appv, $type, $obtenteur, $couleur, $Dispo);
            header('Location: afficher.php');
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
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
            <img src="../ressources/logofinal - Copie.png" style="width: 150px; margin-top : 25px; margin-left: 5px;">
        </a>
        <ul class="side-menu top">
            <li>
                <a href="afficher.php">
                    <i class='bx bxs-shopping-bags'></i>
                    <span class="text">Produits</span>
                </a>
            </li>
            <li class="active">
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
                    <div class="todo">
                        <div class="head">
                            <h3>Modifier un produit : <?php foreach ($leProduit as $produit) : ?> <?= $produit->nom ?> <?php endforeach; ?></h3>
                            <i class='bx bx-plus'></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <ul class="todo-list">
                            <?php foreach ($leProduit as $produit) : ?>
                                
                                <form method="post">
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">L'image du produit</label>
                                            <input type="name" class="form-control" name="image1" value="<?= $produit->image1 ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">L'image du produit2</label>
                                            <input type="name" class="form-control" name="image2" value="<?= $produit->image2 ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">L'image du produit3</label>
                                            <input type="name" class="form-control" name="image3" value="<?= $produit->image3 ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">L'image du produit4</label>
                                            <input type="name" class="form-control" name="image4" value="<?= $produit->image4 ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
                                            <input type="text" class="form-control" name="nom" value="<?= $produit->nom ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Appelation de variété</label>
                                            <input type="text" class="form-control" name="appv" value="<?= $produit->appv ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Type</label>
                                            <input type="text" class="form-control" name="type" value="<?= $produit->type ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Obtenteur</label>
                                            <input type="text" class="form-control" name="obtenteur" value="<?= $produit->obtenteur ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Couleur</label>
                                            <input type="text" class="form-control" name="couleur" value="<?= $produit->couleur ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Disponibilité</label>
                                            <input type="text" class="form-control" name="Dispo" value="<?= $produit->Dispo ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Prix</label>
                                            <input type="number" class="form-control" name="prix" value="<?= $produit->prix ?>" required>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <li class="completed">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Description</label>
                                            <textarea class="form-control" name="desc" required><?= $produit->description ?></textarea>
                                        </div>
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </li>
                                    <button type="submit" name="valider" class="btn">Enregistrer</button>
                                </form>
                            <?php endforeach; ?>
                        </ul>
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
</body>

</html>