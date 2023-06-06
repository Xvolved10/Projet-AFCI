<?php

if (isset($_SESSION["ID_utilisateur"])){
    $ajoue = new Utilisateurs();

    $ajoue->setID_utilisateur($_SESSION["ID_utilisateur"]);
    $affichage = $ajoue->select();

// Condition bouton article
if (isset($_POST["article"])) {
    header("Location:index.php?Article");
}
// Condition bouton commentaire/article
if (isset($_POST["ArtCommentaire"])) {
    header("Location:index.php?home");
}
// Condition bouton deconnexion
if (isset($_POST["deconnexion"])) {
    session_destroy();
    header("Location:index.php?Connexion");
}
// Condition bouton modifier
if (isset($_POST["Modifier"])) {
    header("Location:index.php?Modification&value=" . $_SESSION["ID_utilisateur"]);
}
// condition bouton supprimer
if (isset($_POST['supprimer'])) {
    $suppression = $_POST['supprimer'];
    
    header("Location:index.php?Suppression&value=" . $_SESSION["ID_utilisateur"]);
    // var_dump($requete);
}
}
else{
    header("Location:index.php?Connexion");
}
?>