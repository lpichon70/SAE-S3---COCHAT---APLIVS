<?php
require_once('Utilisateur.php');
require_once('Models.php');

    class UtilisateurManager extends Model
    {

        private $tab;

        private $tabUtilisateurSearch;
        public function getTabUtilisateurSearch(){return $this->tabUtilisateurSearch;}

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

        public function search($request)
        {
            
            //Pour les clubs
            //$this->tab[]=$this->execRequestAll("SELECT * FROM formulaire_inscription where nom_cLub = '$request'", $this->tab);
            //$this->tab[]=$this->execRequestAll("SELECT * FROM formulaire_inscription where identifiant  = '$request'", $this->tab);
            //$this->tab[]=$this->execRequestAll("SELECT * FROM formulaire_inscription where mdp = '$request'", $this->tab);

            //Pour les utilisateurs autre que les clubs
            //$tabUser = $this->fabriqueUser($this->execRequestAll("SELECT * FROM connexion where Identifiant = '$request'", $this->tab));

            if ($this->execRequestAll("SELECT * FROM connexion where Identifiant = '$request'", $this->tab)!=null)
            {
                $this->fabriqueUser($this->execRequestAll("SELECT * FROM connexion where Identifiant = '$request'", $this->tab));
            }
            if ($this->execRequestAll("SELECT * FROM connexion where Mdp = '$request'", $this->tab) != null)
            {
                $this->fabriqueUser($this->execRequestAll("SELECT * FROM connexion where Mdp = '$request'", $this->tab));
            }
            if ($this->execRequestAll("SELECT * FROM connexion where Statut = '$request'", $this->tab) != null)
            {
                $this->fabriqueUser($this->execRequestAll("SELECT * FROM connexion where Statut = '$request'", $this->tab));
            }
            if ($this->execRequestAll("SELECT * FROM connexion where nom = '$request'", $this->tab) != null)
            {
                $this->fabriqueUser($this->execRequestAll("SELECT * FROM connexion where nom = '$request'", $this->tab));
            }
            if ($this->execRequestAll("SELECT * FROM connexion where prenom = '$request'", $this->tab) != null)
            {
                $this->fabriqueUser($this->execRequestAll("SELECT * FROM connexion where prenom = '$request'", $this->tab));
            }

            return  $this->tabUtilisateurSearch;
        }

        public function fabriqueClub($tabClub)
        {

        }

        public function fabriqueUser($tabUser)
        {
            $isInsert = false;
            foreach ($tabUser as $user)
            {
                $newUser = new Utilisateur($user['Id'],$user['nom'],$user['prenom'],$user['Identifiant'],$user['Mdp'],$user['Statut']);
                if ($this->tabUtilisateurSearch != null)
                {
                    foreach ($this->tabUtilisateurSearch as $userAlreadySearch) 
                    {
                        if ($userAlreadySearch->getId() == $newUser->getId())
                        {
                            $isInsert = true;
                        }
                    }
                }
                if ($isInsert == false)
                {
                    $this->tabUtilisateurSearch[] = $newUser;
                }
                $isInsert = false;                
            }
        }
    }
?>