<?php
$ajoue = new Utilisateurs();

// Condition pour le bouton "Inserer"
if (isset($_POST["Inserer"])) {
    $error = [];

    // Vérification de l'email
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $error['email'] = "Renseignez un email valide";
        }
    } else {
        $error['email'] = "Le champ email est manquant";
    }

    // Vérification du mot de passe
    if (isset($_POST["MotDepasse"]) && !empty($_POST["MotDepasse"])) {
        if (mb_strlen($_POST["MotDepasse"]) >= 8) {
            $MotDepasse = password_hash($_POST["MotDepasse"], PASSWORD_DEFAULT);
        } else {
            $error['MotDepasse'] = "Entrez au moins 8 caractères pour le mot de passe";
        }
    } else {
        $error['MotDepasse'] = "Le mot de passe est manquant";
    }

    // Vérification du pseudo
    if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {
        $pseudo = $_POST["pseudo"];
    } else {
        $error['pseudo'] = "Le pseudo est manquant";
    }

    if (empty($error)) {
        $ajoue->setEmail($email);
        $ajoue->setMotDepasse($MotDepasse);
        $ajoue->setPseudo($pseudo);
        $user = $ajoue->VerifMail_Pseudo();
        
        if ($user === false) {
            // Insertion du profil dans la base de données
            $ajoue->insert();
            $message = "Profil créé";
            header("Location: Index.php?Connexion");
        } else {
            // Vérification de l'unicité de l'email et du pseudo
            if ($user["email"] === $email) {
                $error['email'] = "L'email n'est pas disponible";
            }
            if ($user["pseudo"] === $pseudo) {
                $error['pseudo'] = "Le pseudo n'est pas disponible";
            }
        }
    }
}

// Condition pour le bouton "seconnecter"
if(isset($_POST["seconnecter"])) {
    // Redirection vers la page de connexion
    header("Location:index.php?Connexion");
}
?>
