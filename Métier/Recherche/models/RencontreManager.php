<?php
require_once('Rencontre.php');
require_once('Models.php');

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
                if ($this->execRequest("SELECT * FROM rencontre where Id_Rencontre = '$id' ORDER BY Date_Rencontre ASC", $this->tab) != null)
                {
                    $this->tab=$this->execRequest("SELECT * FROM rencontre where Id_Rencontre = '$id' ORDER BY Date_Rencontre ASC", $this->tab);
    
                    
                    $rencontre = new Rencontre($this->tab['Id_Rencontre'],$this->tab['Club_receveur'],$this->tab['Club_visiteur'],$this->tab['Date_Rencontre'],
                    $this->tab['Adresse_stade'],$this->tab['Ville']);
       
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

        public function getRencontre($club)
        {
            $id = 1;
            $tableVide = false;
            $rencontreTab = array(null);
    
            while($tableVide != true)
            {
                if ($this->execRequest("SELECT * FROM rencontre where Club_receveur = '$club' or Club_visiteur = '$club' and Id_Rencontre = '$id' ORDER BY Date_Rencontre ASC", $this->tab) != null)
                {
                    $this->tab=$this->execRequest("SELECT * FROM rencontre where Club_receveur = '$club' or Club_visiteur = '$club' and Id_Rencontre = '$id' ORDER BY Date_Rencontre ASC", $this->tab);
    
                    
                    $rencontre = new Rencontre($this->tab['Id_Rencontre'],$this->tab['Club_receveur'],$this->tab['Club_visiteur'],$this->tab['Date_Rencontre'],
                    $this->tab['Adresse_stade'],$this->tab['Ville']);
       
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