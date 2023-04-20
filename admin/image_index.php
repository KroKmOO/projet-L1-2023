<?php
include "connexion_img.php";
session_start();

if (!isset($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../login.php");
}

if (empty($_SESSION['xRttpHo0greL39'])) {
    header("Location: ../login.php");
}

require("../config/commandes.php");

$produits = afficher();

foreach ($_SESSION['xRttpHo0greL39'] as $i) {
    $nom = $i->pseudo;
    $email = $i->email;
}
?>
<?php if (isset($_GET['error'])) : ?>
    <p><?php echo $_GET['error']; ?></p>
<?php endif ?>
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
            <li>
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
            <li class="active">
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
                        <h3>
                            <form method="post">
                                <form action="upload_img.php" method="post" enctype="multipart/form-data" style="margin-top: 150px; justify-content: center; align-items: center">
                                    <input type="file" name="my_image">
                                    <input type="submit" name="submit" class="btn" value="Upload">
                                </form>
                            </form>
                        </h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM images ORDER BY id DESC";
                            $res = mysqli_query($conn,  $sql);

                            if (mysqli_num_rows($res) > 0) {
                                while ($images = mysqli_fetch_assoc($res)) {  ?>
                                    <th>
                                        <div class="new-content">

                                            <div class="row">
                                                <a href=""><img src="uploads/<?= $images['image_url'] ?>" style="padding: 5px; border-radius: 5%;"></a>
                                            </div>
                                            <div class="row">
                                                <h3 style="text-align: center;"><?= $images['image_url'] ?></h3>
                                            </div>
                                        </div>
                                    </th>
                            <?php }
                            } ?>
                        </tbody>

                        </tbody>
                    </table>
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