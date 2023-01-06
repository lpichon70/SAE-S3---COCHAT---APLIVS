<?php
require('PHP/controllers/mainController.php');

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
?>


<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="public/css/main.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestion Utilisateur</title>
    </head>

<body>
    <h1>Bienvenue dans la partie de gestion des utilisateurs</h1>

    <h2><?=@$_GET['error']?></h2>

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
    

</body>