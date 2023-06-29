<body class="body">
    <div class="image-forum">
        <img class="img-profil" src="<?php echo htmlspecialchars('image/banniere (1).png'); ?>">
    </div>

    <div class="commentaire">
        <!-- Bloc du sujet -->
        <?php if (!empty($monArticle)) { ?>
            <div class="bclSujet">
                <p class="pseudoSujet"><?php echo htmlspecialchars($monArticle['pseudo']); ?></p>
                <p class="articleSujet"><?php echo htmlspecialchars($monArticle['Titre_sujet']); ?></p>
                <p class="dateSujet"><?php echo htmlspecialchars($monArticle['Date_creation']); ?></p>
            </div>
        <?php } ?>
        <!-- Bloc des commentaires -->
        <div class="bclComm">
            <h2>Commentaires liés au sujet</h2>
            <?php if (!empty($commentaires)) {
                foreach ($commentaires as $comment) { ?>
                    <p class="pseudoComm"><?php echo htmlspecialchars($comment['pseudo']); ?></p>
                    <p class="articleComm"><?php echo htmlspecialchars($comment['Contenu_commentaire']); ?></p>
                    <p class="dateComm"><?php echo htmlspecialchars($comment['Date_publication']); ?></p>
                    <?php if ($_SESSION['ID_role'] == 1) { ?>
                        <div>
                            <!-- Vérifie si l'utilisateur est connecté et s'il a le droit de supprimer le commentaire -->
                            <form method="post">
                                <input type="hidden" name="commentaireID" value="<?php echo htmlspecialchars($comment['ID_commentaire']); ?>">
                                <button type="submit" name="supprimer_commentaire" class="supprimerCommentaire">Supprimer</button>
                            </form>
                        </div>
                    <?php } ?>
                    <hr>
            <?php }
            } else {
                echo "<p class='articleSujet'>Aucun commentaire trouvé.</p>";
            } ?>
        </div>
    </div>


    <!-- Bloc de pagination -->
    <div class="pagination-container">
        <?php if ($currentPage > 1) { ?>
            <a href="index.php?Sujet=<?= htmlspecialchars($_GET['Sujet']) ?>&page=<?= $currentPage - 1 ?>" class="pagination-link">Précédent</a>
        <?php }

        for ($page = max(1, $currentPage - 2); $page < $currentPage; $page++) { ?>
            <a href="index.php?Sujet=<?= htmlspecialchars($_GET['Sujet']) ?>&page=<?= $page ?>" class="pagination-link"><?= $page ?></a>
        <?php }

        ?>

        <span class="pagination-link current-page"><?= $currentPage ?></span>

        <?php
        for ($page = $currentPage + 1; $page <= min($currentPage + 2, $numberDePage); $page++) { ?>
            <a href="index.php?Sujet=<?= htmlspecialchars($_GET['Sujet']) ?>&page=<?= $page ?>" class="pagination-link"><?= $page ?></a>
        <?php }

        if ($currentPage <= $numberDePage) { ?>
            <a href="index.php?Sujet=<?= htmlspecialchars($_GET['Sujet']) ?>&page=<?= $currentPage + 1 ?>" class="pagination-link">Suivante</a>
        <?php } ?>
    </div>

    <!-- Formulaire d'ajout de commentaire -->
    <form action="" method="post">
        <textarea class="textSujet" name="commentaire"></textarea>
        <button type="submit" name="ajoutComm" class="nouveauComm">Ajouter un commentaire</button>
    </form>
</body>