<?php
    class Conn
    {
        private string $_identifiant;
        private string $_mdp;
        private string $_statut;

        public function __construct($data)
        {
            $this->setIdentifiant($data['Identifiant']);
            $this->setMdp($data['Mdp']);
            $this->setStatus($data['Statut']);
        }

        public function getIdentifiant(){return $this->_identifiant;}
        public function setIdentifiant($var){$this->_identifiant = $var;}

        public function getMdp(){return $this->_mdp;}
        public function setMdp($var){$this->_mdp = $var;}

        public function getStatut(){return $this->_statut;}
        public function setStatus($var){return $this->_statut = $var;}
    }
?>