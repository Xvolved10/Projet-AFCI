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







    <div>
        <h2>Inscription</h2>
        <form method="post" id="loginForm">
            <label for="username">Adresse Email :</label>
            <input type="text" name="email" placeholder="Votre adresse email">
            <?php
            if (isset($error["email"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error["email"]; ?></p>
                </div>
            <?php } ?><br><br>

            <label for="password">Mot de passe :</label>
            <input type="password" name="MotDepasse" placeholder="Votre mot de passe">
            <?php
            if (isset($error["MotDepasse"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error["MotDepasse"]; ?></p>
                </div>
            <?php } ?><br><br>

            <label for="pseudo">Pseudo :</label>
            <input type="pseudo" name="pseudo" placeholder="Votre Pseudo">
            <?php
            if (isset($error["pseudo"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error["pseudo"]; ?></p>
                </div>
            <?php } ?>

            <!-- <button type="submit" value="Inserer" name="Inserer" id="inserer">Créer Profil</button> -->
            <input type="submit" name="Inserer" value="Créer un compte">
            <input type="submit" name="seconnecter" value="Se connecter">
        </form>
    </div>
    </div>