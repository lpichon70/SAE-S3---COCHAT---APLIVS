<?php
    require_once("Conn.php");
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

        public function get($conn){
            $q = $this->_db->query("SELECT * FROM connexion WHERE Identifiant = $conn");
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            if ($donnees)
            {
                return new Conn($donnees);
            }
            else 
            {
                return null;
            }
        }
    }
?>