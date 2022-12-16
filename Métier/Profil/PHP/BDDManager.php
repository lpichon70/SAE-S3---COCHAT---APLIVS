<?php
    require_once("Club.php");
    class BDDManager
    {
        private $_db;

        //constructeur de BDDManager
        public function __construct($db)
        {
            $this->setDb($db);            
        }

        //initialise la BDD
        public function setDb($db)
        {
            $this->_db = $db;
        }

        //retourne le club (id) passé en paramètre
        public function get($club)
        {
            $q = $this->_db->query("SELECT * FROM formulaire_inscription WHERE id_club = $club");
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Club($donnees);
        }

        //met à jour le club (id) passé en paramètre 
        public function set($data, $id)
        {
            $sql = "UPDATE formulaire_inscription SET nom_club=?, sigle_club=?, logo_club=?, ville=?, rue=?, complement_rue=?, code_postal=?, num_agrement=?, fede_affiliation=?, statut_asso=?, num_siret=?, mail_club=?, web_site=?, social_club=?, tel_fixe=?, tel_portable=?, civil_pres=?, nom_pres=?, prenom_pres=?, mail_pres=?, tel_pres=?, mail_secretariat=?, tel_secretariat=? WHERE id_club=$id";
            $stmt= $this->_db->prepare($sql);
            $stmt->execute($data);
        }
    }
?>