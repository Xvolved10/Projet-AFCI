<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<body class="body">
    <br><br><br><br><br><br><br><br><br><br><br>

    <div class="commentaire">
        <h1 class="bclSujet">Sujet</h1>
        <p class="articleSujet"><?php echo $monArticle['Titre_sujet']; ?></p>
        <p class="pseudoSujet"><?php echo $monArticle['pseudo']; ?></p>

        <h2 class="bclSujet">Commentaires liés au sujet</h2>
        <?php if (!empty($commentaires)) {
            foreach ($commentaires as $comment) { ?>
                <p class="pseudoSujet">Pseudo: <?php echo $comment['pseudo']; ?></p>
                <p class="articleSujet">Contenu: <?php echo $comment['Contenu_commentaire']; ?></p>
                <p class="dateSujet">Date de publication: <?php echo $comment['Date_publication']; ?></p>
                <?php
                if (isset($_SESSION["ID_utilisateur"], $comment['ID_utilisateur']) && isset($_SESSION["ID_role"]) && ($_SESSION["ID_utilisateur"] == $comment['ID_utilisateur'] || $_SESSION["ID_role"] == 1)) {
                ?>
                    <div>
                        <form action="" method="post">
                            <input type="hidden" name="commentaireID" value="<?php echo $comment['ID_commentaire']; ?>">
                            <button type="submit" name="supprimer_commentaire" class="supprimerCommentaire">Supprimer</button>
                        </form>
                    </div>
                <?php
                }
                ?>
                <hr>
        <?php }
        } else {
            echo "<p class='articleSujet'>Aucun commentaire trouvé.</p>";
        } ?>

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
    <form action="" method="post">
            <textarea class="textSujet" name="commentaire"></textarea>
            <button type="submit" name="ajoutComm" class="nouveauComm">Ajouter un commentaire</button>
        </form>

</body>
