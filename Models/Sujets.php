<?php


class Sujets extends Database{
    private $ID_sujet;
    private $Titre_sujet;
    private $Date_dernier_message;
    private $ID_utilisateur;
    private $ID_forum;
   

    public function getID_sujet()
    {
        return $this->ID_sujet;
    }
    public function setID_sujet($ID_sujet)
    {
        return $this->ID_sujet = $ID_sujet;
    }

    public function getTitre_sujet()
    {
        return $this->Titre_sujet;
    }
    public function setTitre_sujet($Titre_sujet)
    {
        return $this->Titre_sujet = $Titre_sujet;
    }

    public function getDate_dernier_message()
    {
        return $this->Date_dernier_message;
    }
    public function setDate_dernier_message($Date_dernier_message)
    {
        return $this->Date_dernier_message = $Date_dernier_message;
    }

    public function getID_utilisateur()
    {
        return $this->ID_utilisateur;
    }
    public function setID_utilisateur($ID_utilisateur)
    {
        return $this->ID_utilisateur = $ID_utilisateur;
    }

    public function getID_forum()
    {
        return $this->ID_forum;
    }
    public function setID_forum($ID_forum)
    {
        return $this->ID_forum = $ID_forum;
    }
}