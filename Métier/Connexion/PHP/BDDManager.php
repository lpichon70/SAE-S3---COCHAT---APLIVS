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

        public function get($id, $mdp)
        {
            if ($this->getIdentifiant($id)!=null)
            {
                if ($this->getPasswordById($id) == $mdp)
                {
                    return true;
                }
                else 
                {
                    return false;
                }
            }
            else 
            {
                return false;
            }
        }

        public function getIdentifiant($id){
            $q = $this->_db->query("SELECT Identifiant FROM connexion WHERE Identifiant = '$id'");
            $identifiant = $q->fetch(PDO::FETCH_ASSOC);
            if ($identifiant != false)
            {
                return $identifiant['Identifiant'];
            }
            else 
            {
                return null;
            }
    
        }
        
        public function getPasswordById($id)
        {
            $q = $this->_db->query("SELECT Mdp FROM connexion WHERE Identifiant = '$id'");
            $password = $q->fetch(PDO::FETCH_ASSOC);
            if ($password != false)
            {
                return $password['Mdp'];
            }
            else 
            {
                return null;
            }
        }

        public function getStatutByID($id)
        {
            $q = $this->_db->query("SELECT Statut FROM connexion WHERE Identifiant = '$id'");
            $statut = $q->fetch(PDO::FETCH_ASSOC);
            return $statut['Statut'];
        }
    }
?>