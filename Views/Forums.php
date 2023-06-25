<body class="body">
    <div class="image-forum">
        <img class="img_background" src="image/banniere (1).png">
    </div>

    <form method="post">
        <?php
        foreach ($liste as $key => $value) {
            // Afficher l'avatar de l'utilisateur
            echo $value['avatar'];
        ?>
            <div class="bclArticle">
                <div>
                    <!-- <img class="img_accueil" src="<?php echo $value['avatar'] ?>"> -->
                    <h2 class="article_accueil">
                        <a href="index.php?Sujet=<?php echo $value["ID_sujet"] ?>" class="link-style">
                            <?php echo $value['Titre_sujet'] ?>
                        </a>
                    </h2>
                    <div class="author_info">
                        <h3 class="pseudo_accueil"> <?php echo $value['pseudo'] ?></h3>
                        <p class="date_accueil"> <?php echo $value['Date_creation'] ?></p>
                    </div>
                </div>
                <div>
                    <?php
                    // Vérifier si l'utilisateur est connecté et s'il est l'auteur du sujet ou s'il a le rôle d'administrateur
                    if (isset($_SESSION["ID_utilisateur"]) && !empty($_SESSION["ID_utilisateur"])) {
                        if ($_SESSION["ID_utilisateur"] == $value["ID_utilisateur"] || $_SESSION["ID_role"] == 1) { ?>
                            <form method="POST">
                                <input type="hidden" name="SupprSujet" value="<?php echo $value["ID_sujet"] ?>">
                                <button type="submit" class="supprimer_comm">Supprimer</button>
                            </form>
                    <?php }
                    } ?>
                </div>
            </div>
        <?php } ?>
    </form>

    <form method="post">
        <input type="submit" value="Nouveau Sujet" name="NouveauSujet" class="nouveau_sujet">
    </form>

    <div class="pagination-container">
        <?php
        // Vérifier s'il existe une page précédente
        if ($currentPage > 1) { ?>
            <a href="index.php?Forums=<?= $currentPage - 1  ?>" class="pagination-link">Précédent</a>
            <?php }

        // Afficher les pages précédentes (2 maximum)
        for ($page = 2; $page >= 1; $page--) {
            if ($currentPage - $page >= 1) { ?>
                <a href="index.php?Forums=<?= $currentPage - $page ?>" class="pagination-link"><?= $currentPage - $page ?></a>
        <?php }
        } ?>

        <!-- Afficher la page actuelle -->
        <a href="index.php?Forums=<?= $currentPage ?>" class="current-page"><?= $currentPage ?></a>

        <?php
        // Afficher les pages suivantes (2 maximum)
        for ($pagePlus = 1; $pagePlus <= 2; $pagePlus++) {
            if ($currentPage + $pagePlus <= $numberDePage) { ?>
                <a href="index.php?Forums=<?= $currentPage + $pagePlus ?>" class="pagination-link"><?= $currentPage + $pagePlus ?></a>
        <?php }
        } ?>

        <?php
        // Vérifier s'il existe une page suivante
        if ($currentPage < $numberDePage) { ?>
            <a href="index.php?Forums=<?= $currentPage + 1 ?>" class="pagination-link">Suivante</a>
        <?php } ?>
    </div>
</body>