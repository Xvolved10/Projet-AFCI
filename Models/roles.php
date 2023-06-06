<?php


class Roles extends Database{
    private $ID_role;
    private $Nom_role;
   

    public function getID_role()
    {
        return $this->ID_role;
    }
    public function setID_role($ID_role)
    {
        return $this->ID_role = $ID_role;
    }

    public function getNom_role()
    {
        return $this->Nom_role;
    }
    public function setNom_role($Nom_role)
    {
        return $this->Nom_role = $Nom_role;
    }
}