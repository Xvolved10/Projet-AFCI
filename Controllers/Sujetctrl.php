<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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
    $commentaire->setID_utilisateur(isset($_SESSION["ID_utilisateur"]) ? $_SESSION["ID_utilisateur"] : null);
    $commentaire->setID_sujet($_GET["Sujet"]);
    $commentaire->AjouterCommentaire();

    header("Location: index.php?Sujet=" . $_GET["Sujet"]);
    exit();
}

if (isset($_POST["supprimer_commentaire"])) {
    $commentaireID = $_POST["commentaireID"];
    $suppressionReussie = $commentaire->supprimerCommentaire($commentaireID);

    if ($suppressionReussie) {
        echo "<p>Commentaire supprimé</p>";
    } else {
        echo "<p>Vous n'avez pas le droit de supprimer ce commentaire.</p>";
    }
}

$commentaires = $commentaire->getCommentairesLimit($limit, $offset, $_GET['Sujet']);
?>