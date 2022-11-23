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
            $q = $this->_db->query("SELECT * FROM connexion WHERE Identifiant = '$conn'");
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            /*var_dump($q);
            echo '<br>';
            var_dump($donnees);*/
            if ($donnees != false)
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