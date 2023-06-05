<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="test.css">
  <title>Document</title>
</head>

<body>
  <div class="image-text">
    <img class="img_background" src="image/1600_Ashe.jpg" alt="Ashe">
    <div class="overlay">
      <h1>Ashe</h1>
      <p>Calculatrice, ambitieuse et respectée dans le milieu de la pègre, Ashe est la cheffe du gang Deadlock Rebels.</p>
      <div class="icones">
        <img src="image/1563473137_837161.png">
        <p>Dégats</p>
        <img src="image/227.jpg">
        <p>Gorge Deadlock, Arizona, États-Unis</p>
      </div>
    </div>
  </div>



  <!-- <section class="row">
    <h1 class="linked-characters">Personnages liés</h1>

    <div class="link-container">
      <a href="http://localhost/PHP/Evaluation/Index.php?Ashe#">
        <div class="placeholder-container">
          <div class="placeholder-circle"> <img class="" alt="Image du personnage 1" src="image/8dc2a024c9b7d95c7141b2ef065590dbc8d9018d12ad15f76b01923986702228.png">
          </div>
        </div>
      </a>
    </div>

    <div class="link-container">
      <a href="lien_vers_personnage_2.html">
        <div class="placeholder-container">
          <div class="placeholder-circle"> <img class="" alt="Image du personnage 2" src="image/4edf5ea6d58c449a2aeb619a3fda9fff36a069dfbe4da8bc5d8ec1c758ddb8dc (1).png">
          </div>
        </div>
      </a>
    </div>

    <div class="link-container">
      <a href="lien_vers_personnage_3.html">
        <div class="placeholder-container">
          <div class="placeholder-circle"> <img class="" alt="Image du personnage 3" src="image/aecd8fa677f0093344fab7ccb7c37516c764df3f5ff339a5a845a030a27ba7e0.png">
          </div>
        </div>
      </a>
    </div>

    <div class="link-container">
      <a href="lien_vers_personnage_4.html">
        <div class="placeholder-container">
          <div class="placeholder-circle"><img class="" alt="Image du personnage 4" src="image/8dc2a024c9b7d95c7141b2ef065590dbc8d9018d12ad15f76b01923986702228.png">
          </div>
        </div>
      </a>
    </div>

    <div class="link-container">
      <a href="lien_vers_personnage_5.html">
        <div class="placeholder-container">
          <div class="placeholder-circle"><img class="" alt="Image du personnage 5" src="image/8dc2a024c9b7d95c7141b2ef065590dbc8d9018d12ad15f76b01923986702228.png">
          </div>
        </div>
      </a>
    </div>
    
  </section> -->


  <div class="modal-content" id="loginContent">
    <h2>Connexion</h2>
    <form method="post" id="loginForm">
      <label for="username">Adresse Email :</label>
      <input type="text" id="email" name="email" placeholder="Votre adresse email">
      <?php
            if (isset($error["email"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error["email"]; ?></p>
                </div>
            <?php } ?><br><br>

      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="Motdepasse" placeholder="Votre mot de passe">
      <?php
            if (isset($error["MotDepasse"])) { ?>
                <p><?php echo $error["MotDepasse"]; ?></p>
            <?php } ?>

      <input type="submit" value="Connexion" name="Connexion" class="submit connexion" >
      <input type="button" class="submit creation" value="Créer un compte ?">
    </form>
  </div>
</div>

<div >
    <h2>Inscription</h2>
    <form method="post" id="loginForm">
      <label for="username">Adresse Email :</label>
      <input type="text" id="email" name="email" placeholder="Votre adresse email">
      <?php
            if (isset($error["email"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error["email"]; ?></p>
                </div>
            <?php } ?><br><br>

      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="Motdepasse" placeholder="Votre mot de passe">
      <?php
            if (isset($error["MotDepasse"])) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?php echo $error["MotDepasse"]; ?></p>
            </div>
            <?php } ?>

      <input type="submit" value="Connexion" name="Connexion" class="submit connexion" >
      <input type="button" class="submit creation" value="Créer un compte ?">
    </form>
  </div>
</div>


</body>

</html>