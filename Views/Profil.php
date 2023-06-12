<body class="body">

    <!-- Profil -->
    <section class="présentation">
        <div class="image-text">
            <img class="img-profil" src="image/banniere (1).png" >
        </div>

<!--    Affichage profil -->
<div class="profil ">

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
        <form action="" method="post">
        <input type="submit" name="deconnexion" class="deconnexion" value="Se déconnecter" >
        <!-- <a href="index.php?Deconnexion" class="deconnexion">Se déconnecter</a> -->
        <br><br>
        <input type="submit" name="supprimer" class="supprimer" value="Supprimer le profil">
        </form>
</div>