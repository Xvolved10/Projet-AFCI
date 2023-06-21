<?php


class Sujets extends Database
{
    private $ID_sujet;
    private $Titre_sujet;
    private $Date_creation;
    private $ID_utilisateur;
    private $ID_forum;
    private $offset;
    private $ID_commentaire;
    private $Contenu_commentaire;
    private $Date_publication;
    private $pseudo;



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
    public function getDate_creation()
    {
        return $this->Date_creation;
    }
    public function setDate_creation($Date_creation)
    {
        return $this->Date_creation = $Date_creation;
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

    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($pseudo)
    {
        return $this->pseudo = $pseudo;
    }

    public function postsujet()
    {

        $insert = $this->pdo->prepare("INSERT INTO sujets (Titre_sujet,ID_utilisateur)
        VALUES(?,?) ");

        $insert->bindValue(1, $this->Titre_sujet, PDO::PARAM_STR);
        $insert->bindValue(2, $this->ID_utilisateur, PDO::PARAM_INT);
        $insert->execute();
    }


    public function affichage()
    {
        $requete = $this->pdo->prepare("SELECT sujets.ID_sujet, sujets.Titre_sujet,sujets.Date_creation, utilisateurs.avatar, utilisateurs.pseudo, sujets.ID_utilisateur 
                                       FROM sujets 
                                       INNER JOIN utilisateurs ON sujets.ID_utilisateur = utilisateurs.ID_utilisateur 
                                       ORDER BY sujets.Date_creation DESC 
                                       LIMIT 6 OFFSET ?");
        $requete->bindValue(1, $this->offset, PDO::PARAM_INT);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }


    public function numberPage()
    {
        $requete = $this->pdo->query("SELECT COUNT(ID_sujet)/8 nbPage FROM sujets");
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function sujetsId()
    {
        $requete = $this->pdo->prepare("SELECT sujets.ID_sujet, sujets.Titre_sujet, utilisateurs.avatar, utilisateurs.pseudo FROM sujets INNER JOIN utilisateurs ON sujets.ID_utilisateur = utilisateurs.ID_utilisateur WHERE sujets.ID_sujet = ? ");
        $requete->bindValue(1, $this->ID_sujet, PDO::PARAM_INT);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function AjouterCommentaire()
    {
        $insComm = $this->pdo->prepare("INSERT INTO commentaires (Contenu_commentaire, ID_utilisateur, ID_sujet) VALUES (?, ?, ?)");
        $insComm->bindValue(1, $this->Contenu_commentaire, PDO::PARAM_STR);
        $insComm->bindValue(2, $this->ID_utilisateur, PDO::PARAM_INT);
        $insComm->bindValue(3, $this->ID_sujet, PDO::PARAM_INT);
        $insComm->execute();
    }
    public function getCommentaires()
    {
        $requete = $this->pdo->prepare("SELECT commentaires.ID_commentaire, commentaires.Contenu_commentaire, commentaires.Date_publication, utilisateurs.pseudo
                                   FROM commentaires
                                   INNER JOIN utilisateurs ON commentaires.ID_utilisateur = utilisateurs.ID_utilisateur
                                   WHERE commentaires.ID_sujet = ?
                                   ORDER BY commentaires.Date_publication ASC");
        $requete->bindValue(1, $this->ID_sujet, PDO::PARAM_INT);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCommentairesLimit($limit, $offset, $ID_sujet)
    {
        $requete = $this->pdo->prepare("SELECT commentaires.ID_commentaire, commentaires.Contenu_commentaire, commentaires.Date_publication, utilisateurs.pseudo
        FROM commentaires
        INNER JOIN utilisateurs ON commentaires.ID_utilisateur = utilisateurs.ID_utilisateur
        WHERE commentaires.ID_sujet = :ID_sujet
        ORDER BY commentaires.Date_publication ASC
        LIMIT :limit OFFSET :offset");

        $requete->bindValue(':ID_sujet', $ID_sujet, PDO::PARAM_INT);
        $requete->bindValue(':limit', $limit, PDO::PARAM_INT);
        $requete->bindValue(':offset', $offset, PDO::PARAM_INT);
        $requete->execute();

        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
    public function supprimerSujetEtCommentaires()
{
    // Supprimer les commentaires du sujet
    $supprimerCommentaires = $this->pdo->prepare("DELETE FROM commentaires WHERE ID_sujet = ?");
    $supprimerCommentaires->bindValue(1, $this->ID_sujet, PDO::PARAM_INT);
    $supprimerCommentaires->execute();

    // Supprimer le sujet
    $supprimerSujet = $this->pdo->prepare("DELETE FROM sujets WHERE ID_sujet = ?");
    $supprimerSujet->bindValue(1, $this->ID_sujet, PDO::PARAM_INT);
    $supprimerSujet->execute();
}

}
