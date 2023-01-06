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
    
        public function SetIdSignalement($var){
            $this->idSignalement = $var;
        }

        public function GetNomClubReceveur() : string{
            return $this->nomClubReceveur;
        }
    
        public function SetNomClubReceveur($var){
            $this->nomClubReceveur = $var;
        }

        public function GetDate() : string{
            return $this->date;
        }
    
        public function SetDate($var){
            $this->date $var;
        }

        public function GetAdresse() : string{
            return $this->adresse;
        }
    
        public function SetAdresse($var){
            $this->adresse $var;
        }

        public function GetVille() : string{
            return $this->ville;
        }
    
        public function SetVille($var){
            $this->ville $var;
        }

        public function GetDelegues() : string{
            return $this->delegues;
        }
    
        public function SetDelegues($var){
            $this->delegues $var;
        }

        public function GetNomDelegue() : string{
            return $this->nomDelegue;
        }
    
        public function SetNomDelegue($var){
            $this->nomDelegue $var;
        }

        public function GetTelDelegue() : string{
            return $this->telDelegue;
        }
    
        public function SetTelDelegue($var){
            $this->telDelegue $var;
        }

        public function GetArbitres() : string{
            return $this->arbitres;
        }
    
        public function SetArbitres($var){
            $this->arbitres $var;
        }

        public function GetNbArbitre() : string{
            return $this->nbArbitre;
        }
    
        public function SetNbArbitre($var){
            $this->nbArbitre $var;
        }

        public function GetTerrain() : string{
            return $this->terrain;
        }
    
        public function SetTerrain($var){
            $this->terrain $var;
        }

        public function GetAdresseTerrain() : string{
            return $this->adresseTerrain;
        }
    
        public function SetAdresseTerrain($var){
            $this->adresseTerrain $var;
        }

        public function GetDateRencontre() : string{
            return $this->dateRencontre;
        }
    
        public function SetDateRencontre($var){
            $this->dateRencontre $var;
        }

        public function GetContactDistrict() : string{
            return $this->contactDistrict;
        }
    
        public function SetContactDistrict($var){
            $this->contactDistrict $var;
        }

        public function GetContactPolice() : string{
            return $this->contactPolice;
        }
    
        public function SetContactPolice($var){
            $this->contactPolice $var;
        }

        public function GetIncidentRec() : string{
            return $this->incidentRec;
        }
    
        public function SetIncidentRec($var){
            $this->incidentRec $var;
        }

        public function GetAgressionVerbaleJoueurs() : string{
            return $this->agressionVerbaleJoueurs;
        }
    
        public function SetAgressionVerbaleJoueurs($var){
            $this->agressionVerbaleJoueurs $var;
        }

        public function GetAgressionVerbaleArbitres() : string{
            return $this->agressionVerbaleArbitres;
        }
    
        public function SetAgressionVerbaleArbitres($var){
            $this->agressionVerbaleArbitres $var;
        }

        public function GetAgressionVerbaleDirigeant() : string{
            return $this->agressionVerbaleDirigeant;
        }
    
        public function SetAgressionVerbaleDirigeant($var){
            $this->agressionVerbaleDirigeant $var;
        }

        public function GetAgressionVerbaleSpectateurs() : string{
            return $this->agressionVerbaleSpectateurs;
        }
    
        public function SetAgressionVerbaleSpectateurs($var){
            $this->agressionVerbaleSpectateurs $var;
        }

        public function GetVictimeConcerneJoueurs() : string{
            return $this->agressionVerbaleSpectateurs;
        }
    
        public function SetVictimeConcerneJoueurs($var){
            $this->agressionVerbaleSpectateurs $var;
        }

        public function GetVictimeConcerneArbitres() : string{
            return $this->victimeConcerneArbitres;
        }
    
        public function SetVictimeConcerneArbitres($var){
            $this->victimeConcerneArbitres $var;
        }

        public function GetVictimeConcerneDelegues() : string{
            return $this->victimeConcerneDelegues;
        }
    
        public function SetVictimeConcerneDelegues($var){
            $this->victimeConcerneDelegues $var;
        }

        public function GetVictimeConcerneSpectateurs() : string{
            return $this->victimeConcerneSpectateurs;
        }
    
        public function SetVictimeConcerneSpectateurs($var){
            $this->victimeConcerneSpectateurs $var;
        }

        public function GetVictimeConcerneAutre() : string{
            return $this->victimeConcerneAutre;
        }
    
        public function SetVictimeConcerneAutre($var){
            $this->victimeConcerneAutre $var;
        }

        public function GetAuteurPresumeMineurMembreClub() : string{
            return $this->auteurPresumeMineurMembreClub;
        }
    
        public function SetAuteurPresumeMineurMembreClub($var){
            $this->auteurPresumeMineurMembreClub $var;
        }

        public function GetAuteurPresumeMineurJoueur() : string{
            return $this->auteurPresumeMineurJoueur;
        }
    
        public function SetAuteurPresumeMineurJoueur($var){
            $this->auteurPresumeMineurJoueur $var;
        }

        public function GetAuteurPresumeMineurDirigeant() : string{
            return $this->auteurPresumeMineurDirigeant;
        }
    
        public function SetAuteurPresumeMineurDirigeant($var){
            $this->auteurPresumeMineurDirigeant $var;
        }

        public function GetAuteurPresumeMineurAutre() : string{
            return $this->auteurPresumeMineurAutre;
        }
    
        public function SetAuteurPresumeMineurAutre($var){
            $this->auteurPresumeMineurAutre $var;
        }

        public function GetMesuresImediatesPolice() : string{
            return $this->mesuresImediatesPolice;
        }
    
        public function SetMesuresImediatesPolice($var){
            $this->mesuresImediatesPolice $var;
        }

        public function GetMesuresImediatesMairie() : string{
            return $this->mesuresImediatesMairie;
        }
    
        public function SetMesuresImediatesMairie($var){
            $this->mesuresImediatesMairie $var;
        }

        public function GetMesuresImediatesPompier() : string{
            return $this->mesuresImediatesPompier;
        }
    
        public function SetMesuresImediatesPompier($var){
            $this->mesuresImediatesMairie $var;
        }

        public function GetMesuresImediatesSamu() : string{
            return $this->mesuresImediatesSamu;
        }
    
        public function SetMesuresImediatesSamu($var){
            $this->mesuresImediatesSamu $var;
        }

        public function GetMesuresImediatesAutre() : string{
            return $this->mesuresImediatesAutre;
        }
    
        public function SetMesuresImediatesAutre($var){
            $this->mesuresImediatesAutre $var;
        }

        public function GetMesuresUlterieursExamMedical() : string{
            return $this->mesuresUlterieursExamMedical;
        }
    
        public function SetmesuresUlterieursExamMedical($var){
            $this->mesuresUlterieursExamMedical $var;
        }

        public function GetMesuresUlterieursHospitalisation() : string{
            return $this->mesuresUlterieursHospitalisation;
        }
    
        public function SetMesuresUlterieursHospitalisation($var){
            $this->mesuresUlterieursHospitalisation $var;
        }

        public function GetMesuresUlterieursMainCourante() : string{
            return $this->mesuresUlterieursMainCourante;
        }
    
        public function SetMesuresUlterieursMainCourante($var){
            $this->mesuresUlterieursMainCourante $var;
        }

        public function GetMesuresUlterieursDepoPlainte() : string{
            return $this->mesuresUlterieursDepoPlainte;
        }
    
        public function SetMesuresUlterieursDepoPlainte($var){
            $this->mesuresUlterieursDepoPlainte $var;
        }

        public function GetMesuresUlterieursDepoPlainte() : string{
            return $this->mesuresUlterieursDepoPlainte;
        }
    
        public function SetMesuresUlterieursDepoPlainte($var){
            $this->mesuresUlterieursDepoPlainte $var;
        }




        public function GetNomClubReceveur() : string{
            return $this->nomClubReceveur;
        }
    
        public function SetNomClubReceveur($var){
            $this->nomClubReceveur = $var;
        }
    
        public function SetDate($var){
            $this->date $var;
        }

        public function GetAdresse() : string{
            return $this->adresse;
        }
    
        public function SetAdresse($var){
            $this->adresse $var;
        }

        public function GetVille() : string{
            return $this->ville;
        }
    
        public function SetVille($var){
            $this->ville $var;
        }

        public function GetDelegues() : string{
            return $this->delegues;
        }
    
        public function SetDelegues($var){
            $this->delegues $var;
        }

        public function GetNomDelegueVisiteur() : string{
            return $this->nomDelegueVisiteur;
        }
    
        public function SetNomDelegueVisiteur($var){
            $this->nomDelegueVisiteur $var;
        }

        public function GetIncidentRecVisiteur() : string{
            return $this->incidentRecVisiteur;
        }
    
        public function SetIncidentRecVisiteur($var){
            $this->incidentRecVisiteur $var;
        }

        public function GetAgressionVerbaleJoueursVisiteur() : string{
            return $this->agressionVerbaleJoueursVisiteur;
        }
    
        public function SetAgressionVerbaleJoueursVisiteur($var){
            $this->agressionVerbaleJoueursVisiteur $var;
        }

        public function GetAgressionVerbaleArbitresVisiteur() : string{
            return $this->agressionVerbaleArbitresVisiteur;
        }
    
        public function SetAgressionVerbaleArbitresVisiteur($var){
            $this->agressionVerbaleArbitresVisiteur $var;
        }

        public function GetAgressionVerbaleDirigeantVisiteur() : string{
            return $this->agressionVerbaleDirigeant;
        }
    
        public function SetAgressionVerbaleDirigeantVisiteur($var){
            $this->agressionVerbaleDirigeantVisiteur $var;
        }

        public function GetAgressionVerbaleSpectateursVisiteur() : string{
            return $this->agressionVerbaleSpectateursVisiteur;
        }
    
        public function SetAgressionVerbaleSpectateursVisiteur($var){
            $this->agressionVerbaleSpectateursVisiteur $var;
        }

        public function GetVictimeConcerneJoueursVisiteur() : string{
            return $this->agressionVerbaleSpectateursVisiteur;
        }
    
        public function SetVictimeConcerneJoueursVisiteur($var){
            $this->agressionVerbaleSpectateursVisiteur $var;
        }

        public function GetVictimeConcerneArbitresVisiteur() : string{
            return $this->victimeConcerneArbitresVisiteur;
        }
    
        public function SetVictimeConcerneArbitresVisiteur($var){
            $this->victimeConcerneArbitresVisiteur $var;
        }

        public function GetVictimeConcerneDeleguesVisiteur() : string{
            return $this->victimeConcerneDeleguesVisiteur;
        }
    
        public function SetVictimeConcerneDeleguesVisiteur($var){
            $this->victimeConcerneDeleguesVisiteur $var;
        }

        public function GetVictimeConcerneSpectateursVisiteur() : string{
            return $this->victimeConcerneSpectateursVisiteur;
        }
    
        public function SetVictimeConcerneSpectateursVisiteur($var){
            $this->victimeConcerneSpectateursVisiteur $var;
        }

        public function GetVictimeConcerneAutreVisiteur() : string{
            return $this->victimeConcerneAutreVisiteur;
        }
    
        public function SetVictimeConcerneAutreVisiteur($var){
            $this->victimeConcerneAutreVisiteur $var;
        }

        public function GetAuteurPresumeMineurMembreClubVisiteur() : string{
            return $this->auteurPresumeMineurMembreClubVisiteur;
        }
    
        public function SetAuteurPresumeMineurMembreClubVisiteur($var){
            $this->auteurPresumeMineurMembreClubVisiteur $var;
        }

        public function GetAuteurPresumeMineurJoueurVisiteur() : string{
            return $this->auteurPresumeMineurJoueurVisiteur;
        }
    
        public function SetAuteurPresumeMineurJoueurVisiteur($var){
            $this->auteurPresumeMineurJoueurVisiteur $var;
        }

        public function GetAuteurPresumeMineurDirigeantVisiteur() : string{
            return $this->auteurPresumeMineurDirigeantVisiteur;
        }
    
        public function SetAuteurPresumeMineurDirigeantVisiteur($var){
            $this->auteurPresumeMineurDirigeantVisiteur $var;
        }

        public function GetAuteurPresumeMineurAutreVisiteur() : string{
            return $this->auteurPresumeMineurAutreVisiteur;
        }
    
        public function SetAuteurPresumeMineurAutreVisiteur($var){
            $this->auteurPresumeMineurAutreVisiteur $var;
        }

        public function GetMesuresImediatesPoliceVisiteur() : string{
            return $this->mesuresImediatesPoliceVisiteur;
        }
    
        public function SetMesuresImediatesPoliceVisiteur($var){
            $this->mesuresImediatesPoliceVisiteur $var;
        }

        public function GetMesuresImediatesMairieVisiteur() : string{
            return $this->mesuresImediatesMairieVisiteur;
        }
    
        public function SetMesuresImediatesMairieVisiteur($var){
            $this->mesuresImediatesMairieVisiteur $var;
        }

        public function GetMesuresImediatesPompierVisiteur() : string{
            return $this->mesuresImediatesPompierVisiteur;
        }
    
        public function SetMesuresImediatesPompierVisiteur($var){
            $this->mesuresImediatesMairie $var;
        }

        public function GetMesuresImediatesSamuVisiteur() : string{
            return $this->mesuresImediatesSamu;
        }
    
        public function SetMesuresImediatesSamuVisiteur($var){
            $this->mesuresImediatesSamu $var;
        }

        public function GetMesuresImediatesAutreVisiteur() : string{
            return $this->mesuresImediatesAutre;
        }
    
        public function SetMesuresImediatesAutreVisiteur($var){
            $this->mesuresImediatesAutre $var;
        }

        public function GetMesuresUlterieursExamMedicalVisiteur() : string{
            return $this->mesuresUlterieursExamMedical;
        }
    
        public function SetmesuresUlterieursExamMedicalVisiteur($var){
            $this->mesuresUlterieursExamMedical $var;
        }

        public function GetMesuresUlterieursHospitalisationVisiteur() : string{
            return $this->mesuresUlterieursHospitalisation;
        }
    
        public function SetMesuresUlterieursHospitalisationVisiteur($var){
            $this->mesuresUlterieursHospitalisation $var;
        }

        public function GetMesuresUlterieursMainCouranteVisiteur() : string{
            return $this->mesuresUlterieursMainCourante;
        }
    
        public function SetMesuresUlterieursMainCouranteVisiteur($var){
            $this->mesuresUlterieursMainCourante $var;
        }

        public function GetMesuresUlterieursDepoPlainteVisiteur() : string{
            return $this->mesuresUlterieursDepoPlainte;
        }
    
        public function SetMesuresUlterieursDepoPlainteVisiteur($var){
            $this->mesuresUlterieursDepoPlainte $var;
        }

        public function GetMesuresUlterieursDepoPlainteVisiteur() : string{
            return $this->mesuresUlterieursDepoPlainte;
        }
    
        public function SetMesuresUlterieursDepoPlainteVisiteur($var){
            $this->mesuresUlterieursDepoPlainte $var;
        }

        public function GetContactReceveur() : string{
            return $this->contactReceveur;
        }
    
        public function SetContactReceveur($var){
            $this->contactReceveur $var;
        }

        public function GetContactVisiteur() : string{
            return $this->contactVisiteur;
        }
    
        public function SetContactVisiteur($var){
            $this->contactVisiteur $var;
        }

        public function GetNbForceOrdre() : string{
            return $this->nbForceOrdre;
        }
    
        public function SetNbForceOrdre($var){
            $this->nbForceOrdre $var;
        }

        public function GetIncidentFO() : string{
            return $this->incidentFO;
        }
    
        public function SetIncidentFO($var){
            $this->incidentFO $var;
        }
    }
?>