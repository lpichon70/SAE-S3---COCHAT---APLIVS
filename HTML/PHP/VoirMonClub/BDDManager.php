<?php
    require_once("Club.php");
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

        public function get($club){
            $q = $this->_db->query("SELECT * FROM formulaire_inscription WHERE id_club = $club");
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Club($donnees);
        }
    }
?>