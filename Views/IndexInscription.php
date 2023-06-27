<!-- Formulaire d'Inscription -->

<body class="body Login">
    <div class="image-text">
        <img class="img-profil" src="<?php echo htmlspecialchars("image/banniere (1).png"); ?>">
    </div>
    <div class="container div-Login">
        <h1 class="h1-Login">Inscription</h1>
        <form method="post" id="loginForm" class="form-Login">
            <label for="username" class="label-Login">Adresse Email :</label>
            <input type="text" name="email" placeholder="Votre adresse email" class="input-Login">
            <?php
            // Affichage de l'erreur liée à l'email, si elle existe
            if (isset($error["email"])) { ?>
                <div class="alert alert-danger alert-Login" role="alert">
                    <p><?php echo htmlspecialchars($error["email"]); ?></p>
                </div>
            <?php } ?><br><br>

            <label for="password" class="label-Login">Mot de passe :</label>
            <input type="password" name="MotDepasse" placeholder="Votre mot de passe" class="input-Login">
            <?php
            // Affichage de l'erreur liée au mot de passe, si elle existe
            if (isset($error["MotDepasse"])) { ?>
                <div class="alert alert-danger alert-Login" role="alert">
                    <p><?php echo htmlspecialchars($error["MotDepasse"]); ?></p>
                </div>
            <?php } ?><br><br>

            <label for="pseudo" class="label-Login">Pseudo :</label>
            <input type="text" name="pseudo" placeholder="Votre Pseudo" class="input-Login">
            <?php
            // Affichage de l'erreur liée au pseudo, si elle existe
            if (isset($error["pseudo"])) { ?>
                <div class="alert alert-danger alert-Login" role="alert">
                    <p><?php echo htmlspecialchars($error["pseudo"]); ?></p>
                </div>
            <?php } ?>

            <input type="submit" name="Inserer" value="Créer un compte" class="submit-Login">
            <input type="submit" name="seconnecter" value="Se connecter" class="submit-Login">
        </form>
    </div>
</body>