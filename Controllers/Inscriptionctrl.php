<?php
$ajoue = new Utilisateurs();

// Condition Bouton Inserer
if (isset($_POST["Inserer"])) {
    $error = [];

    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $error['email'] = "renseigner un email validé";
        }
    } else {
        $error['email'] = "Le champ email est manquant";
    }
    if (isset($_POST["Motdepasse"]) && !empty($_POST["Motdepasse"])) {
        if (mb_strlen($_POST["Motdepasse"]) >= 8) {
            $Motdepasse = password_hash($_POST["Motdepasse"], PASSWORD_DEFAULT);
            // var_dump($hashed_password);
        } else {
            $error['Motdepasse'] = "entrez au moins 8 caracteres";
        }
    } else {
        $error['Motdepasse'] = "Le mot de passe est manquant";
    }

    if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {
        $pseudo = $_POST["pseudo"];
    } else {
        $error['pseudo'] = "Le pseudo est manquant";
    }
    if (empty($error)) {
        echo "pass";
        $ajoue->setEmail($email);
        $ajoue->setMotdepasse($Motdepasse);
        $ajoue->setPseudo($pseudo);
        $user = $ajoue->VerifMail_Pseudo();
        var_dump($user);
        if ($user === false) {
            $ajoue->insert();
            $message = "profil crée";
            // header("Location:index.php?Connexion");
        } else {
            if ($user["email"] === $email) {
                $emailExiste = "le mail n'est pas dispo";
            }
            if ($user["pseudo"] === $pseudo) {
                $pseudoExiste = "le pseudo n'est pas dispo";
            }
        }
    }
}
if(isset($_POST["seconnecter"])) {
    header("Location:index.php?Connexion");
}
?>