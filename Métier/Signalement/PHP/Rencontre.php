<?php
    class Rencontre
    {
        public $_districts;
        public $_nMatch;
        public $_equipe1;
        public $_equipe2;
        public $_categorie;
        public $_date;
        public $_lieu;
        public $_horaire;
        public function __construct($districts, $nMatch, $equipe1, $equipe2, $categorie, $date, $lieu, $horaire)
        {
            $this->_districts = $districts;
            $this->_nMatch = $nMatch;
            $this->_equipe1 = $equipe1;
            $this->_equipe2 = $equipe2;
            $this->_categorie = $categorie;
            $this->_date = $date;
            $this->_lieu = $lieu;
            $this->_horaire = $horaire;
        }
    }
?>