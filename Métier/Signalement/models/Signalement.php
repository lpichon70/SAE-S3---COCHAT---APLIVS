<?php

    class Signalement
    {
        private ?int $idSignalement;
        private ?string $nomClubReceveur;
        private ?string $date;
        private ?string $adresse;
        private ?string $ville;
        private ?string $delegues;
        private ?string $nomDelegue;
        private ?string $telDelegue;
        private ?string $arbitres;
        private ?string $nbArbitre;
        private ?string $terrain;
        private ?string $adresseTerrain;
        private ?string $dateRencontre;
        private ?string $contactDistrict;
        private ?string $contactPolice;
        private ?string $incidentRec;
        private ?string $agressionVerbaleJoueurs;
        private ?string $agressionVerbaleArbitres;
        private ?string $agressionVerbaleDirigeant;
        private ?string $agressionVerbaleSpectateurs;
        private ?string $victimeConcerneJoueurs;
        private ?string $victimeConcerneArbitres;
        private ?string $victimeConcerneDelegues;
        private ?string $victimeConcerneSpectateurs;
        private ?string $victimeConcerneAutre;
        private ?string $auteurPresumeMineurMembreClub;
        private ?string $auteurPresumeMineurJoueur;
        private ?string $auteurPresumeMineurDirigeant;
        private ?string $auteurPresumeMineurAutre;
        private ?string $mesuresImediatesPolice;
        private ?string $mesuresImediatesMairie;
        private ?string $mesuresImediatesPompier;
        private ?string $mesuresImediatesSamu;
        private ?string $mesuresImediatesAutre;
        private ?string $mesuresUlterieursExamMedical;
        private ?string $mesuresUlterieursHospitalisation;
        private ?string $mesuresUlterieursMainCourante;
        private ?string $mesuresUlterieursDepoPlainte;
        private ?string $nomClubVisiteur;
        private ?string $incidentRecVisiteur;
        private ?string $agressionVerbaleJoueurVisiteur;
        private ?string $agressionVerbaleArbitresVisiteur;
        private ?string $agressionVerbaleDirigeantVisiteur;
        private ?string $agressionVerbaleSpectateursVisiteur;
        private ?string $victimeConcerneJoueursVisiteur;
        private ?string $victimeConcerneArbitresVisiteur;
        private ?string $victimeConcerneDeleguesVisiteur;
        private ?string $victimeConcerneSpectateursVisiteur;
        private ?string $victimeConcerneAutreVisiteur;
        private ?string $auteurPresumeMajeurMembreClubVisiteur;
        private ?string $auteurPresumeMajeurJoueurVisiteur;
        private ?string $auteurPresumeMajeurDirigeantVisiteur;
        private ?string $auteurPresumeMajeurAutreVisiteur;
        private ?string $mesuresImediatesPoliceVisiteur;
        private ?string $mesuresImediatesMairieVisiteur;
        private ?string $mesuresImediatesPompierVisiteur;
        private ?string $mesuresImediatesSamuVisiteur;
        private ?string $mesuresImediatesAutreVisiteur;
        private ?string $mesuresUlterieursExamMedicalVisiteur;
        private ?string $mesuresUlterieursHospitalisationVisiteur;
        private ?string $mesuresUlterieursMainCouranteVisiteur;
        private ?string $mesuresUlterieursDepoPlainteVisiteur;
        private ?string $contactReceveur;
        private ?string $contactVisiteur;
        private ?string $nbForceOrdre;
        private ?string $incidentFO;

        public function hydrate(array $donnees)
        {
            foreach ($donnees as $key => $value)
            {
                $method = 'Set'.ucfirst($key);
                if (method_exists($this, $method))
                {
                    $this->$method($value);
                }
            }
        }

        public function __construct(array $donnees)
        {
            return $this->hydrate($donnes);
        } 

        public function GetIdSignalement() : int{
            return $this->idSignalement;
        }
    
        public function GetIdSignalement($var){
            $this->idSignalement = $var;
        }
    }
?>