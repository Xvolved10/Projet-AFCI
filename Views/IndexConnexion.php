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
