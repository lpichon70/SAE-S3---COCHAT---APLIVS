<?php

class fabriqueMdp{

    private string $identifiant;
    public function getIdentifiant(){return $this->identifiant;} 
    public function setIdentifiant(string $m){$this->identifiant = $m ;}

    private string $mdp;
    public function getMdp(){return $this->mdp;}
    public function setMdp(string $m){$this->mdp = $m ;}    

    public function __construct($identifiant)
    {
        $this->setIdentifiant($this->fabriqueId($identifiant));
        $this->setMdp($this->fabriqueMdp());
    }

    private function fabriqueMdp() : string
    {
        $res = "";

        for ($i = 0; $i <= 5; $i++){
            $res .= random_int(0,100);
        }

        return $res;
    }

    private function fabriqueId($identifiant) : string
    {
        $res = "";

        for ($i = 0; $i < 2; $i++)
        {
            $res .= $identifiant[$i];
        }

        for ($i = 0; $i < 5; $i++){
            $res .= random_int(0,10);
        }

        return $res;
    }
}

?>