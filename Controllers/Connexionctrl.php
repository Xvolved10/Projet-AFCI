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
        $error["email"] = "<p>Le champ email est vide</p>";
    }

    if (isset($_POST['MotDepasse']) && !empty($_POST['MotDepasse'])) {
        $MotDepasse = $_POST["MotDepasse"];
    } else {
        $error["MotDepasse"] = "<p>Ce mot de passe n'existe pas</p>";
    }

    if (empty($error)) {
        try {
            $ajoue->setEmail($email);
            $ajoue->setMotDepasse($MotDepasse);
            $a = $ajoue->connexion();
            // var_dump($a);

            
            if ($a === false) {
                $messageprofil = "<p>Ce profil n'existe pas </p>";
            } else {
                echo "pass;";
                echo $a['MotDepasse'];
                echo $MotDepasse;
                if (password_verify($MotDepasse, $a['MotDepasse'])){
                    $_SESSION["ID_utilisateur"] = $a["ID_utilisateur"];
                    $_SESSION["email"] = $a["email"];
                    $_SESSION["MotDepasse"] = $a["MotDepasse"];
                    $_SESSION["pseudo"] = $a["pseudo"];
                    $_SESSION["ID_role"] = $a["ID_role"];
                    header("Location:index.php?Profil");

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
