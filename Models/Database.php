<?php

class Database{
    protected $pdo = null;
    public function __construct()
    {
        try{
            // Établir une connexion à la base de données MySQL en utilisant les informations fournies (hôte, nom de la base de données, nom d'utilisateur, mot de passe)
            $this->pdo = new PDO("mysql:host=" .HOST . ";dbname=" .DBNAME.";charset=utf8;",LOGIN,PASSWORD);
            
            // Définir le mode de gestion des erreurs pour générer des exceptions en cas de problème
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(Exception $ex){
            // En cas d'erreur, afficher le message d'erreur correspondant
            $ex->getMessage();
        }
    }
}

?>
