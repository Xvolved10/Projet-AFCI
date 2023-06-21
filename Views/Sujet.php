<body class="body">
    <br><br><br><br><br><br><br><br><br><br><br>

    <div class="commentaire">
        <h1>Sujet</h1>
        <p><?php echo $monArticle['Titre_sujet']; ?></p>
        <p><?php echo $monArticle['pseudo']; ?></p>

        <h2>Commentaires liés au sujet</h2>
        <?php if (!empty($commentaires)) {
            foreach ($commentaires as $comment) { ?>
                <p>Pseudo: <?php echo $comment['pseudo']; ?></p>
                <p>Contenu: <?php echo $comment['Contenu_commentaire']; ?></p>
                <p>Date de publication: <?php echo $comment['Date_publication']; ?></p>
                <hr>
        <?php }
        } else {
            echo "Aucun commentaire trouvé.";
        } ?>

        <form action="" method="post">
            <textarea class="textcommentaire" name="commentaire"></textarea>
            <button type="submit" name="ajoutComm">Ajouter un commentaire</button>
        </form>
    </div>

    <?php if ($currentPage > 1) { ?>
        <a href="index.php?Sujet=<?= $_GET['Sujet'] ?>&page=<?= $currentPage - 1 ?>" class="pagination-link">Précédent</a>
    <?php }

    for ($page = max(1, $currentPage - 2); $page < $currentPage; $page++) { ?>
        <a href="index.php?Sujet=<?= $_GET['Sujet'] ?>&page=<?= $page ?>" class="pagination-link"><?= $page ?></a>
    <?php }

    ?>

    <span class="pagination-link current-page"><?= $currentPage ?></span>

    <?php
    for ($page = $currentPage + 1; $page <= min($currentPage + 2, $numberDePage); $page++) { ?>
        <a href="index.php?Sujet=<?= $_GET['Sujet'] ?>&page=<?= $page ?>" class="pagination-link"><?= $page ?></a>
    <?php }

    if ($currentPage <= $numberDePage) { ?>
        <a href="index.php?Sujet=<?= $_GET['Sujet'] ?>&page=<?= $currentPage + 1 ?>" class="pagination-link">Suivante</a>
    <?php } ?>
</body>