<?php
require_once('Utilisateur.php');
require_once('Models.php');

    class UtilisateurManager extends Model
    {

        private $tab;

        public function getAll()
        {
            $utilisateurTab = array(null);
            $positionTab = 0;
    
            for ($i = 1; $i < 1000; $i++)
            {
                if ($this->execRequest("SELECT * FROM connexion where Id = '$i'", $this->tab) != null)
                {
                    $this->tab=$this->execRequest("SELECT * FROM connexion where Id = '$i'", $this->tab);
    
                    
                    $utilisateur = new Utilisateur($this->tab['Id'],$this->tab['nom'],$this->tab['prenom'],$this->tab['Identifiant'],
                    $this->tab['Mdp'],$this->tab['Statut']);
       
                    $utilisateurTab[$positionTab] = $utilisateur;
                    $positionTab += 1;
                } 
                
            } 
            for ($i = 1; $i < 1000; $i++)
            {
                if ($this->execRequest("SELECT * FROM formulaire_inscription where id_club = '$i'", $this->tab) != null)
                {
                    $this->tab=$this->execRequest("SELECT * FROM formulaire_inscription where id_club = '$i'", $this->tab);
    
                    
                    $utilisateur = new Utilisateur($this->tab['id_club'],$this->tab['nom_club'],"",$this->tab['identifiant'],
                    $this->tab['mdp'],'CLUB');
       
                    $utilisateurTab[$positionTab] = $utilisateur;
                    $positionTab += 1;
                } 
            } 
            return $utilisateurTab;
        }


        public function deleteClub($id)
        {
            $this->tab=$this->execRequest("DELETE FROM formulaire_inscription where id_club = '$id'", $this->tab);
        }

        public function deleteUser($id)
        {
            $this->tab=$this->execRequest("DELETE FROM connexion where Id = '$id'", $this->tab);
        }

        public function addUser($user)
        {
            $this->insertUser($user);
        }

        public function getUserById($id)
        {
            $this->tab=$this->execRequest("SELECT * FROM connexion where Id = '$id'", $this->tab);
            
            $utilisateur = new Utilisateur($this->tab['Id'],$this->tab['nom'],$this->tab['prenom'],$this->tab['Identifiant'],
            $this->tab['Mdp'],$this->tab['Statut']);
            
            return $utilisateur;
        }

        public function getClubById($id)
        {
            $this->tab=$this->execRequest("SELECT * FROM formulaire_inscription where id_club = '$id'", $this->tab);

            $utilisateur = new Utilisateur($this->tab['id_club'],$this->tab['nom_club'],"",$this->tab['identifiant'],
            $this->tab['mdp'],'CLUB');

            return $utilisateur;
        }

        public function editUser($user)
        {
            $this->tab=$this->execRequest("UPDATE connexion SET Identifiant = '".$user->getIdentifiant()."' , Mdp = '".$user->getMdp()."' , Statut = '".$user->getStatut()."' , nom = '".$user->getNom()."' , prenom = '".$user->getPrenom()."'  where Id = '".$user->getId()."'", $this->tab);
        }
    }
?>