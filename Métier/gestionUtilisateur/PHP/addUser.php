<?php

$title = "";
$action = "";
$nom="";
$prenom="";
$identifiant="";
$mdp="";

if (@$_GET['action']== 'editUser')
{
    $action = "../gestionUtilisateur.php?action=edit-user&idUser=".$_GET['idUser']."";
    
    $title = "Modification";
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $identifiant = $_GET['identifiant'];
    $mdp = $_GET['mdp'];
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
        <title>Gestion Utilisateur</title>
    </head>


<body>
<h1><?=$title?> d'un Utilisateur</h1>

<form action="<?=$action?>" method="POST">
    <div class="container">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="<?=@$nom?>" required/>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" value="<?=@$prenom?>" />

        <label for="identifiant">Identifiant :</label>
        <input type="text" name="identifiant" value="<?=@$identifiant?>" />

        <label for="mdp">Mot de passe :</label>
        <input type="text" name="mdp" value="<?=@$mdp?>" />

        <label for="statut" >Statut :</label>
        <select type="text" name="statut">
            <option>DDCS</option>
            <option>ADMIN</option>
            <option>POLICE</option>
        </select>
    </div>

    <button >Valider</button>
</form>
</body>