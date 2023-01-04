<?php

require_once("Club.php");
require_once("Secretaria.php");
require_once("President.php");

    class FormInscriptionManager
    {
        //Attribut qui permet de se connecter à la base de données.
        private PDO $_db;

        
        //initialise l'attribut PDO
        public function setDB($db) { $this->_db = $db;}


        //Constructeur de la classe
        public function __construct($db)
        {
            $this->setDB($db);
        }
        

        //Permet d'ajouter à la base de données des 3 objets suivants: un club (Club.php), un président (President.php) et un 
        //Secrétariat (secretariat.php);
        public function add($club,$president,$secretaria,$identifiant,$mdp)
        {
            $req = $this->_db->prepare("INSERT INTO formulaire_inscription (Nom_Club,Sigle_club,Rue,Complement_Rue,Ville,
            Code_Postal,Num_Agrement,fede_affiliation,Statut_asso,num_Siret,Mail_club,web_Site,social_club,
            Tel_Fixe,Tel_Portable,
            Civil_Pres,Nom_Pres,Prenom_Pres,Mail_Pres,Tel_Pres,
            Mail_Secretariat,Tel_Secretariat,identifiant,mdp) 
            VALUES (:Nom_Club,:Sigle_club,:Rue,:Complement_Rue,:Ville,
            :Code_Postal,:Num_Agrement,:fede_affiliation,:Statut_asso,:num_Siret,:Mail_club,:web_Site,:social_club,
            :Tel_Fixe,:Tel_Portable,
            :Civil_Pres,:Nom_Pres,:Prenom_Pres,:Mail_Pres,:Tel_Pres,
            :Mail_Secretariat,:Tel_Secretariat,:identifiant,:mdp)");

            $req->execute(array(
                //Les informations liées au club :
                'Nom_Club' => $club->getNomClub(),
                'Sigle_club' => $club->getSigleClub(),
                'Rue'=> $club-> getAdresseClub(),
                'Complement_Rue'=> $club-> getComplementAdresse(),
                'Ville'=> $club-> getVilleClub(),
                'Code_Postal'=> $club-> getCodePostal(),
                'Num_Agrement' => $club->getNumAgrement(),
                'fede_affiliation' => $club->getFedAffiliation(),
                'Statut_asso' => $club->getStatutAsso(),
                'num_Siret' => $club->getNumSiret(),
                'Mail_club'=> $club-> getMailClub(),
                'web_Site'=> $club-> getSiteClub(),
                'social_club'=> $club-> getResauSocial(),
                'Tel_Fixe'=> $club-> getTelFixe(),
                'Tel_Portable'=> $club-> getTelPortable(),

                //Les informations liées au président
                'Civil_Pres' => $president->getCivilite(),
                'Nom_Pres' => $president->getNom(),
                'Prenom_Pres' => $president->getPrenom(),
                'Mail_Pres' => $president->getMail(),
                'Tel_Pres' => $president->getTel(),


                //Les informations liées au secrétaria
                'Mail_Secretariat' => $secretaria->getMail(),
                'Tel_Secretariat' => $secretaria->getTel(),

                'identifiant' => $identifiant,
                'mdp' => $mdp,


            ));
        }
        
    }

?>