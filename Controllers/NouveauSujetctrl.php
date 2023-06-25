<?php
$ajoue = new Sujets();

// Vérification de la session de l'utilisateur
if(isset($_SESSION["ID_utilisateur"])){

    // Condition pour le bouton "Valider"
    if (isset($_POST["Valider"])) {
        $error = [];

        // Vérification du champ "Titre_sujet"
        if (isset($_POST['Titre_sujet']) && !empty($_POST['Titre_sujet'])) {
            $Titre_sujet = $_POST['Titre_sujet'];
        } else {
            $error['Titre_sujet'] = "<p>Veuillez renseigner le champ</p>";
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
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location:index.php?Connexion");
}
?>
