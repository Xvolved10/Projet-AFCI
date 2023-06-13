<body class="body">
    <br><br><br><br><br><br><br><br><br><br><br>
    <form method="post">
        <?php
        foreach ($liste as $key => $value) {
            echo $value['avatar'];
        ?>
            <div class="bclArticle">
                <div>
                    <!-- <img class=img_accueil src="<?php echo $value['avatar'] ?>"> -->
                    <h2 class="article_accueil"> <?php echo $value['Titre_sujet'] ?></h2>
                    <h3 class="pseudo_accueil"> <?php echo $value['pseudo'] ?></h3>

                </div>
                <div>
                    <button type="submit" name="btnArticle" value="<?php echo $value["ID_utilisateur"] ?>">En savoir plus</button>
                    <?php
                    if (isset($_SESSION["ID_utilisateur"]) && !empty($_SESSION["ID_utilisateur"]) && $_SESSION["ID_role"] == 1) {
                        if ($_SESSION["ID_utilisateur"] == $value["ID_utilisateur"]) { ?>
                            <button type="submit" name="SupprComm" value="<?php echo $value["ID_utilisateur"] ?>">Supprimer</button>
                    <?php }
                    } ?>
                </div>
            </div>

    </form>
<?php } ?>
<input type="submit"  value="Nouveau Sujet" name="nouveausujet" class="nouveausujet">

<?php if ($currentPage > 1) { ?>
    <a href="index.php?home&page=<?= $currentPage - 1  ?>">Précedent<<< /a>
            <?php }
        for ($page = 2; $page >= 1; $page--) {
            if ($currentPage - $page >= 1) { ?>
                <a href="index.php?home&page=<?= $currentPage - $page ?>"><?= $currentPage - $page ?></a>
        <?php }
        } ?>
        <a href="index.php?home&page=<?= $currentPage ?>"><?= $currentPage ?></a>

        <?php
        for ($pagePlus = 1; $pagePlus <= 2; $pagePlus++) {
            if ($currentPage + $pagePlus <= $numberDePage) { ?>
                <a href="index.php?home&page=<?= $currentPage + $pagePlus ?>"><?= $currentPage + $pagePlus ?></a>
        <?php }
        } ?>
        <?php if ($currentPage < $numberDePage) { ?>
            <a href="index.php?home&page=<?= $currentPage + 1  ?>">>>Suivante</a>
        <?php } ?>
</body>