<?php
require("config/commandes.php");

include("con_panier.php");


if (isset($_POST['input'])) {
    
    $input = $_POST['input'];

    $query = "SELECT * FROM produits WHERE nom LIKE '{$input}%' OR type LIKE '{$input}%' OR appv LIKE '{$input}%' OR couleur LIKE '{$input}%' limit 10";
   
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
?>
        <section class="nouveaux produits" class="hidden">
            <div class="new-content">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $image = $row['image1'];
                    $nom = $row['nom'];
                    $prix = $row['prix'];
                    $Desc = $row['description'];
                    $type = $row['type'];

                ?>

                    <div class="row">
                        <a href="page_produit.php?pdt=<?= $id ?>"><img src="<?= $image ?>"></a>
                        <a href="page_produit.php?pdt=<?= $id ?>">
                            <h4><?= $nom ?></h4>
                        </a>
                        <h5><?= $prix ?>€</h5>
                        <div class="top">
                            <p>find!</p>
                        </div>
                        <div class="bbtn">
                            <a data-id="<?php echo $id; ?>">Ajouter au panier</a>
                        </div>
                    </div>


                <?php
                }

                ?>
            </div>
        </section>


<?php
    } else {
        echo '<div class="card32"><h5>Aucun produit a été trouvé</h5></div>';
    }
}
?>
<style>
    .new-content {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		transition: all .50s ease;
	}

	.row {
		flex: 0 0 calc(25% - 20px);
		transition: all .50s ease;
	}
</style>