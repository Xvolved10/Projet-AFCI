<?php
$ajoue = new Utilisateurs();
// Condition bouton connexion


if (isset($_POST["Connexion"])) {
    $error = [];

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            $error["email"] = "Il faut renseigner un e-mail valide";
        }
    } else {
        $error['email'] = "<p>Le champ email est vide</p>";
        echo "ZBOUB";
    }

    if (isset($_POST['Motdepasse']) && !empty($_POST['Motdepasse'])) {
        $Motdepasse = $_POST['Motdepasse'];
    } else {
        $error['Motdepasse'] = "<p>Ce mot de passe n'existe pas</p>";
    }

    if (empty($error)) {
        try {
            $ajoue->setEmail($email);
            $ajoue->setMotdepasse($Motdepasse);
            $a = $ajoue->connexion();
            var_dump($a);
            echo "salut les potes";
            
            if ($a === false) {
                $messageprofil = "<p>Ce profil n'existe pas </p>";
            } else {
                if (password_verify($Motdepasse, $a['Motdepasse'])){
                    $_SESSION["ID_utilisateur"] = $a["ID_utilisateur"];
                    $_SESSION["email"] = $a["email"];
                    $_SESSION["Motdepasse"] = $a["Motdepasse"];
                    $_SESSION["pseudo"] = $a["pseudo"];
                    
                    // header("Location:Index.php?Héros");
                    exit();
                 } else {
                    $messageerreur = "<p> Mot de passe incorrect</p>";
                }
            }
        } catch (Exception $e) {
            echo "<p>ERREUR : " . $e->getMessage() . "</p>";
        }
    }
}

if (isset($_POST["creercompte"])) {
    header("Location:index.php?Inscription");
}
?>
