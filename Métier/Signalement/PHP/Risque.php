<?php
    class Risque
    {
        public $_enjeuSportif;
        public $_spectateurs;
        public $_contentieuxClubs;
        public $_contentieuxSupporters;
        public function __construct($enjeuSportif, $spectateurs, $contentieuxClubs, $contentieuxSupporters)
        {
            $this->_enjeuSportif = $enjeuSportif;
            $this->_spectateurs = $spectateurs;
            $this->_contentieuxClubs = $contentieuxClubs;
            $this->_contentieuxSupporters = $contentieuxSupporters;
        }
    }
?>