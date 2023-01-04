<?php

require_once('../models/RencontreManager.php');

class MainController{
    ///Fonction index qui permet de générer la vue
    public function Index() : void {
        $manager = new RencontreManager();

        $listRencontre = $manager -> getAll();
        
        'valeurtab' => $this->generertab($listRencontre);
    }

    public function generertab($tabRencontre) : string
    {
        $tableau = "";
        foreach ($tabRencontre as $rencontre)
        {
            $tableau.='<tr><td>'. $rencontre->idRencontre() . '</td><br><td>' . $rencontre->clubReceveur() . '</td><br><td>' . $animal->clubVisiteur() . '</td><br><td>'
            . $rencontre->dateRencontre() . '</td><br><td>' . $rencontre->adresseStade() . '</td><br><td>' . $rencontre->ville() . '</td><br><td>' . '<button class="btn" type="button" name="edit" >Signalement</button>' . '</tr>';
        }

        return $tableau;
    }
}


?>