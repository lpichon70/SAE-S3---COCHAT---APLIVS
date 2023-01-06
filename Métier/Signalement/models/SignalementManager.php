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