<?php
$commentaire = new Sujets();
$numberPage = $commentaire->numberPage();
$numberDePage = ceil($numberPage["nbPage"]);

if (isset($_GET["Sujet"]) && !empty($_GET["Sujet"])) {
    $currentPage = isset($_GET["page"]) ? intval($_GET["page"]) : 1;
    $commentaire->setID_sujet($_GET["Sujet"]);
} else {
    $currentPage = 1;
}

$limit = 10; // Nombre de commentaires par page
$offset = ($currentPage - 1) * $limit;
$commentaire->setOffset($offset);

$monArticle = $commentaire->sujetsId();

if (isset($_POST["ajoutComm"])) {
    $commentaire->setContenu_commentaire($_POST["commentaire"]);
    $commentaire->setID_utilisateur($_SESSION["ID_utilisateur"]);
    $commentaire->setID_sujet($_GET["Sujet"]);
    $commentaire->AjouterCommentaire();

    header("Location: index.php?Sujet=" . $_GET["Sujet"]);
    exit();
}
$commentaires = $commentaire->getCommentairesLimit($limit, $offset, $_GET['Sujet']);
?>
