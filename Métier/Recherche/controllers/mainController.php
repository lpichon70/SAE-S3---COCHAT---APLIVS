<?php

require_once('models/RencontreManager.php');

class MainController{

    private string $valeurTab;
    public function getValeurTab(){return $this->valeurTab;}

    ///Fonction index qui permet de générer la vue
    public function __construct()
    {
        $manager = new RencontreManager();

        $listRencontre = $manager -> getAll();
        
        $this->valeurTab = $this->generertab($listRencontre);
    }

    private function generertab($tabRencontre) : string
    {
        $tableau = "";
        foreach ($tabRencontre as $rencontre)
        {
            $tableau.='</td><br><td>' . $rencontre->clubReceveur() . '</td><br><td>' . $rencontre->clubVisiteur() . '</td><br><td>'
            . $rencontre->dateRencontre() . '</td><br><td>' . $rencontre->adresseStade() . '</td><br><td>' . $rencontre->ville() . '</td><br><td>' . '<button>Signalement</button>' . '</tr>';
        }

        return $tableau;
    }
}


?>