<?php

    class Signalement
    {
        private ?int $idSignalement;
        private ?string $natureIncident;
        private ?string $antecedent;

        public function getIdSignalement() : int{
            return $this->idSignalement;
        }
    
        public function setIdSignalement($idSignalement){
            if ($idSignalement > 0){
                $this->idSignalement = $idSignalement;
            }
        }

        public function getNatureIncident() : string{
            return $this->NatureIncident;
        }
    
        public function setNatureIncident($natureIncident){
            if ($natureIncident > 0){
                $this->NatureIncident = $natureIncident;
            }
        }

        public function getAntecedent() : string{
            return $this->Antecedent;
        }
    
        public function setAntecedent($antecedent){
            if ($antecedent > 0){
                $this->Antecedent = $antecedent;
            }
        }
    }


?>