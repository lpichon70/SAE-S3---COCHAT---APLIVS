<?php

require_once('./../../Recherche/models/Models.php');
require_once('Signalement.php');

class SignalementManager extends Model
{


    public function insertSignalement(Signalement $signalement)
    {
        if($this->execRequest("SELECT Id_Rencontre from incident where Id_Rencontre = ".$signalement->getIdSignalement()))
        {
            $req = $this->getDB()->prepare(
                "UPDATE incident
                SET Nature_Incident = :Nature_Incident, Antecedent = :Antecedent
                WHERE Id_Rencontre = ".$signalement->getIdSignalement());
    
                $req->execute(array(
                    //Les informations liées au signalement :
                    'Nature_Incident' => $signalement->getNatureIncident(),
                    'Antecedent'=> $signalement->getAntecedent()));
            
        }
        else
        {
            $req = $this->getDB()->prepare(
            "INSERT INTO incident
            VALUES (:Id_Rencontre,:Nature_Incident,:Antecedent)");

            $req->execute(array(
                //Les informations liées au club :
                'Id_Rencontre' => $signalement->getIdSignalement(),
                'Nature_Incident' => $signalement->getNatureIncident(),
                'Antecedent'=> $signalement->getAntecedent()));
        }
        
    }
    
}

?>