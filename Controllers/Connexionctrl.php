<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$ajoue = new Utilisateurs();

// Condition pour le bouton "Connexion"
if (isset($_POST["Connexion"])) {
    $error = [];

    // Vérification de l'e-mail saisi
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            $error["email"] = "Il faut renseigner un e-mail valide";
        }
    } else {
        $error["email"] = "<p>Le champ email est vide</p>";
    }

    // Vérification du mot de passe saisi
    if (isset($_POST['MotDepasse']) && !empty($_POST['MotDepasse'])) {
        $MotDepasse = $_POST["MotDepasse"];
    } else {
        $error["MotDepasse"] = "<p>Ce mot de passe n'existe pas</p>";
    }

    // Vérification des erreurs
    if (empty($error)) {
        try {
            $ajoue->setEmail($email);
            $ajoue->setMotDepasse($MotDepasse);
            $a = $ajoue->connexion();

            // Vérifie si le profil existe
            if ($a === false) {
                $messageprofil = "<p>Ce profil n'existe pas</p>";
            } else {
                // Vérifie si le mot de passe est correct
                if (password_verify($MotDepasse, $a['MotDepasse'])) {
                    // Stocke les informations de l'utilisateur dans la session
                    $_SESSION["ID_utilisateur"] = $a["ID_utilisateur"];
                    $_SESSION["email"] = $a["email"];
                    // $_SESSION["MotDepasse"] = $a["MotDepasse"];
                    $_SESSION["pseudo"] = $a["pseudo"];
                    $_SESSION["ID_role"] = $a["ID_role"];
                    
                    // Redirige l'utilisateur vers la page du profil
                    header("Location:index.php?Profil");
                    exit();
                } else {
                    $messageerreur = "<p>Mot de passe incorrect</p>";
                }
            }
        } catch (Exception $e) {
            echo "<p>ERREUR : " . $e->getMessage() . "</p>";
        }
    }
}

// Condition pour le bouton "creercompte"
if (isset($_POST["creercompte"])) {
    // Redirige l'utilisateur vers la page d'inscription
    header("Location:index.php?Inscription");
}
?>
