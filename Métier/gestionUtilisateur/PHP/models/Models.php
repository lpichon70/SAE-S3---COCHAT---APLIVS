<?php
abstract class Model{
    private PDO $bdd; //Instance de PDO

    public function __construct()
    {
        $this->bdd = $this->getDB();
    }
    
    protected function execRequest(string $sql, array $param=null) 
    {
        $req = $this->bdd->query("$sql");
        $param = $req->fetch(PDO::FETCH_ASSOC);
        return $param;
    }

    private function getDB() : PDO
    {
        $bdd = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae',
                        'grp-254',
                        '0k6zqrrr',
                        );  
        return $bdd;
    }

    protected function insertUser(Utilisateur $user)
        {
            $req = $this->bdd->prepare(
                ("INSERT INTO connexion (nom,prenom,Identifiant,Mdp,Statut)
            VALUES (:nom,:prenom,:Identifiant,:Mdp,:Statut)"));

            $req->execute(array(
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'Identifiant' => $user-> getIdentifiant(),
                'Mdp' => $user-> getMdp(),
                'Statut' => $user -> getStatut(),
            ));
        }

    


}


?>