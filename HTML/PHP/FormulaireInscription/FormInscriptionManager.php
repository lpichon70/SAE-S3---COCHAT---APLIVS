<?php

require_once("Club.php");
require_once("Secretaria.php");
require_once("President.php");

    class FormInscriptionManager
    {
        //Attribut qui permet de se connecter à la base de données.
        private PDO $_db;

        public function setDB($db) { $this->_db = $db;}

        public function __construct($db)
        {
            $this->setDB($db);
        }
        
        public function add($club,$president,$secretaria)
        {
            $req = $this->_db->prepare("INSERT INTO Inscription (Nom_Club,Sigle_club,Rue,Complement_Rue,Ville,
            Code_Postal,Num_Agrement,Federation,Statut,Siret,Mail,Adresse_Site,Reseau_social,
            Tel_Fixe,Tel_Portable,
            Civilite_Pres,Nom_Pres,Prenom_Pres,Mail_Pres,Tel_Pres,
            Mail_Secretariat,Tel_Secretariat) 
            VALUES (:Nom_Club,:Sigle_club,:Rue,:Complement_Rue,:Ville,
            :Code_Postal,:Num_Agrement,:Federation,:Statut,:Siret,:Mail,:Adresse_Site,:Reseau_social,
            :Tel_Fixe,:Tel_Portable,
            :Civilite_Pres,:Nom_Pres,:Prenom_Pres,:Mail_Pres,:Tel_Pres,
            :Mail_Secretariat,:Tel_Secretariat)");

            $req->execute(array(
                //Les informations liées au club :
                'Nom_Club' => $club->getNomClub(),
                'Sigle_club' => $club->getSigleClub(),
                'Rue'=> $club-> getAdresseClub(),
                'Complement_Rue'=> $club-> getComplementAdresse(),
                'Ville'=> $club-> getVilleClub(),
                'Code_Postal'=> $club-> getCodePostal(),
                'Num_Agrement' => $club->getNumAgrement(),
                'Federation' => $club->getFedAffiliation(),
                'Statut' => $club->getStatutAsso(),
                'Siret' => getNumSiret(),
                'Mail'=> $club-> getMailClub(),
                'Adresse_Site'=> $club-> getSiteClub(),
                'Reseau_social'=> $club-> getResauSocial(),
                'Tel_Fixe'=> $club-> getTelFixe(),
                'Tel_Portable'=> $club-> getTelPortable(),


                //Les informations liées au président
                'Civilite_Pres' => $president->getMail(),
                'Nom_Pres' => $president->getNom(),
                'Prenom_Pres' => $president->getPrenom(),
                'Mail_Pres' => $president->getMail(),
                'Tel_Pres' => $president->getTel(),


                //Les informations liées au secrétaria
                'Mail_Secretariat' => $secretaria->getMail(),
                'Tel_Secretariat' => $secretaria->getTel()


            ));
        }
        
    }

?>