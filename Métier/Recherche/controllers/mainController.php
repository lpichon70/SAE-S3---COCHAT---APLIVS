<?php

require_once('models/RencontreManager.php');

class MainController{

<<<<<<< HEAD
    private string $valeurTab;
    private int $idactuel;
    public function getValeurTab(){return $this->valeurTab;}
=======

    private RencontreManager $manager;

    public function getValeurTab()
    {
        $listRencontre = $this->manager->getAll();
        
        return $this->generertab($listRencontre);
    }
>>>>>>> b7ad3bfd7cba0f1b93f8ec7bd94ed330e7660da9

    public function loadId()
    {

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
<<<<<<< HEAD
            . $rencontre->dateRencontre() . '</td><td>' . $rencontre->adresseStade() . '</td><td>' . $rencontre->ville() .
             '</td><td>' . '<a href="../Signalement/formulaire_renseignement.php"><button name="button">Signalement</button>' . '</tr>';
=======
            . $rencontre->dateRencontre() . '</td><td>' . $rencontre->adresseStade() . '</td><td>' . $rencontre->ville() . '</td><td>' . '<button>Signalement</button>' . '</tr>';
>>>>>>> b7ad3bfd7cba0f1b93f8ec7bd94ed330e7660da9
        }

        return $tableau;
    }

    public function getRencontreClub($club)
    {

        $listRencontre = $this->manager->getRencontre($club);
        return $this->generertab($listRencontre);
    }
}


?>