<?php


class Forums extends Database{
    private $ID_forum;
    private $Nom_forum;
   

    public function getID_forum()
    {
        return $this->ID_forum;
    }
    public function setID_forum($ID_forum)
    {
        return $this->ID_forum = $ID_forum;
    }

    public function getNom_forum()
    {
        return $this->Nom_forum;
    }
    public function setNom_forum($Nom_forum)
    {
        return $this->Nom_forum = $Nom_forum;
    }
}