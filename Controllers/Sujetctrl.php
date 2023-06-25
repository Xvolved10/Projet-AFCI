<?php
// Vérification de la session de l'utilisateur
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$commentaire = new Sujets();
$numberPage = $commentaire->numberPage();
$numberDePage = ceil($numberPage["nbPage"]);

// Vérification de la présence du paramètre "Sujet" dans l'URL
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

// Ajout d'un commentaire
if (isset($_POST["ajoutComm"])) {
    if (isset($_SESSION["ID_utilisateur"])) {
        $commentaire->setContenu_commentaire($_POST["commentaire"]);
        $commentaire->setID_utilisateur($_SESSION["ID_utilisateur"]);
        $commentaire->setID_sujet($_GET["Sujet"]);
        $commentaire->AjouterCommentaire();

        header("Location: index.php?Sujet=" . $_GET["Sujet"]);
        exit();
    } else {
        header("Location: index.php?Connexion");
        exit();
    }
}

// Suppression d'un commentaire
if (isset($_POST["supprimer_commentaire"])) {
    $commentaireID = $_POST["commentaireID"];
    $suppressionReussie = $commentaire->supprimerCommentaire($commentaireID);

    if ($suppressionReussie) {
        echo "<p>Commentaire supprimé</p>";
    } else {
        echo "<p>Vous n'avez pas le droit de supprimer ce commentaire.</p>";
    }
}

// Récupération des commentaires pour le sujet donné, avec une limite et un offset
$commentaires = $commentaire->getCommentairesLimit($limit, $offset, $_GET['Sujet']);
?>
