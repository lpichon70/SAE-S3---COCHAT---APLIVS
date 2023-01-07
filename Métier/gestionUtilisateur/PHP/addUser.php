<?php

//Ces variables permettent d'auto implémenter la page lors de la modification
$title = "";
$action = "";
$nom="";
$prenom="";
$identifiant="";
$mdp="";
$isSelectPolice = ""; //isSelect initialise la valeur de la balise select (menu déroulant)
$isSelectDDCS = "";
$isSelectAdmin = "";

//Permet de cacher les éléments de la page en fonction du statut de connexion
$hideStatut = "";
$hidePrenom = "";



if (@$_GET['action']== 'editUser')
{
    $action = "../gestionUtilisateur.php?action=edit-user&idUser=".$_GET['idUser']."&statut=".$_GET['statut']."";
    
    $title = "Modification";
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $identifiant = $_GET['identifiant'];
    $mdp = $_GET['mdp'];

    switch($_GET['statut'])
    {
        case 'CLUB' :
            $hideStatut = "d-none";
            $hidePrenom = "d-none";
        break;
        case 'POLICE' :
            $isSelectPolice = "selected";
            $isSelectDDCS = "";
            $isSelectAdmin = "";
        break;
        case 'DDCS' :
            $isSelectDDCS = "selected";
            $isSelectAdmin = "";
            $isSelectPolice = "";
        break;
        case 'ADMIN' :
            $isSelectAdmin = "selected";
            $isSelectPolice = "";
            $isSelectDDCS = "";
        break;
    }
}
else 
{
    $title = "Ajout";
    $action = '../gestionUtilisateur.php?action=add-user';
}
?>





<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="public/css/main.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Gestion Utilisateur</title>
    </head>


<body>
<h1><?=$title?> d'un Utilisateur</h1>

<form action="<?=$action?>" method="POST">
    <div class="container">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="<?=@$nom?>" required/>

        <label for="prenom" class="<?=$hidePrenom?>">Prénom :</label>
        <input type="text" placeholder="Champ non obligatoire" name="prenom" value="<?=@$prenom?>" class="<?=$hidePrenom?>" />

        <label for="identifiant">Identifiant :</label>
        <input type="text" name="identifiant" value="<?=@$identifiant?>" />

        <label for="mdp">Mot de passe :</label>
        <input type="text" name="mdp" value="<?=@$mdp?>" />

        <label for="statut" class="<?=$hideStatut?>" >Statut :</label>
        <select type="text" name="statut" class="<?=$hideStatut?>">
            <option <?=$isSelectDDCS?>>DDCS</option>
            <option <?=$isSelectAdmin?>>ADMIN</option>
            <option <?=$isSelectPolice?>>POLICE</option>
        </select>
    </div>

    <button >Valider</button>
</form>
</body>