<?php


class Sujets extends Database{
    private $ID_sujet;
    private $Titre_sujet;
    private $Date_dernier_message;
    private $ID_utilisateur;
    private $ID_forum;
    private $offset ;
    private $ID_commentaire;
    private $Contenu_commentaire;	
    private $Date_publication;

   

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

    public function getOffset()
    {
        return $this->offset;
    }
    public function setOffset($offset)
    {
        return $this->offset = $offset;
    }

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


    public function postsujet(){

        $insert = $this->pdo->prepare("INSERT INTO articles (Titre_sujet,ID_utilisateur)
        VALUES(?,?) ");

        $insert->bindValue(1, $this->Titre_sujet, PDO::PARAM_STR);
        $insert->bindValue(2, $this->ID_utilisateur, PDO::PARAM_INT);
        $insert->execute();
    }

    // public function affichage(){
    //     $requete = $this->pdo->prepare("SELECT ID_sujet,Titre_sujet,avatar,pseudo,ID_utilisateur  FROM sujets INNER JOIN utilisateurs ON sujets.ID_utilisateur = utilisateurs.ID_utilisateur LIMIT 6 OFFSET ?");
    //     $requete->bindValue(1, $this->offset, PDO::PARAM_INT);
    //     $requete->execute();
    //     return $requete->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function affichage(){
        $requete = $this->pdo->prepare("SELECT sujets.ID_sujet, sujets.Titre_sujet, utilisateurs.avatar, utilisateurs.pseudo, sujets.ID_utilisateur FROM sujets INNER JOIN utilisateurs ON sujets.ID_utilisateur = utilisateurs.ID_utilisateur LIMIT 6 OFFSET ?");
        $requete->bindValue(1, $this->offset, PDO::PARAM_INT);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function numberPage(){
        $requete = $this->pdo->query("SELECT COUNT(ID_sujet)/8 nbPage FROM sujets");
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function sujetsId(){
        $requete = $this->pdo->prepare("SELECT ID_sujet,Titre_sujet,avatar, pseudo  FROM sujets INNER JOIN utilisateurs ON ID_utilisateur = utilisateurs.ID_utilisateur WHERE ID_sujet = ? ");
        $requete->bindValue(1, $this->ID_sujet, PDO::PARAM_INT);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

}