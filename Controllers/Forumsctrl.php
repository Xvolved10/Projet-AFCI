<?php
    $listeArticle = new Sujets();

    $numberPage = $listeArticle->numberPage();
    $numberDePage = ceil($numberPage["nbPage"]);

    if (isset($_GET["Forums"]) && !empty($_GET["Forums"])) {
        $currentPage = intval($_GET["Forums"]);
    } else {
        $currentPage = 1;
    }

    $offset = ($currentPage - 1) * 6;
    // var_dump($offset);
    $listeArticle->setOffset($offset);
    $liste = $listeArticle->affichage();
    // var_dump($numberDePage);
    if (isset($_POST["NouveauSujet"])) {
        header("Location: index.php?NouveauSujet");
        exit();
    }
    ?>