<?php

require_once('./../Recherche/models/Models.php');
require_once('Signalement.php');

class SignalementManager extends Model
{


    public function insertSignalement(Signalement $signalement)
    {
        if($this->execRequest("SELECT Id_Rencontre from incident where Id_Rencontre = ".$signalement->GetIdSignalement()))
        {
            $req = $this->getDB()->prepare(
                "UPDATE incident
                SET 
                delegues = :delegues,
                nom_delegues = :nom_delegues,
                tel_delegues = :tel_delegues,
                arbitres = :arbitres,
                nb_arbitres = :nb_arbitres,
                terrain = :terrain,
                adresse_terrain = :adresse_terrain,
                nv_date = :nv_date,
                contact_district = :contact_district,
                contact_police = :contact_police,
                incident = :incident,
                agr_joueur = :agr_joueur,
                agr_arbitre = :agr_arbitre,
                agr_dirigeant = :agr_dirigeant,
                agr_spectateur = :agr_spectateur,
                vic_joueur = :vic_joueur,
                vic_dirigeant = :vic_dirigeant,
                vic_arbitre = :vic_arbitre,
                vic_spectateur = :vic_spectateur,
                aut_membre = :aut_membre,
                aut_joueur = :aut_joueur,
                aut_dirigeant = :aut_dirigeant,
                aut_autre = :aut_autre,
                mes_police = :mes_police,
                mes_mairie = :mes_mairie,
                mes_pompiers = :mes_pompiers,
                mes_samu = :mes_samu,
                mes_autre = :mes_autre,
                mesult_exam = :mesult_exam,
                mesult_hosp = :mesult_hosp,
                mesult_maincourante = :mesult_maincourante,
                mesult_depotplainte = :mesult_depotplainte,
                evenementsrecev = :evenementsrecev,
                incidentvisit = :incidentvisit,
                Vagr_joueur = :Vagr_joueur,
                Vagr_arbitre = :Vagr_arbitre,
                Vagr_dirigeant = :Vagr_dirigeant,
                Vagr_spectateur = :Vagr_spectateur,
                Vvic_joueur = :Vvic_joueur,
                Vvic_dirigeant = :Vvic_dirigeant,
                Vvic_arbitre = :Vvic_arbitre,
                Vvic_spectateur = :Vvic_spectateur,
                Vaut_membre = :Vaut_membre,
                Vaut_joueur = :Vaut_joueur,
                Vaut_dirigeant = :Vaut_dirigeant,
                Vaut_autre = :Vaut_autre,
                Vmes_police = :Vmes_police,
                Vmes_mairie = :Vmes_mairie,
                Vmes_pompiers = :Vmes_pompiers,
                Vmes_samu = :Vmes_samu,
                Vmes_autre = :Vmes_autre,
                Vmesult_exam = :Vmesult_exam,
                Vmesult_hospi = :Vmesult_hospi,
                Vmesult_maincourante = :Vmesult_maincourante,
                Vmesult_plainte = :Vmesult_plainte,
                Vevenement = :Vevenement,
                Dcontact_recev = :Dcontact_recev,
                Dmotif_recev = :Dmotif_recev,
                Dcontact_visit = :Dcontact_visit,
                Dmotif_visit = :Dmotif_visit,
                Fnb_police = :Fnb_police,
                Fmoyen_prev = :Fmoyen_prev,
                Fincident = :Fincident,
                Fevenement = Fevenement:
                WHERE Id_Rencontre = ".$signalement->GetIdSignalement());
    
                $req->execute(array(
                    //Les informations liées au signalement :
                        'delegues' => $signalement->GetDelegues(),
                        'nom_delegues' => $signalement->GetNomDelegue(),
                        'tel_delegues' => $signalement->GetTelDelegue(),
                        'arbitres' => $signalement->GetArbitres(),
                        'nb_arbitres' => $signalement->GetNbArbitre(),
                        'terrain' => $signalement->GetTerrain(),
                        'adresse_terrain' => $signalement->GetAdresseTerrain(),
                        'nv_date' => $signalement->GetDateRencontre(),
                        'contact_district' => $signalement->GetContactDistrict(),
                        'contact_police' => $signalement->GetContactPolice(),
                        'incident' => $signalement->GetIncidentRec(),
                        'agr_joueur' => $signalement->GetAgressionVerbaleJoueurs(),
                        'agr_arbitre' => $signalement->GetAgressionVerbaleArbitres(),
                        'agr_dirigeant' => $signalement->GetAgressionVerbaleDirigeant(),
                        'agr_spectateur' => $signalement->GetAgressionVerbaleSpectateurs(),
                        'vic_joueur' => $signalement->GetVictimeConcerneJoueurs(),
                        'vic_dirigeant' => $signalement->GetVictimeConcerneDelegues(),
                        'vic_arbitre' => $signalement->GetVictimeConcerneArbitres(),
                        'vic_spectateur' => $signalement->GetVictimeConcerneSpectateurs(),
                        'aut_membre' => $signalement->GetAuteurPresumeMineurMembreClub(),
                        'aut_joueur' => $signalement->GetAuteurPresumeMineurJoueur(),
                        'aut_dirigeant' => $signalement->GetAuteurPresumeMineurDirigeant(),
                        'aut_autre' => $signalement->GetAuteurPresumeMineurAutre(),
                        'mes_police' => $signalement->GetMesuresImediatesPolice(),
                        'mes_mairie' => $signalement->GetMesuresImediatesMairie(),
                        'mes_pompiers' => $signalement->GetMesuresImediatesPompier(),
                        'mes_samu' => $signalement->GetMesuresImediatesSamu(),
                        'mes_autre' => $signalement->GetMesuresImediatesAutre(),
                        'mesult_exam' => $signalement->GetMesuresUlterieursExamMedical(),
                        'mesult_hosp' => $signalement->GetMesuresUlterieursHospitalisation(),
                        'mesult_maincourante' => $signalement->GetMesuresUlterieursMainCourante(),
                        'mesult_depotplainte' => $signalement->GetMesuresUlterieursDepoPlainte(),
                        'evenementsrecev' => $signalement->GetMesuresEvenementsRecev(),
                        'incidentvisit' => $signalement->GetIncidentRecVisiteur(),
                        'Vagr_joueur' => $signalement->GetAgressionVerbaleJoueursVisiteur(),
                        'Vagr_arbitre' => $signalement->GetAgressionVerbaleArbitresVisiteur(),
                        'Vagr_dirigeant' => $signalement->GetAgressionVerbaleDirigeantVisiteur(),
                        'Vagr_spectateur' => $signalement->GetAgressionVerbaleSpectateursVisiteur(),
                        'Vvic_joueur' => $signalement->GetVictimeConcerneJoueursVisiteur(),
                        'Vvic_dirigeant' => $signalement->GetVictimeConcerneDeleguesVisiteur(),
                        'Vvic_arbitre' => $signalement->GetVictimeConcerneArbitresVisiteur(),
                        'Vvic_spectateur' => $signalement->GetVictimeConcerneSpectateursVisiteur(),
                        'Vaut_membre' => $signalement->GetAuteurPresumeMineurMembreClubVisiteur(),
                        'Vaut_joueur' => $signalement->GetAuteurPresumeMineurJoueurVisiteur(),
                        'Vaut_dirigeant' => $signalement->GetAuteurPresumeMineurDirigeantVisiteur(),
                        'Vaut_autre' => $signalement->GetAuteurPresumeMineurAutreVisiteur(),
                        'Vmes_police' => $signalement->GetMesuresImediatesPoliceVisiteur(),
                        'Vmes_mairie' => $signalement->GetMesuresImediatesMairieVisiteur(),
                        'Vmes_pompiers' => $signalement->GetMesuresImediatesPompierVisiteur(),
                        'Vmes_samu' => $signalement->GetMesuresImediatesSamuVisiteur(),
                        'Vmes_autre' => $signalement->GetMesuresImediatesAutreVisiteur(),
                        'Vmesult_exam' => $signalement->GetMesuresUlterieursExamMedicalVisiteur(),
                        'Vmesult_hospi' => $signalement->GetMesuresUlterieursHospitalisationVisiteur(),
                        'Vmesult_maincourante' => $signalement->GetMesuresUlterieursMainCouranteVisiteur(),
                        'Vmesult_plainte' => $signalement->GetMesuresUlterieursDepoPlainteVisiteur(),
                        'Vevenement' => $signalement->GetVevenementVisit(),
                        'Dcontact_recev' => $signalement->GetContactReceveur(),
                        'Dmotif_visit' => $signalement->GetContactVisiteur(),
                        'Fnb_police' => $signalement->GetNbForceOrdre(),
                        'Fmoyen_prev' => $signalement->GetMoyPrevPolice(),
                        'Fincident' => $signalement->GetIncidentFO(),
                        'Fevenment' => $signalement->GetEvenementPolice()
                    ));
            
        }
        else
        {
            $req = $this->getDB()->prepare(
            "INSERT INTO incident
            VALUES (

            )");

            $req->execute(array(
                //Les informations liées au club :
                'Id_Rencontre' => $signalement->GetIdSignalement(),
                ));
        }
        
    }
    
}

?>