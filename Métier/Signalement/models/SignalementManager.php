<?php

require_once('../Recherche/models/Models.php');
require_once('Signalement.php');

class SignalementManager extends Model
{
    private $tab;
    public function getAll()
    {
        $signalementTab = array(null);
        $positionTab = 0;
        


        for ($i = 1; $i < 1000; $i++)
        {
            if ($this->execRequest("SELECT * FROM incident where Id_Rencontre = '$i'", $this->tab) != null)
            {
                $this->tab = $this->execRequest("SELECT * FROM incident where Id_Rencontre = '$i'", $this->tab);
                
                $signalement = new Signalement($this->tab['Id_Rencontre'],$this->tab['Nature_Incident'],$this->tab['Antecedent']);

                $signalementTab[$positionTab] = $signalement;
                $positionTab +=1;
                
                
            }
            
        }
        
        return $signalementTab;
    }

    public function insererTable(Signalement $signalement) : Signalement
    {
        $this->insertSignalement($signalement)

        $this->tab = $this->execRequest("SELECT * FROM incident WHERE Id_Rencontre = $signalement->idSignalement()",$this->tab);

        return $signalement;
    }

    private function insertSignalement(Signalement $signalement)
    {
        if($this->execRequest(""))
        $req = $this->db->prepare(
            ("INSERT INTO incident (Id_Rencontre,Nature_Incident,Antecedent)
        VALUES (:Id_Rencontre,:Nature_Incident,:Antecedent)"));

        $req->execute(array(
            'Id_Rencontre' => $signalement->iDRencontre(),
            'Nature_Incident' => $signalement->NatureIncident(),
            'Antecedent' => $signalement->Antecedent();
            
        ));
    }
    
}

?>