<?php

$newsuppression = new Utilisateurs();
$messagesuppression = "";

// Vérifie si le bouton "Supprimer" a été cliqué
if (isset($_POST["Supprimer"])) {

    try {
        // Définit l'ID utilisateur à supprimer en utilisant la valeur stockée dans la session
        $newsuppression->setID_utilisateur($_SESSION['ID_utilisateur']);
        
        // Appelle la méthode "delete" pour supprimer l'utilisateur
        $newsuppression->delete();
        
        // Détruit la session
        session_destroy();
        
        // Redirige l'utilisateur vers la page d'inscription
        header("Location:index.php?Inscription");

    } catch (Exception $e) {
        echo "<p>ERREUR : " . $e->getMessage() . "</p>";
    }
}

// Condition pour le bouton "Retourprofil"
if (isset($_POST["Retourprofil"])) {
    // Redirige l'utilisateur vers la page du profil
    header("Location:index.php?Profil");
}
