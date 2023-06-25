<!-- Page de confirmation de suppression de profil -->

<body class="body">
    <div class="image-text">
        <img class="img_background" src="image/banniere (1).png">
    </div>
    <div class="ConfirmSuppr">
        <h1>Êtes-vous sûr de vouloir supprimer votre profil ?</h1>
        <form action="" method="post">
            <p><?php echo $messagesuppression ?></p>
            <input type="submit" name="Supprimer" value="Supprimer les données" class="Supprimer">
            <br><br>
            <input type="submit" name="Retourprofil" value="Retourner au profil" class="Retourprofil">
        </form>
    </div>
</body>