<?php

    //Cette classe Secretariat regroupe toutes les données dont un secretariat à besoins
    //Elle est utiliser pour mieux se repérer lors de l'insersion de données (inscription) au autres requêtes.
    class Secretaria
    {
        private $_mail;
        public function setMail($r) {$this->_mail = $r;}
        public function getMail() { return $this->_mail;}

        private $_tel;
        public function setTel($r) {$this->_tel = $r;}
        public function getTel() { return $this->_tel;}

        public function __construct($mail,$tel)
        {
            $this->setMail($mail);
            $this->setTel($tel);
        }

        public function __toString()
        {
            return "Mail secrétaria : " . $this->getMail() . "</br> </br>" .
            "Numéro de téléphone : " . $this->getTel();
        }
    }


?>