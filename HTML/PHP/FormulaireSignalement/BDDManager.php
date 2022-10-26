<?php
require_once("rencontre.php");
require_once("risque.php");
require_once("clubs.php");
require_once("declarant.php");
    class BDDManager
    {
        private $_db;
        public function __construct($db)
        {
            $this->setDb($db);            
        }

        public function setDb($db)
        {
            $this->_db = $db;
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