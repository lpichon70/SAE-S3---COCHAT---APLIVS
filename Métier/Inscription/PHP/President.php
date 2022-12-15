<?php

    class President
    {
        private $_civilite;
        public function setCivilite($r) {$this->_civilite = $r;}
        public function getCivilite() {return $this->_civilite;}

        private $_nom;
        public function setNom($r) {$this->_nom = $r;}
        public function getNom() {return $this->_nom;}


        private $_prenom;
        public function setPrenom($r) {$this->_prenom = $r;}
        public function getPrenom() {return $this->_prenom;}


        private $_mail;
        public function setMail($r) {$this->_mail = $r;}
        public function getMail() {return $this->_mail;}


        private $_tel;
        public function setTel($r) {$this->_tel = $r;}
        public function getTel() {return $this->_tel;}


        public function __construct($civilite,$nom,$prenom,$mail,$telephone)
        {
            $this->setCivilite($civilite);
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setMail($mail);
            $this->setTel($telephone);
        }


        public function __toString()
        {
            return "Civilite du président : " . $this->getCivilite() . "</br> </br>" .
            "Nom : " . $this->getNom() . "</br> </br>" . 
            "Prenom : " . $this->getPrenom() . "</br> </br>" .
            "eMail : " . $this->getMail() . "</br> </br>" .
            "Numéro de téléphone : " . $this->getTel() . "</br> </br>" ;
        }
    }
    
?>