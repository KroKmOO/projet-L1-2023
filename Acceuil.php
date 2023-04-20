<?php
session_start();
require("config/commandes.php");

$Produits = afficher();

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


  <!--Accueil-->
  <section class="home">
    <div class="home-text">
      <h1>Trouvez votre propre <br> Bonheur</h1>
      <p>Trouver le rosier de vos rêves <br>Et faites le livrez au plus proche de chez vous</p>
      <a href="catalogue.php" class="btn">Prenez un bouquet</a>
    </div>
  </section>

  <!--bannières-->
  <section class="banner">
    <div class="banner-img">
      <a href="catalogue.php"><img src="ressources/bannierev1.jpg"></a>
    </div>

    <div class="banner-img">
      <a href="catalogue.php"><img src="ressources/bannierev2.jpg"></a>
    </div>

    <div class="banner-img">
      <a href="catalogue.php"><img src="ressources/bannierev3.jpg"></a>
    </div>
  </section>

  <!--nouveaux produits-->
  <section class="nouveaux produits" class="hidden">
    <div class="services2">
      <div class="title">
        <h2>Nouveaux Produits</h2>
      </div>
    </div>
    <div class="new-content">
      <?php foreach ($Produits as $produit) : ?>
        <?php if ($produit->id > 8) continue; ?>
        <div class="row">
          <a href="page_produit.php?pdt=<?= $produit->id ?>"><img src="<?= $produit->image1 ?>"></a>
          <a href="page_produit.php?pdt=<?= $produit->id ?>">
            <h4><?= $produit->nom ?></h4>
          </a>
          <h5><?= $produit->prix ?>€</h5>
          <div class="top">
            <p>New</p>
          </div>
          <div class="bbtn" name="<?= $produit->id ?>">
            <p>Ajouter au panier</p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </section>

  <!--2eme bannières-->
  <section class="banner">
    <div class="banner-img">
      <a href="Presentation.php"><img src="ressources/bann2.jpg"></a>
    </div>

    <div class="banner-img">
      <a href="catalogue.php"><img src="ressources/bann2.2.jpg"></a>
    </div>
  </section>
  <!--nouveaux produits 2-->
  <section class="nouveaux produits">
    <div class="services2">
      <div class="title">
        <h2>Populaire</h2>
      </div>
    </div>
    <div class="new-content">
      <?php foreach ($Produits as $produit) : ?>
        <?php if ($produit->id < 9) continue; ?>
        <div class="row">
          <a href="page_produit.php?pdt=<?= $produit->id ?>"><img src="<?= $produit->image1 ?>"></a>
          <a href="page_produit.php?pdt=<?= $produit->id ?>">
            <h4><?= $produit->nom ?></h4>
          </a>
          <h5><?= $produit->prix ?>€</h5>
          <div class="top">
            <p>Pop</p>
          </div>
          <div class="bbtn">
            <a href="#">Ajouter au panier</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  </section>
  <!--blog-->
  <section class="blog">
    <div class="services2">
      <div class="title">
        <h2>Dernières News</h2>
      </div>
    </div>

    <div class="blog-content">
      <div class="main-box">
        <div class="box-img">
          <a href="https://www.lanouvellerepublique.fr/indre-et-loire/commune/champigny-sur-veude/patrick-cailleau-ou-la-passion-des-rosiers"><img src="ressources/journal1.png"></a>
        </div>
        <div class="in-bxx">
          <div class="in-text">
            <p>21 Avril, 2017</p>
          </div>
          <div class="in-icon">
            <a href="https://www.lanouvellerepublique.fr/indre-et-loire/commune/champigny-sur-veude/patrick-cailleau-ou-la-passion-des-rosiers"><i class='bx bx-message-rounded'></i></a>
          </div>
        </div>
        <h3>La Nouvelle République | Patrick Cailleau ou la passion des rosiers</h3>
      </div>

      <div class="main-box">
        <div class="box-img">
          <a href="https://www.ontestepourvousenpicardie.fr/2018/06/13/prince-albert-ii-de-monaco-etait-aux-journees-de-rose-de-chaalis-video/"><img src="ressources/journal2.png"></a>
        </div>
        <div class="in-bxx">
          <div class="in-text">
            <p>13 juin, 2018</p>
          </div>
          <div class="in-icon">
            <a href="https://www.ontestepourvousenpicardie.fr/2018/06/13/prince-albert-ii-de-monaco-etait-aux-journees-de-rose-de-chaalis-video/"><i class='bx bx-message-rounded'></i></a>
          </div>
        </div>
        <h3>LE PRINCE ALBERT II DE MONACO ÉTAIT AUX JOURNÉES DE LA ROSE DE CHAALIS</h3>
      </div>

      <div class="main-box">
        <div class="box-img">
          <a href="https://www.ontestepourvousenpicardie.fr/2018/06/13/prince-albert-ii-de-monaco-etait-aux-journees-de-rose-de-chaalis-video/"><img src="ressources/journal3.png"></a>
        </div>
        <div class="in-bxx">
          <div class="in-text">
            <p>13 juin, 2018</p>
          </div>
          <div class="in-icon">
            <a href="https://www.ontestepourvousenpicardie.fr/2018/06/13/prince-albert-ii-de-monaco-etait-aux-journees-de-rose-de-chaalis-video/"><i class='bx bx-message-rounded'></i></a>
          </div>
        </div>
        <h3>On teste pour vous en Picardie | Journée de la rose de Chaalis</h3>
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
  <script>
    $(document).ready(function() {
      var inputs = document.querySelectorAll('.bbtn');
      for (var i = 0; i < inputs.length; i++) {
        console.log(inputs[i]);
        // When the value of the input changes…
        inputs[i].addEventListener('click', function(e) {

          //let sejour = $('input[name=sejour]:checked').val();
          let idproduit = this.getAttribute('name');
          console.log(idproduit);

          /*$.ajax({
            url: 'rooming.php',
            type: 'POST',
            data: {
              //sejour: sejour,
              idproduit: idproduit
            },
            success: function(response) {

              list = JSON.parse(response)

              $(datalist).empty();

              list.forEach(function(item) {

                var option = document.createElement('option')

                //<option data-value=</?php echo ($dataRoommate[0]) /?> data-libre="</?php echo ($dataRoommate[4]) /?>"></?php echo ($choix) /?></option>
                option.setAttribute('data-value', item["idRoommate"])
                option.setAttribute('data-libre', item["verifyRoommate"])
                option.setAttribute('value', item["infos"])

                document.getElementById(datalist.id).appendChild(option)
              });

            },
            fail: function(xhr, status, error) {
              console.log(status)
              console.log("fail")
            }
          });*/



        })
      };

    });
  </script>
</body>

</html>