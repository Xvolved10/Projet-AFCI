<?php
// Vérification de la session de l'utilisateur
if (isset($_SESSION["ID_utilisateur"])) {
    $profil = new Utilisateurs();

    // Récupération des informations du profil
    $profil->setID_utilisateur($_SESSION["ID_utilisateur"]);
    $affichage = $profil->select();

    // Condition pour le bouton "deconnexion"
    if (isset($_POST["deconnexion"])) {
        session_destroy();
        header("Location:index.php?Connexion");
        echo '<script>restaurerBouton();</script>';
    }

    // Condition pour le bouton "supprimer"
    if (isset($_POST['supprimer'])) {
        $suppression = $_POST['supprimer'];
        header("Location:index.php?Suppression&value=" . $_SESSION["ID_utilisateur"]);
    }
} else {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location:index.php?Connexion");
}
