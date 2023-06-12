<?php


if (isset($_SESSION["ID_utilisateur"])){
    $ajoue = new Utilisateurs();

    $ajoue->setID_utilisateur($_SESSION["ID_utilisateur"]);
    $affichage = $ajoue->select();

// Condition bouton deconnexion
if (isset($_POST["deconnexion"])) {
    session_destroy();
    header("Location:index.php?Connexion");
    echo '<script>restaurerBouton();</script>';
}

// condition bouton supprimer
if (isset($_POST['supprimer'])) {
    $suppression = $_POST['supprimer'];
    header("Location:index.php?Suppression&value=" . $_SESSION["ID_utilisateur"]);
}
}
else{
    header("Location:index.php?Connexion");
}
?>