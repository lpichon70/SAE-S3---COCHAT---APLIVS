<?php
    class Clubs
    {
        public $_nomContactRecevant;
        public $_contactRecevant;
        public $_telContactRecevant;
        public $_nomContactVisisteur;
        public $_contactVisiteur;
        public $_telContactVisiteur;
        public $_liaison;
        public function __construct($nomContactRecevant, $contactRecevant, $telContactRecevant, $nomContactVisisteur, $contactVisiteur, $telContactVisiteur, $liaison)
        {
            $this->_nomContactRecevant = $nomContactRecevant;
            $this->_contactRecevant = $contactRecevant;
            $this->_telContactRecevant = $telContactRecevant;
            $this->_nomContactVisisteur = $nomContactVisisteur;
            $this->_contactVisiteur = $contactVisiteur;
            $this->_telContactVisiteur = $telContactVisiteur;
            $this->_liaison = $liaison;
        }
    }
?>