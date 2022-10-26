<?php
    class Declarant
    {
        public $_nomDeclarantRecevant;
        public $_prenomDeclarantRecevant;
        public $_fonctionDeclarantRecevant;
        public $_telDeclarantRecevant;
        public $_nomDeclarantVisiteur;
        public $_prenomDeclarantVisiteur;
        public $_fonctionDeclarantVisiteur;
        public $_telDeclarantVisiteur;
        public $_lieuDeclaration;
        public $_dateDeclaration;
        public function __construct($nomDeclarantRecevant, $prenomDeclarantRecevant, $fonctionDeclarantRecevant, $telDeclarantRecevant, $nomDeclarantVisiteur, $prenomDeclarantVisiteur, $fonctionDeclarantVisiteur, $telDeclarantVisiteur, $lieuDeclaration, $dateDeclaration)
        {
            $this->_nomDeclarantRecevant = $nomDeclarantRecevant;
            $this->_prenomDeclarantRecevant = $prenomDeclarantRecevant;
            $this->_fonctionDeclarantRecevant = $fonctionDeclarantRecevant;
            $this->_telDeclarantRecevant = $telDeclarantRecevant;
            $this->_nomDeclarantVisiteur = $nomDeclarantVisiteur;
            $this->_prenomDeclarantVisiteur = $prenomDeclarantVisiteur;
            $this->_fonctionDeclarantVisiteur = $fonctionDeclarantVisiteur;
            $this->_telDeclarantVisiteur = $telDeclarantVisiteur;
            $this->_lieuDeclaration = $lieuDeclaration;
            $this->_dateDeclaration = $dateDeclaration;
        }
    }
?>