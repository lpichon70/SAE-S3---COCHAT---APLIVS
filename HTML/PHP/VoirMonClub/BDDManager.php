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
            $q = $this->_db->query("SELECT * FROM login WHERE Nom_Club = $club");
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Club($donnees['login'], $donnees['hash']);
        }
    }
?>