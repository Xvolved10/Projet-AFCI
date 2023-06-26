<body class="body">
    <!-- Profil -->
    <section class="présentation">
        <div class="image-text">
            <img class="img-profil" src="<?php echo htmlspecialchars('image/banniere (1).png'); ?>">
        </div>

        <!-- Affichage profil -->
        <div class="profil">
            <h3>Votre Pseudo est:</h3>
            <p class="pseudo"><?php echo htmlspecialchars($affichage["pseudo"]); ?></p>
            <h3>L'email associé est:</h3>
            <p class="email"><?php echo htmlspecialchars($affichage["email"]); ?></p>
            <h3>Inscrit depuis le</h3>
            <p class="date"><?php echo htmlspecialchars($affichage["Date_d_inscription"]); ?></p>

            <!-- Boutons article/modifier/deconnexion/supprimer -->
            <form action="" method="post">
                <input type="submit" name="deconnexion" class="deconnexion" value="Se déconnecter">
                <br><br>
                <input type="submit" name="supprimer" class="supprimer" value="Supprimer le profil">
            </form>
        </div>
    </section>
</body>