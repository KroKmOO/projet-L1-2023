<?php
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
                    <i class='bx bxs-message-alt-add' ></i>
					<span class="text">Nouveau</span>
				</a>
			</li>
			<li>
				<a href="supprimer.php">
                    <i class='bx bxs-message-alt-x' ></i>
					<span class="text">Supp</span>
				</a>
			</li>
			<li>
				<a href="image_index.php">
                    <i class='bx bxs-image-add' ></i>
					<span class="text">Images</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
                    <i class='bx bxs-user-circle' ></i>
					<span class="text">Connecté en tant que : <?= $nom ?></span>
				</a>
			</li>
			<li>
				<a href="destroy.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Chercher...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="../ressources/imgicon.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Produits</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
                            <tr>
                                <th >id</th>
                                <th >image</th>
                                <th >nom</th>
                                <th >prix</th>
                                <th >Description</th>
                                <th >Editer</th>
                            </tr>
						</thead>
						<tbody>
                            <?php foreach ($produits as $produit) : ?>
                                    <tr>
                                        <th scope="row"><?= $produit->id ?></th>
                                        <td>
                                            <?php $img = $produit->image1;
                                            $img = substr($img, strlen('admin/')); ?>

                                            <a href="page_produit2.php?pdt=<?= $produit->id ?>"><img src="<?= $img ?>" style="width: 25%;"></a>
                                        </td>
                                        <td><?= $produit->nom ?></td>
                                        <td style="font-weight: bold; color: green;"><?= $produit->prix ?>€</td>
                                        <td><?= substr($produit->description, 0, 100); ?>...</td>
                                        <td><a href="editer.php?id=<?= $produit->id ?>"><i class='bx bxs-pencil'></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
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