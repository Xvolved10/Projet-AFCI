<!--    Affichage profil -->
<div style="border: 2px solid black;margin-top:10%;margin-inline:25%;text-align: center; font-size: x-large; background-color:lightpink; ">
        <?php
        // var_dump($_SESSION);
        ?>
        <h3 style="text-decoration: underline; ">Votre Pseudo est:</h3> <?php echo $affichage["pseudo"];
                                                                        ?> <br>
        <h3 style="text-decoration: underline;">L'email associé est:</h3> <?php
                                                                            echo $affichage["email"];
                                                                            ?>
        <!-- Boutons article/modifier/deconnexion/supprimer -->
        <form action="" method="post">
            <br><br>
            <input type="submit" name="article" value="Postez un article ?" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ">
            <input type="submit" name="ArtCommentaire" value="Voir les articles ?" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ">         
            <br><br>
            <input type="submit" name="Modifier" value="Modifier profil" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ; border-radius:10%">
            <input type="submit" name="deconnexion" value="Se déconnecter" style="background-color: red; color:white ; height:50px ;padding-left:1%; padding-right:1%">
            <br><br>
            <input type="submit" name="supprimer" value="Supprimer le profil" style="color:crimson; background-color:black ; margin-bottom:3% ; height:50px ;padding-left:1%; padding-right:1%">

        </form>
    </div>
