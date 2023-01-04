<?php

require_once('models/RencontreManager.php');

class MainController{

    private string $valeurTab;
    private int $idactuel;
    public function getValeurTab(){return $this->valeurTab;}

    public function loadId()
    {

    }

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
            $tableau.='</td><td>' . $rencontre->clubReceveur() . '</td><td>' . $rencontre->clubVisiteur() . '</td><td>'
            . $rencontre->dateRencontre() . '</td><td>' . $rencontre->adresseStade() . '</td><td>' . $rencontre->ville() .
             '</td><td>' . '<a href="../Signalement/formulaire_renseignement.php"><button name="button">Signalement</button>' . '</tr>';
        }

        return $tableau;
    }
}


?>