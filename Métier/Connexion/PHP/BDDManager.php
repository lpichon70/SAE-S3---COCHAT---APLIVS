<?php
    require_once("Conn.php");
    class BDDManager
    {
        private $_db;

        //Constructeur de ka classe
        public function __construct($db)
        {
            $this->setDb($db);            
        }

        //Permet d'initialiser la base de données
        //Paramètre : adresse de la base de données
        public function setDb($db)
        {
            $this->_db = $db;
        }

        //Renvoie true si l'identifiant et le mot de passe envoyé par l'utilisateur concordes (utilisé notament pour une connexion)
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


        //Permet de récupérer l'identifiant d'un utilisateur avec son id
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
        
        //permet de récupérer le password d'un utilisateur associer à l'identifiant.&
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

        //Permet de connaitre le status d'un utilisateur associé à son ID
        public function getStatutByID($id)
        {
            $q = $this->_db->query("SELECT Statut FROM connexion WHERE Identifiant = '$id'");
            $statut = $q->fetch(PDO::FETCH_ASSOC);
            return $statut['Statut'];
        }



        // Fonction qui concerne l'identifiant et le mot de passe des clubs
        public function getClub($id, $mdp)
        {
            if ($this->getIdentifiantClub($id)!=null)
            {
                if ($this->getPasswordByIdClub($id) == $mdp)
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


        //Permet de récupérer l'identifiant d'un utilisateur avec son id
        public function getIdentifiantClub($id){
            $q = $this->_db->query("SELECT identifiant FROM formulaire_inscription WHERE identifiant = '$id'");
            $identifiant = $q->fetch(PDO::FETCH_ASSOC);
            if ($identifiant != false)
            {
                return $identifiant['identifiant'];
            }
            else 
            {
                return null;
            }
    
        }
        
        //permet de récupérer le password d'un utilisateur associer à l'identifiant.&
        public function getPasswordByIdClub($id)
        {
            $q = $this->_db->query("SELECT mdp FROM formulaire_inscription WHERE identifiant = '$id'");
            $password = $q->fetch(PDO::FETCH_ASSOC);
            if ($password != false)
            {
                return $password['mdp'];
            }
            else 
            {
                return null;
            }
        }
    }
?>