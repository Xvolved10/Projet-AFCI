<!-- Formulaire de Connexion -->

<body class="body Login">
    <div class="image-text">
        <img class="img_background" src="<?php echo htmlspecialchars("image/banniere (1).png"); ?>">
    </div>
    <div class="container div-Login">
        <h1 class="h1-Login">Connexion</h1>
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
            <?php } ?>

            <?php
            // Affichage du message d'erreur global, s'il existe
            if (isset($messageerreur)) { ?>
                <div class="alert alert-danger alert-Login" role="alert">
                    <p><?php echo htmlspecialchars($messageerreur); ?></p>
                </div>
            <?php } ?>

            <?php
            // Affichage du message de succès du profil, s'il existe
            if (isset($messageprofil)) { ?>
                <div class="alert alert-danger alert-Login" role="alert">
                    <p><?php echo htmlspecialchars($messageprofil); ?></p>
                </div>
            <?php } ?>

            <input type="submit" value="Se connecter" name="Connexion" class="submit-Login">
            <input type="submit" value="Créer un compte ?" name="creercompte" class="submit-Login">
        </form>
    </div>
</body>