<?php


class Utilisateurs extends Database{
    private $ID_utilisateur;
    private $Nom_utilisateur;
    private $Adresse_e_mail;
    private $Mot_de_passe;
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

    public function getNom_utilisateur()
    {
        return $this->Nom_utilisateur;
    }
    public function setNom_utilisateur($Nom_utilisateur)
    {
        return $this->Nom_utilisateur = $Nom_utilisateur;
    }

    public function getAdresse_e_mail()
    {
        return $this->Adresse_e_mail;
    }
    public function setAdresse_e_mail($Adresse_e_mail)
    {
        return $this->Adresse_e_mail = $Adresse_e_mail;
    }

    public function getMot_de_passe()
    {
        return $this->Mot_de_passe;
    }
    public function setMot_de_passe($Mot_de_passe)
    {
        return $this->Mot_de_passe = $Mot_de_passe;
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



    public function insert()
    {
        $insertion = $this->pdo->prepare("INSERT INTO utilisateurs(Nom_utilisateur,Adresse_e_mail,Mot_de_passe
      VALUES(?,?,?) ");
        $insertion->bindValue(1, $this->Nom_utilisateur, PDO::PARAM_STR);
        $insertion->bindValue(2, $this->Adresse_e_mail, PDO::PARAM_STR);
        $insertion->bindValue(3, $this->Mot_de_passe, PDO::PARAM_STR);
        // $insertion->bindValue(4, $this->Date_d_inscription, PDO::PARAM_INT);
        $insertion->execute();
    }
}