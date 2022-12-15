<?php
    class Conn
    {
        private string $_identifiant;
        private string $_mdp;
        private string $_statut;


        //Constructeur de la classe
        public function __construct($data)
        {
            $this->setIdentifiant($data['Identifiant']);
            $this->setMdp($data['Mdp']);
            $this->setStatut($data['Statut']);
        }

        //get et set
        public function getIdentifiant(){return $this->_identifiant;}
        public function setIdentifiant($var){$this->_identifiant = $var;}

        public function getMdp(){return $this->_mdp;}
        public function setMdp($var){$this->_mdp = $var;}

        public function getStatut(){return $this->_statut;}
        public function setStatut($var){$this->_statut = $var;}
    }
?>