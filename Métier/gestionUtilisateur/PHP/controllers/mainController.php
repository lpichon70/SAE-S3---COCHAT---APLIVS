<?php

require_once("PHP/models/UtilisateurManager.php");
require_once("PHP/models/Utilisateur.php");

class MainController{


    private UtilisateurManager $manager;

    public function getValeurTab()
    {
        $listUtilisateur = $this->manager->getAll();
        
        return $this->generertab($listUtilisateur);
    }

    ///Fonction index qui permet de générer la vue
    public function __construct()
    {
        $this->manager = new UtilisateurManager();        
    }

    private function generertab($tabUtilisateur) : string
    {
        $res = "";
        foreach ($tabUtilisateur as $utilisateur)
        {
            $res.='<tr>';
            $res.='<td>' . $utilisateur->getId() . '</td><td class="nom">' . $utilisateur->getNom() . '</td><td class="prenom">'
            . $utilisateur->getPrenom() . '</td><td class="identifiant">' . $utilisateur->getIdentifiant() . '</td><td class="mdp">' . $utilisateur->getMdp() .
            '</td><td class="statut">' . $utilisateur->getStatut() . '</td><td class="option"> <a href="gestionUtilisateur.php?action=editUser&idUser='.$utilisateur->getId().'&statutUser='.$utilisateur->getStatut().'"><img id="edit" src="../../Images/edit.png"/></a> <a href="gestionUtilisateur.php?action=del-user&idUser='.$utilisateur->getId().'&statutUser='.$utilisateur->getStatut().'"><img id="edit" src="../../Images/dish.png"/></a>   </td>';
            $res.='</tr>';
        }

        return $res;
    }

    public function getUserById($id,$statut)
    {
        if ($statut == 'CLUB')
        {
            $user = $this->manager->getClubById($id);
        }
        else {
            $user = $this->manager->getUserById($id);
        }
        return $user;
    }

    public function deleteUser($id,$statut)
    {
        if ($statut == 'CLUB')
        {
            $this->manager->deleteClub($id);
        }
        else {
            $this->manager->deleteUser($id);
        }
    }

    public function addUser($post)
    {
        $user = new Utilisateur(0,$post['nom'],$post['prenom'],$post['identifiant'],$post['mdp'],$post['statut']);
        $this->manager->addUser($user);
    }

    public function editUser($id,$post)
    {
        $user = new Utilisateur($id,$post['nom'],$post['prenom'],$post['identifiant'],$post['mdp'],$post['statut']);
        if ($post['statut'] == 'CLUB')
        {
            $this->manager->editclub($user);
        }
        else{
            $this->manager->editUser($user);
        }
        
    }

    public function search($request)
    {
        $utilisateurManSearch = new UtilisateurManager();
        $utilisateurManSearch->search($request);
        return $this->generertab($utilisateurManSearch->getTabUtilisateurSearch());
    }
}


?>