<?php

class Rencontre{

    private ?int $idRencontre;
    private string $clubReceveur;
    private ?string $clubVisiteur;
    private ?string $dateRencontre;
    private ?string $adresseStade;
    private ?string $ville;
    
    public function __construct($idRencontre,$clubReceveur,$clubVisiteur,$dateRencontre,$adresseStade,$ville){
        $this->setidRencontre($idRencontre);
        $this->setclubReceveur($clubReceveur);
        $this->setclubVisiteur($clubVisiteur);
        $this->setdateRencontre($dateRencontre);
        $this->setadresseStade($adresseStade);
        $this->setville($ville);
    }

    public function idRencontre() : int{
        return $this->idRencontre;
    }

    public function setidRencontre($idRencontre){
        if ($idRencontre > 0){
            $this->idRencontre = $idRencontre;
        }
    }

    public function clubReceveur() : string{
        return $this->clubReceveur ;
    }

    public function setclubReceveur($clubReceveur){
        if ($clubReceveur != null){
            $this->clubReceveur = $clubReceveur;
        }
    }

    public function clubVisiteur() : string{
        return $this->clubVisiteur ;
    }

    public function setclubVisiteur($clubVisiteur){
        if ($clubVisiteur != null){
            $this->clubVisiteur = $clubVisiteur;
        }
    }

    public function dateRencontre() : string{
        return $this->dateRencontre ;
    }

    public function setdateRencontre($dateRencontre){
        if ($dateRencontre != null){
            $this->dateRencontre = $dateRencontre;
        }
    }

    public function adresseStade() : string{
        return $this->adresseStade ;
    }

    public function setadresseStade($adresseStade){
        if ($adresseStade != null){
            $this->adresseStade = $adresseStade;
        }
    }

    public function ville() : int{
        return $this->ville;
    }

    public function setville($ville){
        if ($ville > 0){
            $this->ville = $ville;
        }
    }

}



?>