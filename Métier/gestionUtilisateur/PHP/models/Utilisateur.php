<?php

class Utilisateur{

    private int $id;
    public function getId(){return $this->id ;}
    public function setId(?int $m){ $this->id = $m;}

    private ?string $nom;
    public function getNom(){return $this->nom ;}
    public function setNom(?string $m){ $this-> nom= $m;}

    private ?string $prenom;
    public function getPrenom(){return $this->prenom ;}
    public function setPrenom(?string $m){$this->prenom = $m;}

    private ?string $identifiant;
    public function getIdentifiant(){return $this->identifiant ;}
    public function setIdentifiant(?string $m){ $this->identifiant= $m;}

    private ?string $mdp;
    public function getMdp(){return $this->mdp ;}
    public function setMdp(?string $m){ $this->mdp = $m;}

    private ?string $statut;
    public function getStatut(){return $this->statut ;}
    public function setStatut(?string $m){ $this->statut = $m;}

    
    public function __construct($id,$nom,$prenom,$identifiant,$mdp,$statut){
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setIdentifiant($identifiant);
        $this->setMdp($mdp);
        $this->setStatut($statut);
    }
}
?>