<?php

require_once('models/RencontreManager.php');

class MainController{


    private RencontreManager $manager;

    public function getValeurTab()
    {
        $listRencontre = $this->manager -> getAll();
        
        return $this->generertab($listRencontre);
    }

    ///Fonction index qui permet de générer la vue
    public function __construct()
    {
        $this->manager = new RencontreManager();

        
    }

    private function generertab($tabRencontre) : string
    {
        $tableau = "";
        foreach ($tabRencontre as $rencontre)
        {
            $tableau.='</td><td>' . $rencontre->clubReceveur() . '</td><td>' . $rencontre->clubVisiteur() . '</td><td>'
            . $rencontre->dateRencontre() . '</td><td>' . $rencontre->adresseStade() . '</td><td>' . $rencontre->ville() . '</td><td>' . '<button>Signalement</button>' . '</tr>';
        }

        return $tableau;
    }

    public function getRencontreClub($club)
    {

        $listRencontre = $this->manager -> getRencontre($club);
        
        return $this->generertab($listRencontre);
    }
}


?>