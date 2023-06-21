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
    if (isset($_POST["SupprSujet"])) {
        // Récupérer l'ID du sujet à supprimer
        $sujetID = $_POST["SupprSujet"];
    
        // Créer une instance de la classe Sujets
        $sujet = new Sujets();
    
        // Définir l'ID du sujet à supprimer
        $sujet->setID_sujet($sujetID);
    
        // Appeler la méthode de suppression de sujet et de commentaires
        $sujet->supprimerSujetEtCommentaires();
    
        // Rediriger l'utilisateur vers une page appropriée après la suppression
        header("Location: index.php?Forums");
        exit();
    }
    
    if (isset($_POST["NouveauSujet"])) {
        header("Location: index.php?NouveauSujet");
        exit();
    }
    ?>