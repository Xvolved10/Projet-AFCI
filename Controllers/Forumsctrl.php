<?php
$listeArticle = new Sujets();

// Récupération du nombre total de sujets
$numberPage = $listeArticle->numberPage();
$numberDePage = ceil($numberPage["nbPage"]);

// Vérification de la page actuelle dans l'URL
if (isset($_GET["Forums"]) && !empty($_GET["Forums"])) {
    $currentPage = intval($_GET["Forums"]);
} else {
    $currentPage = 1;
}

// Calcul de l'offset pour la pagination
$offset = ($currentPage - 1) * 6;
$listeArticle->setOffset($offset);

// Récupération des sujets à afficher sur la page
$liste = $listeArticle->affichage();

// Condition pour le bouton "SupprSujet"
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

// Condition pour le bouton "NouveauSujet"
if (isset($_POST["NouveauSujet"])) {
    // Rediriger l'utilisateur vers la page de création d'un nouveau sujet
    header("Location: index.php?NouveauSujet");
    exit();
}
