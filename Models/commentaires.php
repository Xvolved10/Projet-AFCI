<?php


class Commentaires extends Database{
    private $ID_commentaire;
    private $Contenu_commentaire;
    private $Date_publication;
    private $ID_utilisateur;
    private $ID_sujet;
   

    public function getID_commentaire()
    {
        return $this->ID_commentaire;
    }
    public function setID_commentaire($ID_commentaire)
    {
        return $this->ID_commentaire = $ID_commentaire;
    }

    public function getContenu_commentaire()
    {
        return $this->Contenu_commentaire;
    }
    public function setContenu_commentaire($Contenu_commentaire)
    {
        return $this->Contenu_commentaire = $Contenu_commentaire;
    }

    public function getDate_publication()
    {
        return $this->Date_publication;
    }
    public function setDate_publication($Date_publication)
    {
        return $this->Date_publication = $Date_publication;
    }

    public function getID_utilisateur()
    {
        return $this->ID_utilisateur;
    }
    public function setID_utilisateur($ID_utilisateur)
    {
        return $this->ID_utilisateur = $ID_utilisateur;
    }

    public function getID_sujet()
    {
        return $this->ID_sujet;
    }
    public function setID_sujet($ID_sujet)
    {
        return $this->ID_sujet = $ID_sujet;
    }
}