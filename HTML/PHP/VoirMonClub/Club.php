<?php
    class Club
    {
        private $_nomClub;
        private $_sigle;
        private $_ville;
        private $_rue;
        private $_complementRue;
        private $_codePostal;
        private $_numAgrement;
        private $_federation;
        private $_statut;
        private $_siret;
        private $_mailClub;
        private $_siteClub;
        private $_reseau;
        private $_telFixeClub;
        private $_telPortableClub;
        private $_civilitePres;
        private $_nomPres;
        private $_prenomPres;
        private $_mailPres;
        private $_telPres;
        private $_mailSecret;
        private $_telSecret;

        public function __construct($data)
        {
            $this->setNomClub($data['']);
            $this->setSigle($data['']);
            $this->setVille($data['']);
            $this->setRue($data['']);
            $this->setComplementRue($data['']);
            $this->setCodePostal($data['']);
            $this->setNumAgrement($data['']);
            $this->setFederation($data['']);
            $this->setStatut($data['']);
            $this->setSiret($data['']);
            $this->setMailClub($data['']);
            $this->setSiteClub($data['']);
            $this->setReseau($data['']);
            $this->setTelFixeClub($data['']);
            $this->setTelPortableClub($data['']);
            $this->setCivilitePres($data['']);
            $this->setNomPres($data['']);
            $this->setPrenomPres($data['']);
            $this->setMailPres($data['']);
            $this->setTelPres($data['']);
            $this->setMailSecret($data['']);
            $this->setTelSecret($data['']);
        }

        public function getNomClub()
        {
            return $this->_nomClub;
        }

        public function setNomClub($var)
        {
            $this->_nomClub = $var;
        }

        public function getSigle()
        {
            return $this->_sigle;
        }

        public function setSigle($var)
        {
            $this->_sigle = $var;
        }

        public function getVille()
        {
            return $this->_ville;
        }

        public function setVille($var)
        {
            $this->_ville = $var;
        }

        public function getRue()
        {
            return $this->_rue;
        }

        public function setRue($var)
        {
            $this->_rue = $var;
        }

        public function getComplementRue()
        {
            return $this->_complementRue;
        }

        public function setComplementRue($var)
        {
            $this->_complementRue = $var;
        }

        public function getCodePostal()
        {
            return $this->_codePostal;
        }

        public function setCodePostal($var)
        {
            $this->_codePostal = $var;
        }

        public function getNumAgrement()
        {
            return $this->_numAgrement;
        }

        public function setNumAgrement($var)
        {
            $this->_numAgrement = $var;
        }

        public function getFederation()
        {
            return $this->_federation;
        }

        public function setFederation($var)
        {
            $this->_federation = $var;
        }

        public function getStatut()
        {
            return $this->_statut;
        }

        public function setStatut($var)
        {
            $this->_statut = $var;
        }

        public function getSiret()
        {
            return $this->_siret;
        }

        public function setSiret($var)
        {
            $this->_siret = $var;
        }

        public function getMailClub()
        {
            return $this->_mailClub;
        }

        public function setMailClub($var)
        {
            $this->_mailClub = $var;
        }

        public function getSiteClub()
        {
            return $this->_siteClub;
        }

        public function setSiteClub($var)
        {
            $this->_siteClub = $var;
        }

        public function getReseau()
        {
            return $this->_reseau;
        }

        public function setReseau($var)
        {
            $this->_reseau = $var;
        }

        public function getTelFixeClub()
        {
            return $this->_telFixeClub;
        }

        public function setTelFixeClub($var)
        {
            $this->_telFixeClub = $var;
        }

        public function getTelPortableClub()
        {
            return $this->_telPortableClub;
        }

        public function setTelPortableClub($var)
        {
            $this->_telPortableClub = $var;
        }

        public function getCivilitePres()
        {
            return $this->_civilitePres;
        }

        public function setCivilitePres($var)
        {
            $this->_civilitePres = $var;
        }

        public function getNomPres()
        {
            return $this->_nomPres;
        }

        public function setNomPres($var)
        {
            $this->_nomPres = $var;
        }

        public function getPrenomPres()
        {
            return $this->_prenomPres;
        }

        public function setPrenomPres($var)
        {
            $this->_renomPres = $var;
        }

        public function getMailPres()
        {
            return $this->_mailPres;
        }

        public function setMailPres($var)
        {
            $this->_mailPres = $var;
        }

        public function getTelPres()
        {
            return $this->_telPres;
        }

        public function setTelPres($var)
        {
            $this->_telPres = $var;
        }

        public function getMailSecret()
        {
            return $this->_mailSecret;
        }

        public function setMailSecret($var)
        {
            $this->_mailSecret = $var;
        }

        public function getTelSecret()
        {
            return $this->_telSecret;
        }

        public function setTelSecret($var)
        {
            $this->_telSecret = $var;
        }
    }
?>