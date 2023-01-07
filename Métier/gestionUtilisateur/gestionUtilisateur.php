<?php
session_start();
require('PHP/controllers/mainController.php');
require_once("../../index/PHP/pathLogoUtilisateur.php");

$controller = new MainController();
$tabContent = $controller->getValeurTab();


//Permet de gérer les GET et d'appliquer une fonction ou affichier un message en fonction
if (@$_GET['action'] != null)
{
    switch($_GET['action'])
    {
        //Supprime un utilisateur dans la base de données
        case 'del-user' :
            try{
                $controller->deleteUser($_GET['idUser'],$_GET['statutUser']);
                header("Location:gestionUtilisateur.php?error=! Utilisateur supprimé avec succès !");
            }
            catch(Exception $e)
            {
                header("Location:gestionUtilisateur.php?error=! Erreur lors de la suppresion !");
            }
        break;

        //Redirige vers la page d'ajout d'utilisateur auto implémenté
        case 'editUser':
            $autoImplUser = $controller->getUserById($_GET['idUser'], $_GET['statutUser']);
            header("Location:PHP/addUser.php?action=editUser&nom=".$autoImplUser->getNom()."&prenom=".$autoImplUser->getPrenom()."&identifiant=".$autoImplUser->getIdentifiant()."&mdp=".$autoImplUser->getMdp()."&idUser=".$autoImplUser->getId()."&statut=".$autoImplUser->getStatut()."");
        break;

        //Modifie directement un utilisateur dans la base de données
        case 'edit-user' :
            try{
                if ($_GET['statut'] == 'CLUB')
                {
                    $_POST['statut'] = 'CLUB';
                }
                $controller->editUser($_GET['idUser'],$_POST); 
                header("Location:gestionUtilisateur.php?error=! Modification de l'utilisateur terminé !");
            }
            catch(Exception $e)
            {
                header("Location:gestionUtilisateur.php?error=! Erreur lors de la modification de l'utilisateur !");
            }
        break;

        //Ajoute un utilisateur dans la base de données
        case 'add-user' :
            try{
                $controller->addUser($_POST);
                header("Location:gestionUtilisateur.php?error=! Utilisateur ajouté avec succès !");
            }
            catch(Exception $e)
            {
                header("Location:gestionUtilisateur.php?error=! Erreur lors de l'ajout de l'utilisateur !");
            }
        break;
        case 'search':
            try{
                $_GET['error'] = "Voici les résultats liés à votre recherche :";
                $tabContent = $controller->search($_POST['search']);
            }
            catch(Exception $e)
            {
                header("Location:gestionUtilisateur.php?error=! Echec de la recherche veuillez réessayer !");
            }
        break;
    }
}


//Permet d'afficher les bouttons lié au statut et le logo du profil
//Donne accès à la page si l'on est connecter ou pas
if (@$_SESSION['statut'] != 'ADMIN')
{
    header("Location:../../index.php");
}
else if (@$_SESSION['statut'] == 'ADMIN')
{
    $pathLogoConexion = "Images/profilConnect.png";
}    
//Permet de gérer le contenu du menu dépliable de l'utilisateur
$contentLogoManager = new pathLogoUtilisateur($_SESSION['statut']);


?>


<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="public/css/main.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Gestion Utilisateur</title>
        <link rel="stylesheet" href="../../index/CSS/logoProfil.css">
    </head>

<body>

    <div class="menu-profil">    
    <img src="../../<?=$pathLogoConexion?>" class="logoProfil" onclick="toggleMenu()"/>

    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <h3>Menu</h3>
        </div>
        <hr>

        <a href="../../<?=$contentLogoManager->getPathMyProfil()?>" class="sub-menu-link <?=$contentLogoManager->getLinkMyProfilVisible()?>">
          <p>Mon profil</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathSearch()?>" class="sub-menu-link <?=$contentLogoManager->getLinkSearchVisible()?>">
          <p>Recherche</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathGestionUser()?>" class="sub-menu-link <?=$contentLogoManager->getLinkGestionUserVisible()?>">
          <p>Gérer les utilisateurs</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathInscription()?>" class="sub-menu-link <?=$contentLogoManager->getLinkInscriptionVisible()?>">
          <p>Inscription</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathConexion()?>" class="sub-menu-link <?=$contentLogoManager->getLinkConexionVisible()?>">
          <p>Connexion</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathDeconexion()?>" class="sub-menu-link <?=$contentLogoManager->getLinkDeconexionVisible()?>">
          <p>Se déconnecter</p>
          <span></span>
        </a>

      </div>
    </div>
    </div>



    <h1>Bienvenue dans la partie de gestion des utilisateurs</h1>

    <h2><?=@$_GET['error']?></h2>

    <div class="btn">
        <a href="gestionUtilisateur.php">Voir tous les utilisateurs</a>
    </div>

    <div class="btn">
        <a href="PHP/addUser.php">Ajouter un utilisateur</a>
    </div>

    <form class="search-form" action="gestionUtilisateur.php?action=search" method="POST">
        <label for="search"></label>
        <input type="text" id="search" name="search" placeholder="Nom, Prenom, Nom Club, Nom Comissariat, Statut...">
        <button>Rechercher</button>
    </form>

    <div class="container-tab">
        <table>
            
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Identifiant</th>
                    <th>Mot de passe</th>
                    <th>Statut</th>
                    <th>Option</th>
                </tr>
            </thead>
            
            <tbody>
                <?=$tabContent?>  
            </tbody>
        </table>
    </div>
    
    <script src="../../index/JS/MenuUtilisateur.js"></script>
</body>