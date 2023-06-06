<!-- <body>
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
  </div> -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- Formulaire de Connexion -->

<div >
    <h2>Connexion</h2>
    <form method="post" id="loginForm">
      <label for="username">Adresse Email :</label>
      <input type="text"  name="email" placeholder="Votre adresse email">
      <?php
            if (isset($error["email"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error["email"]; ?></p>
                </div>
            <?php } ?><br><br>

      <label for="password">Mot de passe :</label>
      <input type="password"  name="MotDepasse" placeholder="Votre mot de passe">
      <?php
            if (isset($error["MotDepasse"])) { ?>
            <div class="alert alert-danger" role="alert">
                <p><?php echo $error["MotDepasse"]; ?></p>
            </div>
            <?php } ?>

      <input type="submit" value="Connexion" name="Connexion" class="submit connexion" >
      <input type="submit"  value="Créer un compte ?" name="creercompte" class="submit creation">
    </form>
  </div>
</div>
