<?php
    session_start();
    require_once("PHP/controllers/mainController.php");
    $error = "";
    $controller = new MainController();   

    //Permet de gérer les GET et d'appliquer une fonction ou affichier un message en fonction

    if (@$_GET['action'] != null)
    {
        switch($_GET['action'])
        {
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
            case 'edit-user' :
                
            break;
            case 'add-user' :
                try{
                    $controller->addUser($_POST);
                    //header("Location:gestionUtilisateur.php?error=! Utilisateur ajouté avec succès !");
                }
                catch(Exception $e)
                {
                    header("Location:gestionUtilisateur.php?error=! Erreur lors de l'ajout de l'utilisateur !");
                }
            break;

        }
    }
    else if (@$_GET['error'])
    {        
        $error = $_GET['error'];
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
    <h1>Bienvenu dans la partie de gestion des utilisateurs</h1>

    <h2><?=$error?></h2>

    <div class="btn">
        <a href="PHP/addUser.php">Ajouter un utilisateur</a>
    </div>

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
                <?=$controller->getValeurTab()?>  
            </tbody>
        </table>
    </div>
    

</body>