<?php
$commentaire = new Sujets();
if (isset($_GET["Sujet"])) {
    $commentaire->setID_sujet($_GET["Sujet"]);
    $monArticle = $commentaire->sujetsId();
}
if (isset($_POST["ajoutComm"])) {
    $commentaire->setContenu_commentaire($_POST["commentaire"]);
    $commentaire->setID_utilisateur($_SESSION["ID_utilisateur"]);
    $commentaire->setID_sujet($_GET["Sujet"]);
    $commentaire->AjouterCommentaire();
}
