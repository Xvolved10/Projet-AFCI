<?php
$ajoue = new Utilisateurs();

// Condition Bouton Inserer
if (isset($_POST["Inserer"])) {
    $error = [];

    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $error['email'] = "renseigner un email valide";
        }
    } else {
        $error['email'] = "Le champ email est manquant";
    }
    if (isset($_POST["MotDepasse"]) && !empty($_POST["MotDepasse"])) {
        if (mb_strlen($_POST["MotDepasse"]) >= 8) {
            $MotDepasse = password_hash($_POST["MotDepasse"], PASSWORD_DEFAULT);
            // var_dump($hashed_password);
        } else {
            $error['MotDepasse'] = "entrez au moins 8 caracteres";
        }
    } else {
        $error['MotDepasse'] = "Le mot de passe est manquant";
    }

    if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {
        $pseudo = $_POST["pseudo"];
    } else {
        $error['pseudo'] = "Le pseudo est manquant";
    }
    if (empty($error)) {
        // echo "pass";
        $ajoue->setEmail($email);
        $ajoue->setMotDepasse($MotDepasse);
        $ajoue->setPseudo($pseudo);
        $user = $ajoue->VerifMail_Pseudo();
        var_dump($user);
        if ($user === false) {
            $ajoue->insert();
            $message = "profil crée";
            header("Location:Index.php?Connexion");
        } else {
            if ($user["email"] === $email) {
                $error['email'] = "le mail n'est pas dispo";
            }
            if ($user["pseudo"] === $pseudo) {
                $error['pseudo'] = "le pseudo n'est pas dispo";
            }
        }
    }
}
if(isset($_POST["seconnecter"])) {
    header("Location:index.php?Connexion");
}
?>