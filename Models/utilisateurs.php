<?php


class Utilisateurs extends Database
{
    private $ID_utilisateur; // Identifiant de l'utilisateur
    private $pseudo; // Pseudonyme de l'utilisateur
    private $email; // Adresse email de l'utilisateur
    private $MotDepasse; // Mot de passe de l'utilisateur
    private $Date_d_inscription; // Date d'inscription de l'utilisateur
    private $ID_role; // Identifiant du rôle de l'utilisateur
    private $avatar; // Avatar de l'utilisateur

    public function getID_utilisateur()
    {
        return $this->ID_utilisateur;
    }
    public function setID_utilisateur($ID_utilisateur)
    {
        return $this->ID_utilisateur = $ID_utilisateur;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($pseudo)
    {
        return $this->pseudo = $pseudo;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function getMotDepasse()
    {
        return $this->MotDepasse;
    }
    public function setMotDepasse($MotDepasse)
    {
        return $this->MotDepasse = $MotDepasse;
    }

    public function getDate_d_inscription()
    {
        return $this->Date_d_inscription;
    }
    public function setDate_d_inscription($Date_d_inscription)
    {
        return $this->Date_d_inscription = $Date_d_inscription;
    }

    public function getID_role()
    {
        return $this->ID_role;
    }
    public function setID_role($ID_role)
    {
        return $this->ID_role = $ID_role;
    }
    public function getAvatar()
    {
        return $this->avatar;
    }
    public function setAvatar($avatar)
    {
        return $this->avatar = $avatar;
    }

    // Requête de création de compte
    public function insert()
    {
        $insertion = $this->pdo->prepare("INSERT INTO utilisateurs(pseudo,email,MotDepasse)
      VALUES(?,?,?)");
        $insertion->bindValue(1, $this->pseudo, PDO::PARAM_STR);
        $insertion->bindValue(2, $this->email, PDO::PARAM_STR);
        $insertion->bindValue(3, $this->MotDepasse, PDO::PARAM_STR);
        $insertion->execute();
    }

    // Requête de connexion
    public function connexion()
    {
        $infosUser = $this->pdo->prepare("SELECT `ID_utilisateur`, `email`, `MotDepasse`, `pseudo`, `ID_role` FROM `utilisateurs` WHERE email = ?");

        $infosUser->bindValue(1, $this->email, PDO::PARAM_STR);

        $infosUser->execute();
        return $infosUser->fetch(PDO::FETCH_ASSOC);
    }


    // Requête d'affichage du profil
    public function select()
    {

        $infosUsers = $this->pdo->prepare("SELECT `ID_utilisateur`, `email`, `MotDepasse`, `pseudo`, `Date_d_inscription`, `ID_role` 
    FROM `utilisateurs` 
    WHERE `ID_utilisateur` = ?");
        $infosUsers->bindValue(1, $this->ID_utilisateur, PDO::PARAM_INT);

        $infosUsers->execute();

        return $infosUsers->fetch(PDO::FETCH_ASSOC);
    }


    // Requête de vérification
    public function VerifMail_Pseudo()
    {
        $nbuser = $this->pdo->prepare("SELECT email,pseudo FROM utilisateurs  WHERE email = ? OR pseudo = ?");

        $nbuser->bindValue(1, $this->email, PDO::PARAM_STR);
        $nbuser->bindValue(2, $this->pseudo, PDO::PARAM_STR);
        $nbuser->execute();
        return $nbuser->fetch(PDO::FETCH_ASSOC);
    }

    // Requête de suppression
    public function delete()
    {
        $delete = $this->pdo->prepare("DELETE FROM utilisateurs WHERE ID_utilisateur = ?");
        $delete->bindValue(1, $this->ID_utilisateur, PDO::PARAM_STR);
        $delete->execute();
    }
}
