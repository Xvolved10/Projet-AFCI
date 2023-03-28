<?php
session_start();
include_once("models/Constantes.php");
include_once("models/Database.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Index</title>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <ul class="ul_nav">
            <li class="logoBanniere"><a href="#"><img class="Banniere" src="image/Frame 2.png" alt="Logo"></a></li>
            <li><a class="Navigation" href="#">Héros</a></li>
            <li><a class="Navigation" href="#">Cartes</a></li>
            <li><a class="Navigation" href="#">Forums</a></li>
            <li class="Btnconnexion"><a href="#" >Se connecter</a></li>
        </ul>
    </nav>
    
<?php
if(isset($_GET["Accueil"])){
    include_once("Controllers/ctrl_Accueil.php");
    include_once("Views/Accueil.php");
}elseif(isset($_GET["Ashe"])){
  include_once("controllers/ctrl_Ashe.php");
  include_once("views/Ashe.php");
}elseif(isset($_GET["Test"])){
  include_once("views/Test.php");
}



?>

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
        <li><a href="#"><img class="logoFooter" src="image/Frame 2.png" alt="Logo"></a></li>
      </div>
      <div class="col-md-4" >
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    <link href="style.css" rel="stylesheet">
    </body>
    <script type="text/javascript" src="script.js"></script>
</html>    