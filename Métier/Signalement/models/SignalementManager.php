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
                
                //Création d'un nouvel animal 
                $signalement = new Signalement($this->tab['idAnimal'],$this->tab['nom'],$this->tab['proprietaire'],$this->tab['espece'],
                $this->tab['cri'],$this->tab['age']);

                //Ajout de cette animal dans le tableau d'animals
                $signalementTab[$positionTab] = $signalement;
                $positionTab +=1;
                
                
            }
            
        }
        
        return $signalementTab;
    }
    
}

?>