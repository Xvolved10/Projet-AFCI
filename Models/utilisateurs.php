<?php


class Utilisateurs extends Database
{
    private $ID_utilisateur;
    private $pseudo;
    private $email;
    private $MotDepasse;
    private $Date_d_inscription;
    private $ID_role;


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


    // Requete Création Compte
    public function insert()
    {
        $insertion = $this->pdo->prepare("INSERT INTO utilisateurs(pseudo,email,MotDepasse)
      VALUES(?,?,?)");
        $insertion->bindValue(1, $this->pseudo, PDO::PARAM_STR);
        $insertion->bindValue(2, $this->email, PDO::PARAM_STR);
        $insertion->bindValue(3, $this->MotDepasse, PDO::PARAM_STR);
        $insertion->execute();
    }

    // Requete Connexion
    public function connexion()
    {
        $infosUser = $this->pdo->prepare("SELECT `ID_utilisateur`, `email`, `MotDepasse`, `pseudo`, `ID_role` FROM `utilisateurs` WHERE email = ?");

        $infosUser->bindValue(1, $this->email, PDO::PARAM_STR);

        $infosUser->execute();
        return $infosUser->fetch(PDO::FETCH_ASSOC);
    }


    // Requete Profil Affichage
    public function select()
    {
        echo $this->ID_utilisateur;

        $infosUsers = $this->pdo->prepare("SELECT `ID_utilisateur`, `email`, `MotDepasse`, `pseudo`, `ID_role` 
    FROM `utilisateurs` 
    WHERE `ID_utilisateur` = ?");
        $infosUsers->bindValue(1, $this->ID_utilisateur, PDO::PARAM_INT);

        $infosUsers->execute();

        return $infosUsers->fetch(PDO::FETCH_ASSOC);
    }


    // Requete Verification
    public function VerifMail_Pseudo()
    {
        $nbuser = $this->pdo->prepare("SELECT email,pseudo FROM utilisateurs  WHERE email = ? OR pseudo = ?");

        $nbuser->bindValue(1, $this->email, PDO::PARAM_STR);
        $nbuser->bindValue(2, $this->pseudo, PDO::PARAM_STR);
        $nbuser->execute();
        return $nbuser->fetch(PDO::FETCH_ASSOC);
    }
}
