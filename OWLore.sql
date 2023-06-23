#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Forums
#------------------------------------------------------------

CREATE TABLE Forums(
        ID_forum  Int  Auto_increment  NOT NULL ,
        Nom_forum Varchar (50) NOT NULL
	,CONSTRAINT Forums_PK PRIMARY KEY (ID_forum)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Rôles
#------------------------------------------------------------

CREATE TABLE Roles(
        ID_role  Int  Auto_increment  NOT NULL ,
        Nom_role Varchar (50) NOT NULL
	,CONSTRAINT Roles_PK PRIMARY KEY (ID_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        ID_utilisateur     Int  Auto_increment  NOT NULL ,
        Nom_utilisateur    Varchar (50) NOT NULL ,
        Adresse_e_mail     Varchar (100) NOT NULL ,
        Mot_de_passe       Varchar (50) NOT NULL ,
        Date_d_inscription Date NOT NULL ,
        ID_role            Int NOT NULL
	,CONSTRAINT Utilisateurs_PK PRIMARY KEY (ID_utilisateur)

	,CONSTRAINT Utilisateurs_Roles_FK FOREIGN KEY (ID_role) REFERENCES Roles(ID_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sujets
#------------------------------------------------------------

CREATE TABLE Sujets(
        ID_sujet             Int  Auto_increment  NOT NULL ,
        Titre_sujet          Varchar (150) NOT NULL ,
        Date_dernier_message Datetime NOT NULL ,
        ID_utilisateur       Int NOT NULL ,
        ID_forum             Int NOT NULL
	,CONSTRAINT Sujets_PK PRIMARY KEY (ID_sujet)

	,CONSTRAINT Sujets_Utilisateurs_FK FOREIGN KEY (ID_utilisateur) REFERENCES Utilisateurs(ID_utilisateur)
	,CONSTRAINT Sujets_Forums0_FK FOREIGN KEY (ID_forum) REFERENCES Forums(ID_forum)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commentaires
#------------------------------------------------------------

CREATE TABLE Commentaires(
        ID_commentaire      Int  Auto_increment  NOT NULL ,
        Contenu_commentaire Text NOT NULL ,
        Date_publication    Datetime NOT NULL ,
        ID_utilisateur      Int NOT NULL ,
        ID_sujet            Int NOT NULL
	,CONSTRAINT Commentaires_PK PRIMARY KEY (ID_commentaire)

	,CONSTRAINT Commentaires_Utilisateurs_FK FOREIGN KEY (ID_utilisateur) REFERENCES Utilisateurs(ID_utilisateur)
	,CONSTRAINT Commentaires_Sujets0_FK FOREIGN KEY (ID_sujet) REFERENCES Sujets(ID_sujet)
)ENGINE=InnoDB;

