<body class="body">
<br><br><br><br><br><br><br><br><br><br><br>

    <div class="commentaire">
        <h1>Commentaires</h1>
        <p><?= $commentaire->getTitre_sujet() ?> </p>
        <p><?= $commentaire->getPseudo() ?> </p>
        <form action="" method="post">
            <textarea class="textcommentaire" name="commentaire"></textarea>
            <button type="submit" name="ajoutComm">Ajoutez un commentaire</button>
        </form>
    </div>
    