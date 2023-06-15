<body class="body">
    <br><br><br><br><br><br><br><br><br><br><br>
    <form method="post">
        <?php
        foreach ($liste as $key => $value) {
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
                        <span class="date_accueil"> <?php echo $value['Date_creation'] ?></span>
                    </div>
                </div>
                <div>
                    <?php
                    if (isset($_SESSION["ID_utilisateur"]) && !empty($_SESSION["ID_utilisateur"]) && $_SESSION["ID_role"] == 1) {
                        if ($_SESSION["ID_utilisateur"] == $value["ID_utilisateur"]) { ?>
                            <button type="submit" name="SupprComm" value="<?php echo $value["ID_utilisateur"] ?>" class="supprimer_comm">Supprimer</button>
                    <?php }
                    } ?>
                </div>
            </div>
        <?php } ?>
    </form>

    <form method="post">
        <input type="submit" value="Nouveau Sujet" name="NouveauSujet" class="nouveau_sujet">
    </form>

    <br>

    <?php if ($currentPage > 1) { ?>
        <a href="index.php?Forums=<?= $currentPage - 1  ?>" class="pagination-link">Précédent</a>
    <?php }

    for ($page = 2; $page >= 1; $page--) {
        if ($currentPage - $page >= 1) { ?>
            <a href="index.php?Forums=<?= $currentPage - $page ?>" class="pagination-link"><?= $currentPage - $page ?></a>
        <?php }
    } ?>

    <a href="index.php?Forums=<?= $currentPage ?>" class="pagination-link"><?= $currentPage ?></a>

    <?php
    for ($pagePlus = 1; $pagePlus <= 2; $pagePlus++) {
        if ($currentPage + $pagePlus <= $numberDePage) { ?>
            <a href="index.php?Forums=<?= $currentPage + $pagePlus ?>" class="pagination-link"><?= $currentPage + $pagePlus ?></a>
    <?php }
    } ?>

    <?php if ($currentPage < $numberDePage) { ?>
        <a href="index.php?Forums=<?= $currentPage + 1 ?>" class="pagination-link">Suivante</a>
    <?php } ?>
</body>
