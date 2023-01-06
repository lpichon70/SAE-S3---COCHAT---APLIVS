<?php

    class Signalement
    {
        private ?int $idSignalement;
        private ?string $natureIncident;
        private ?string $antecedent;

        public function idSignalement() : int{
            return $this->idSignalement;
        }
    
        public function setidSignalement($idSignalement){
            if ($idSignalement > 0){
                $this->idSignalement = $idSignalement;
            }
        }

        public function NatureIncident() : string{
            return $this->NatureIncident;
        }
    
        public function setNatureIncident($natureIncident){
            if ($natureIncident > 0){
                $this->NatureIncident = $natureIncident;
            }
        }

        public function Antecedent() : string{
            return $this->Antecedent;
        }
    
        public function setAntecedent($antecedent){
            if ($antecedent > 0){
                $this->Antecedent = $antecedent;
            }
        }
    }


?>