<body class="body">

    <!-- Profil -->
    <section class="présentation">
        <div class="image-text">
            <img class="img_background" src="image/overwatch-section1-feature1.webp" >
            <div class="overlay profil-overlay">
                <h1>Ashe</h1>
            </div>
        </div>

<!--    Affichage profil -->
<div class="profil container">

    <h3>Votre Pseudo est:</h3> <?php echo $affichage["pseudo"];
                                ?> <br>
    <h3>L'email associé est:</h3> <?php
                                    echo $affichage["email"];
                                    ?> <br>
    <h3>Inscrit depuis le</h3> <?php
                                echo $affichage["Date_d_inscription"];
                                ?>
    <!-- Boutons article/modifier/deconnexion/supprimer -->
        <br><br>
        <input type="submit" name="deconnexion" class="deconnexion" value="Se déconnecter">
        <br><br>
        <input type="submit" name="supprimer" class="supprimer" value="Supprimer le profil">

</div>