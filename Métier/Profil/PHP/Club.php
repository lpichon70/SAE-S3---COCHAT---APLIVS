<?php
    class Club
    {
        private $_nomClub;
        private $_sigle;
        private $_logo;
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

        //constructeur de club
        public function __construct($data)
        {
            $this->setNomClub($data['nom_club']);
            $this->setSigle($data['sigle_club']);
            $this->setLogo($data['logo']);
            $this->setVille($data['ville']);
            $this->setRue($data['rue']);
            $this->setComplementRue($data['complement_rue']);
            $this->setCodePostal($data['code_postal']);
            $this->setNumAgrement($data['num_agrement']);
            $this->setFederation($data['fede_affiliation']);
            $this->setStatut($data['statut_asso']);
            $this->setSiret($data['num_siret']);
            $this->setMailClub($data['mail_club']);
            $this->setSiteClub($data['web_site']);
            $this->setReseau($data['social_club']);
            $this->setTelFixeClub($data['tel_fixe']);
            $this->setTelPortableClub($data['tel_portable']);
            $this->setCivilitePres($data['civil_pres']);
            $this->setNomPres($data['nom_pres']);
            $this->setPrenomPres($data['prenom_pres']);
            $this->setMailPres($data['mail_pres']);
            $this->setTelPres($data['tel_pres']);
            $this->setMailSecret($data['mail_secretariat']);
            $this->setTelSecret($data['tel_secretariat']);
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

        public function getLogo()
        {
            return $this->_logo;
        }

        public function setLogo($var)
        {
            $this->_logo = $var;
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
            $this->_prenomPres = $var;
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