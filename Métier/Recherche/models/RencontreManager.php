<?php
require_once('Rencontre.php');
require_once('./Models.php');

    class RencontreManager extends Model
    {

        private $tab;

        public function getAll()
        {
            $id = 1;
            $tableVide = false;
            $rencontreTab = array(null);
    
            while($tableVide != true)
            {
                if ($this->execRequest("SELECT * FROM rencontre where idRencontre = '$id'", $this->tab) != null)
                {
                    $this->tab=$this->execRequest("SELECT * FROM rencontre where idRencontre = '$id'", $this->tab);
    
                    $rencontre = new Rencontre($this->tab['idRencontre'],$this->tab['clubReceveur'],$this->tab['clubVisiteur'],$this->tab['dateRencontre'],
                    $this->tab['adresseStade'],$this->tab['ville']);
       
                    $rencontreTab[$id-1] = $rencontre;
    
                    $id+=1;
                } 
                else 
                {
                   $tableVide = true;
                }
    
            } 
            return $rencontreTab;
        }

    }




?>