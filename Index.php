<?php
session_start(); // Démarre la session PHP
include_once("Models/Database.php"); // Inclut le fichier Database.php
include_once("Models/Constantes.php"); // Inclut le fichier Constantes.php
include("Models/Utilisateurs.php"); // Inclut le fichier Utilisateurs.php
include("Models/sujets.php"); // Inclut le fichier sujets.php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="Views/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Index</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta3/css/bootstrap.min.css" integrity="sha512-xxx" crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-xxx" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta3/js/bootstrap.min.js" integrity="sha512-xxx" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Navbar -->
  <nav id="nav">
    <ul class="ul_nav ">
      <li class=" logoBanniere"><a class="logo_link" href="#" id="logo"><img class="Banniere" src="image/Frame 2.png" alt="Logo"></a></li>
      <li><a class="Navigation" href="Index.php?Héros#">Héros</a></li>
      <li><a class="Navigation" href="Index.php?Cartes#">Cartes</a></li>
      <li><a class="Navigation" href="Index.php?Forums#">Forums</a></li>
      <li><a class="Navigation" href="Index.php?Profil#">Profil</a></li>
      <li id="loginLi" class="Btnconnexion"><a href="Index.php?Connexion#" id="loginButton">Se connecter</a></li>
    </ul>
  </nav>
  <!-- Navbar Bootstrap <900px-->
  <div class="nav900">
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <a class="nav-link" href="Index.php?Héros#">Héros</a>
        <br>
        <a class="nav-link" href="Index.php?Cartes#">Cartes</a>
        <br>
        <a class="nav-link" href="Index.php?Forums#">Forums</a>
        <br>
        <a class="nav-link" href="Index.php?Profil#">Profil</a></a>
        <br>
        <a class="nav-link" href="Index.php?Connexion#">Connexion</a>
      </div>
    </div>
  </div>
  <?php
  // Vérifie les paramètres GET pour inclure les fichiers correspondants
  if (isset($_GET["Héros"])) {
    include_once("Views/Héros.php"); // Inclut le fichier Héros.php
  } elseif (isset($_GET["Ashe"])) {
    include_once("views/Ashe.php"); // Inclut le fichier Ashe.php
  } elseif (isset($_GET["Ana"])) {
    include_once("views/Ana.php"); // Inclut le fichier Ana.php
  } elseif (isset($_GET["Cartes"])) {
    include_once("views/Cartes.php"); // Inclut le fichier Cartes.php
  } elseif (isset($_GET["Népal"])) {
    include_once("views/Népal.php"); // Inclut le fichier Népal.php
    // } elseif (isset($_GET["Test"])) {
    //   include_once("controllers/Connexionctrl.php");
    //   include_once("views/Test.php");
  } else if (isset($_GET["Inscription"])) {
    include_once("controllers/Inscriptionctrl.php"); // Inclut le fichier Inscriptionctrl.php
    include_once("views/IndexInscription.php"); // Inclut le fichier IndexInscription.php
  } else if (isset($_GET["Connexion"])) {
    include_once("controllers/Connexionctrl.php"); // Inclut le fichier Connexionctrl.php
    include_once("views/IndexConnexion.php"); // Inclut le fichier IndexConnexion.php
  } else if (isset($_GET["Profil"])) {
    include_once("controllers/Profilctrl.php"); // Inclut le fichier Profilctrl.php
    include_once("views/Profil.php"); // Inclut le fichier Profil.php
  } else if (isset($_GET["Modification"])) {
    include_once("controllers/Modificationctrl.php"); // Inclut le fichier Modificationctrl.php
    include_once("views/IndexModification.php"); // Inclut le fichier IndexModification.php
  } else if (isset($_GET["Suppression"])) {
    include_once("controllers/Confirmationsuppctrl.php"); // Inclut le fichier Confirmationsuppctrl.php
    include_once("views/IndexSuppression.php"); // Inclut le fichier IndexSuppression.php
  } else if (isset($_GET["Forums"])) {
    include_once("controllers/Forumsctrl.php"); // Inclut le fichier Forumsctrl.php
    include_once("views/Forums.php"); // Inclut le fichier Forums.php
  } else if (isset($_GET["NouveauSujet"])) {
    include_once("controllers/NouveauSujetctrl.php"); // Inclut le fichier NouveauSujetctrl.php
    include_once("views/NouveauSujet.php"); // Inclut le fichier NouveauSujet.php
  } else if (isset($_GET["Sujet"])) {
    include_once("controllers/Sujetctrl.php"); // Inclut le fichier Sujetctrl.php
    include_once("views/Sujet.php"); // Inclut le fichier Sujet.php
  } else if (isset($_GET["MentionsLégales"])) {
    include_once("views/Mentions_Légales_CGU.php"); // Inclut le fichier Mentions_Légales_CGU.php
  } else{
    include_once("Views/Héros.php"); // Inclut le fichier Héros.php
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
            <li><a class="a_footer" href="index.php?Héros">Héros</a></li>
            <li><a class="a_footer" href="index.php?Cartes">Cartes</a></li>
            <li><a class="a_footer" href="index.php?Forums">Forums</a></li>
            <li><a class="a_footer" href="index.php?MentionsLégales">Mentions Légales</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Contactez-nous</h3>
          <p>Vous pouvez nous contacter à l'adresse e-mail suivante :</p>
          <a class="a_footer" href="mailto:maxime.debrie@hotmail.fr">OWLore.pro@gmail.com</a>
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