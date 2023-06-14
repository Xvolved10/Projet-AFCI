<?php

$ajoue = new Sujets();
if(isset($_SESSION["ID_utilisateur"])){




if (isset($_POST["Valider"])) {
    $error = [];
    if (isset($_POST['Titre_sujet']) && !empty($_POST['Titre_sujet'])) {
        $Titre_sujet = $_POST['Titre_sujet'];
    } else {
        $error['Titre_sujet'] = "<p>Veuillez renseigner le champ<p>";
    }

    if (empty($error)) {
        $ajoue->setTitre_sujet($Titre_sujet);
        $ajoue->setID_utilisateur($_SESSION["ID_utilisateur"]);
        $ajoue->postsujet();
        header("Location: index.php?Sujet=" . $value["ID_sujet"]);
    }
}
}
else{
    header("Location:index.php?Connexion");
}