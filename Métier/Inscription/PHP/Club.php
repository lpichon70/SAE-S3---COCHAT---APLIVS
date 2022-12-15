<?php

    class Club
    {

        private $_nomClub;
        public function setNomClub($nc) { $this->_nomClub = $nc; }
        public function getNomClub() {return  $this->_nomClub; }

        private $_sigleClub;
        public function setSigleClub($sc) { $this->_sigleClub = $sc; }
        public function getSigleClub() {return  $this->_sigleClub; }

        private $_adresseClub;
        public function setAdresseClub($ac) { $this->_adresseClub = $ac; }
        public function getAdresseClub() {return  $this->_adresseClub; }

        private $_complementAdresse; //Attention cette valeur peut être null !!!!!
        public function setComplementAdresse($r) { $this->_complementAdresse = $r; }
        public function getComplementAdresse() {return  $this->_complementAdresse; }

        private $_villeClub;
        public function setVilleClub($r) { $this->_villeClub = $r; }
        public function getVilleClub() {return  $this->_villeClub; }

        private $_codePostal;
        public function setCodePostal($r) { $this->_codePostal = $r; }
        public function getCodePostal() {return  $this->_codePostal; }

        private $_numAgrement;
        public function setNumAgrement($r) { $this->_numAgrement = $r; }
        public function getNumAgrement() {return  $this->_numAgrement; }

        private $_fedAffiliation;
        public function setFedAffiliation($r) { $this->_fedAffiliation = $r; }
        public function getFedAffiliation() {return  $this->_fedAffiliation; }

        private $_statutAsso;
        public function setStatutAsso($r) { $this->_statutAsso = $r; }
        public function getStatutAsso() {return  $this->_statutAsso; }

        private $_numSiret;
        public function setNumSiret($r) { $this->_numSiret = $r; }
        public function getNumSiret() {return  $this->_numSiret; }

        private $_mailClub;
        public function setMailClub($r) { $this->_mailCLub = $r; }
        public function getMailClub() {return  $this->_mailCLub; }

        private $_siteClub;
        public function setSiteClub($r) { $this->_siteClub = $r; }
        public function getSiteClub() {return  $this->_siteClub; }

        private $_reseauSocialClub;
        public function setResauSocial($r) { $this->_reseauSocialClub = $r; }
        public function getResauSocial() {return  $this->_reseauSocialClub; }

        private $_telFixe;
        public function setTelFixe($r) { $this->_telFixe = $r; }
        public function getTelFixe() {return  $this->_telFixe; }

        private $_telPortable;
        public function setTelPortable($r) { $this->_telPortable = $r; }
        public function getTelPortable() {return  $this->_telPortable; }

        public function __construct($nomClub, $sigleClub, $adresseClub, $complementAdresse, 
        $villeClub, $codePostal, $numAgrement, $fedAffiliation, $statutAsso, 
        $numSiret, $mailClub, $siteClub, $reseauSocialClub, $telFixe, $telPortable) 
        {
            $this->setNomClub($nomClub);
            $this->setSigleClub($sigleClub);
            $this->setAdresseClub($adresseClub);
            $this->setComplementAdresse($complementAdresse);
            $this->setVilleClub($villeClub);
            $this->setCodePostal($codePostal);
            $this->setNumAgrement($numAgrement);
            $this->setFedAffiliation($fedAffiliation);
            $this->setStatutAsso($statutAsso);
            $this->setNumSiret($numSiret);
            $this->setMailClub($mailClub);
            $this->setSiteClub($siteClub);
            $this->setResauSocial($reseauSocialClub);
            $this->setTelFixe($telFixe);
            $this->setTelPortable($telPortable);
        }

        public function __toString()
        {
            return "Nom du club : " . $this->getNomClub() . "</br> </br>" .
            "Adresse du club : " . $this->getAdresseClub() . "</br> </br>" .
            "Complément d'adresse du club : " . $this->getComplementAdresse() . "</br> </br>" .
            "Ville du club : " . $this->getVilleClub() . "</br> </br>" .
            "Code postal : " . $this->getCodePostal() . "</br> </br>" .
            "Numéro agrement : " . $this->getNumAgrement() . "</br> </br>" .
            "Federation d'affiliation : " . $this->getFedAffiliation() . "</br> </br>" .
            "Statut association : " . $this->getStatutAsso() . "</br> </br>" .
            "Numéro Siret : " . $this->getNumSiret() . "</br> </br>" .
            "Mail du club : " . $this->getMailClub() . "</br> </br>" .
            "Site du club : " . $this->getSiteClub() . "</br> </br>" .
            "Réseau social du club : " . $this->getResauSocial() . "</br> </br>" .
            "Téléphone fixe : " . $this->getTelFixe() . "</br> </br>" .
            "Téléphone portable : " . $this->getTelPortable()  ;
        }
    }
?>