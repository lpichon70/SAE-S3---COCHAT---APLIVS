<?php
require_once("Rencontre.php");
require_once("Risque.php");
require_once("Clubs.php");
require_once("Declarant.php");

require_once("./Visiteur.php");
require_once("./Receveur.php");
    class BDDManager
    {
        private PDO $_db;

        public function __construct(PDO $db)
        {
            $this->setDb($db);            
        }

        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }


        public function addFicheIncident(Visiteur $clubVisiteur,Receveur $clubReceveur)
        {
            $req = $this->_db->prepare("INSERT INTO formulaire_signalement(
                nom_club_recev,
                num_match,
                categorie,
                date,
                lieu,
                horaires,
                délégués,
                arbitres,
                changement_terrain,
                report_match,
                contact_district,
                contact_police,
                nom_club_visit,
                contact_recev,
                contact_visit,
                moyens_police
                ) 
                VALUES (
                    :nom_club_recev,
                    :num_match,
                    :categorie,
                    :date,
                    :lieu,
                    :horaires,
                    :délégués,
                    :arbitres,
                    :changement_terrain,
                    :report_match,
                    :contact_district,
                    :contact_police,
                    :nom_club_visit,
                )");
            $req->execute(array(
                'nom_club_recev'=> $clubReceveur -> getNomClub(),
                'num_match'=> $clubReceveur -> getNumMatch(),
                'categorie'=> $clubReceveur -> getCategorie(),
                'date'=> $clubReceveur -> getDate(),
                'lieu'=> $clubReceveur -> getLieu(),
                'horaires'=> $clubReceveur -> getHoraires(),
                'délégués'=> $clubReceveur -> getNomDelegue(),
                'arbitres'=> $clubReceveur -> getNbArbitre(),
                'changement_terrain'=> $clubReceveur -> getAdresseTerrain(),
                'report_match'=> $clubReceveur -> getDateRencontre(),
                'contact_district'=> $clubReceveur -> getContactDistrict(),
                'contact_police'=> $clubReceveur -> getContactPolice(),
                'nom_club_visit'=> $clubReceveur -> getNomClubVisiteur()
                ));
        }

        public function addIncidentVisiteur(Visiteur $clubVisiteur)
        {
            $req = $this->_db->prepare("INSERT INTO rencontre (
                Nom_Club_Recevant, Nom_Club_Visiteur, Categorie, Date_Rencontre, Lieu, Horaires) 
                VALUES (:Nom_Club_Recevant, :Nom_Club_Visiteur, :Categorie, :Date_Rencontre, :Lieu, :Horaires)");
            $req->execute(array(
            'Nom_Club_Recevant' => $rencontre->_equipe1,
            'Nom_Club_Visiteur' => $rencontre->_equipe2,
            'Categorie' =>  $rencontre->_categorie,
            'Date_Rencontre' =>  $rencontre->_date,
            'Lieu' =>  $rencontre->_lieu,
            'Horaires' =>  $rencontre->_horaire));
        }










        public function addRencontre($rencontre)
        {
            $req = $this->_db->prepare("INSERT INTO rencontre (Nom_Club_Recevant, Nom_Club_Visiteur, Categorie, Date_Rencontre, Lieu, Horaires) VALUES (:Nom_Club_Recevant, :Nom_Club_Visiteur, :Categorie, :Date_Rencontre, :Lieu, :Horaires)");
            $req->execute(array(
            'Nom_Club_Recevant' => $rencontre->_equipe1,
            'Nom_Club_Visiteur' => $rencontre->_equipe2,
            'Categorie' =>  $rencontre->_categorie,
            'Date_Rencontre' =>  $rencontre->_date,
            'Lieu' =>  $rencontre->_lieu,
            'Horaires' =>  $rencontre->_horaire));
        }

        public function addRisque($risque)
        {
            $req = $this->_db->prepare("INSERT INTO login (login, hash) VALUES (:login, :hash)");
            $req->execute(array(
            'login' => $login->getLogin(),
            'hash' => $login->getHash()
            ));
        }

        public function addClubs($clubs)
        {
            $req = $this->_db->prepare("INSERT INTO login (login, hash) VALUES (:login, :hash)");
            $req->execute(array(
            'login' => $login->getLogin(),
            'hash' => $login->getHash()
            ));
        }

        public function addDeclarant($declarant)
        {
            $req = $this->_db->prepare("INSERT INTO login (login, hash) VALUES (:login, :hash)");
            $req->execute(array(
            'login' => $login->getLogin(),
            'hash' => $login->getHash()
            ));
        }
    }
?>