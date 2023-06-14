<?php
session_start();
include_once("Models/Database.php");
include_once("Models/Constantes.php");
include("Models/Utilisateurs.php");
include("Models/sujets.php")

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="Views/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Index</title>
</head>

<body>
  <!-- Navbar -->
  <!-- <nav id="nav">
    <ul class="ul_nav">
      <li class="logoBanniere"><a class="logo_link" href="#"><img class="Banniere" src="image/Frame 2.png" alt="Logo"></a></li>
      <li><a class="Navigation" href="http://localhost/PHP/Evaluation/Index.php?Héros#">Héros</a></li>
      <li><a class="Navigation" href="http://localhost/PHP/Evaluation/Index.php?Cartes#">Cartes</a></li>
      <li><a class="Navigation" href="#">Forums</a></li>
      <li class="Btnconnexion"><a href="#">Se connecter</a></li>
    </ul>
  </nav> -->

  <!-- Navbar -->
  <nav id="nav">
    <ul class="ul_nav">
      <li class="logoBanniere"><a class="logo_link" href="#"><img class="Banniere" src="image/Frame 2.png" alt="Logo"></a></li>
      <li><a class="Navigation" href="Index.php?Héros#">Héros</a></li>
      <li><a class="Navigation" href="Index.php?Cartes#">Cartes</a></li>
      <li><a class="Navigation" href="Index.php?Forums#">Forums</a></li>
      <li id="loginLi" class="Btnconnexion"><a href="Index.php?Connexion#" id="loginButton">Se connecter</a></li>
    </ul>
  </nav>






  <?php

  if (isset($_GET["Héros"])) {
    // include_once("Controllers/ctrl_Héros.php");
    include_once("Views/Héros.php");
  } elseif (isset($_GET["Ashe"])) {
    include_once("views/Ashe.php");
  } elseif (isset($_GET["Cartes"])) {
    include_once("views/Cartes.php");
  } elseif (isset($_GET["Népal"])) {
    include_once("views/Népal.php");
    // } elseif (isset($_GET["Test"])) {
    //   include_once("controllers/Connexionctrl.php");
    //   include_once("views/Test.php");
  } else if (isset($_GET["Inscription"])) {
    include_once("controllers/Inscriptionctrl.php");
    include_once("views/IndexInscription.php");
  } else if (isset($_GET["Connexion"])) {
    include_once("controllers/Connexionctrl.php");
    include_once("views/IndexConnexion.php");
  } else if (isset($_GET["Profil"])) {
    include_once("controllers/Profilctrl.php");
    include_once("views/Profil.php");
  } else if (isset($_GET["Modification"])) {
    include_once("controllers/Modificationctrl.php");
    include_once("views/IndexModification.php");
  } else if (isset($_GET["Suppression"])) {
    include_once("controllers/Confirmationsuppctrl.php");
    include_once("views/IndexSuppression.php");
  } else if (isset($_GET["Forums"])) {
    include_once("controllers/Forumsctrl.php");
    include_once("views/Forums.php");
  } else if (isset($_GET["NouveauSujet"])) {
    include_once("controllers/NouveauSujetctrl.php");
    include_once("views/NouveauSujet.php");
  } else if (isset($_GET["Sujet"])) {
    include_once("controllers/Sujetctrl.php");
    include_once("views/Sujet.php");
  } 
  

  ?>

  <!-- Banniere bas de page -->
  <section>
    <div>
      <img class="header-image img-fluid" src="image/thumb_4905_post_big.jpg" alt="Ow-">

    </div>

  </section>

  <!-- Création Footer -->
  <footer class="container-fluid">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h3>A propos de nous</h3>
          <p>Nous sommes un site fan d'Overwatch qui fournit des informations et des actualités sur l'histoire
            du jeu. Notre mission est de rassembler les joueurs passionnés d'Overwatch et de les aider à
            mieux connaître l'histoire du jeu et de ses personnages.</p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 classLienFooter">
          <h3 class="liensutiles">Liens utiles</h3>
          <ul>

            <li><a class="a_footer" href="#">Héros</a></li>
            <li><a class="a_footer" href="#">Cartes</a></li>
            <li><a class="a_footer" href="#">Forums</a></li>
            <li><a class="a_footer" href="#">Mentions Légales</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Contactez-nous</h3>
          <p>Vous pouvez nous contacter à l'adresse e-mail suivante :</p>
          <a class="a_footer" href="OWLore.pro@gmail.com">OWLore.pro@gmail.com</a>
        </div>
        <div class="col-md-4">
          <a href="#"><img class="logoFooter" src="image/Frame 2.png" alt="Logo"></a>
        </div>
        <div class="col-md-4">
          <p>Tous droits réservés</p>
          <div class="row socials">
            <a class="social" href="https://www.facebook.com/" target="_blank"><img src="image/Facebook.png" alt="Facebook"></a>
            <a class="social" href="https://www.twitter.com/" target="_blank"><img src="image/95039-icones-gratuites-des-medias-sociaux-gratuit-vectoriel.png" alt="Twitter"></a>
            <a class="social" href="https://www.discord.com/" target="_blank"><img src="image/2111363.png" alt="Discord"></a>
          </div>
        </div>
      </div>
    </div>

  </footer>

  <a href="#" class="back-to-top">
    <img src="image/output-onlinepngtools.png" alt="Flèche vers le haut" class="arrow">
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
<script type="text/javascript" src="script.js"></script>

</html>