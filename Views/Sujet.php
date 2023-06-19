<body class="body">
    <br><br><br><br><br><br><br><br><br><br><br>

    <div class="commentaire">
        <h1>Commentaires</h1>
        <p>ID Sujet : <?php echo $monArticle['ID_sujet']; ?></p>
        <p>Pseudo : <?php echo $monArticle['pseudo']; ?></p>
        <form action="" method="post">
            <textarea class="textcommentaire" name="commentaire"></textarea>
            <button type="submit" name="ajoutComm">Ajouter un commentaire</button>
        </form>

        <h2>Commentaires liés au sujet</h2>
        <?php
        $commentaire->setID_sujet($monArticle['ID_sujet']);
        $commentaires = $commentaire->getCommentaires();
        foreach ($commentaires as $comment) {
            echo "<p>Pseudo : " . $comment['pseudo'] . "</p>";
            echo "<p>Contenu : " . $comment['Contenu_commentaire'] . "</p>";
            echo "<p>Date de publication : " . $comment['Date_publication'] . "</p>";
            echo "<hr>";
        }
        ?>
    </div>
</body>
