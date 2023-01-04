<?php


/**
 * Cette classe va être utiliser par le logo utilisateur qui va être présent sur toutes les classes.
 * Elle va permettre de renvoyer les bon chemins pour les liens ou encore les images
 */
class pathLogoUtilisateur{

    private string $statut;
    
    //Concerne la redirection des liens
    private string $pathMyProfil;
    public function getPathMyProfil(){return $this->pathMyProfil;}
    public function setPathMyProfil(string $m){$this->pathMyProfil = $m;}

    private string $pathInscription;
    public function getPathInscription(){return $this->pathInscription;}
    public function setPathInscription(string $m){$this->pathInscription = $m;}

    private string $pathSearch;
    public function getPathSearch(){return $this->pathSearch;}
    public function setPathSearch(string $m){$this->pathSearch = $m;}

    private string $pathConexion;
    public function getPathConexion(){return $this->pathConexion;}
    public function setPathConexion(string $m){$this->pathConexion = $m;}

    private string $pathDeconexion;
    public function getPathDeconexion(){return $this->pathDeconexion;}
    public function setPathDeconexion(string $m){$this->pathDeconexion = $m;}

    
    //Concerne la visibilité des liens
    private string $linkMyProfilVisible;
    public function getLinkMyProfilVisible(){return $this->linkMyProfilVisible;}
    public function setLinkMyProfilVisible(string $m){$this->linkMyProfilVisible = $m;}

    private string $linkInscriptionVisible;
    public function getLinkInscriptionVisible(){return $this->linkInscriptionVisible;}
    public function setLinkInscriptionVisible(string $m){$this->linkInscriptionVisible = $m;}

    private string $linkSearchVisible;
    public function getLinkSearchVisible(){return $this->linkSearchVisible;}
    public function setLinkSearchVisible(string $m){$this->linkSearchVisible = $m;}

    private string $linkConexionVisible;
    public function getLinkConexionVisible(){return $this->linkConexionVisible;}
    public function setLinkConexionVisible(string $m){$this->linkConexionVisible = $m;}

    private string $linkDeconexionVisible;
    public function getLinkDeconexionVisible(){return $this->linkDeconexionVisible;}
    public function setLinkDeconexionVisible(string $m){$this->linkDeconexionVisible = $m;}


    /**
     * Method __construct
     * Constructeur de la classe
     * 
     * @param $statut $statut [contien le statut de l'utilisateur]
     *
     * @return void
     */
    public function __construct($statut)
    {
        $this->statut = $statut;
        $this->setPathByStatut($statut);
    }



        
    /**
     * Method setPathByStatut
     * Initialise les chemins des fichiers utilisés en fonction du statut
     * 
     * @return void
     */
    private function setPathByStatut($statut)
    {
        switch ($statut)
        {
            case 'POLICE' :
                $this->setPathMyProfil("");
                $this->setPathInscription("");
                $this->setPathSearch("Métier/Recherche/Recherche.php");
                $this->setPathDeconexion("Métier/Deconnexion/deconnexion.php");
                $this->setPathConexion("");

                $this->setLinkMyProfilVisible("d-none");
                $this->setLinkInscriptionVisible("d-none");
                $this->setLinkSearchVisible("");
                $this->setLinkDeconexionVisible("");
                $this->setLinkConexionVisible("d-none");
            break;
            case 'DDCS' :
                $this->setPathMyProfil("");
                $this->setPathInscription("");
                $this->setPathSearch("Métier/Recherche/Recherche.php");
                $this->setPathDeconexion("Métier/Deconnexion/deconnexion.php");
                $this->setPathConexion("");

                $this->setLinkMyProfilVisible("d-none");
                $this->setLinkInscriptionVisible("d-none");
                $this->setLinkSearchVisible("");
                $this->setLinkDeconexionVisible("");
                $this->setLinkConexionVisible("d-none");
            break;
            case 'ADMIN' :
                $this->setPathMyProfil("");
                $this->setPathInscription("");
                $this->setPathSearch("Métier/Recherche/Recherche.php");
                $this->setPathDeconexion("Métier/Deconnexion/deconnexion.php");
                $this->setPathConexion("");

                $this->setLinkMyProfilVisible("d-none");
                $this->setLinkInscriptionVisible("d-none");
                $this->setLinkSearchVisible("");
                $this->setLinkDeconexionVisible("");
                $this->setLinkConexionVisible("d-none");
            break;
            case 'CLUB' :
                $this->setPathMyProfil("Métier/Profil/PageProfil.php");
                $this->setPathSearch("Métier/Recherche/Recherche.php");
                $this->setPathDeconexion("Métier/Deconnexion/deconnexion.php");
                $this->setPathInscription("");
                $this->setPathConexion("");

                $this->setLinkMyProfilVisible("");
                $this->setLinkInscriptionVisible("d-none");
                $this->setLinkSearchVisible("");
                $this->setLinkDeconexionVisible("");
                $this->setLinkConexionVisible("d-none");
            break;
            case '' :
                $this->setPathInscription("Métier/Inscription/FormulaireInscription.html");
                $this->setPathConexion("Métier/Connexion/Connexion.php");
                $this->setPathMyProfil("");
                $this->setPathSearch("");
                $this->setPathDeconexion("");

                $this->setLinkMyProfilVisible("d-none");
                $this->setLinkInscriptionVisible("");
                $this->setLinkSearchVisible("d-none");
                $this->setLinkDeconexionVisible("d-none");
                $this->setLinkConexionVisible("");
            break;
        }
    }
}


?> 