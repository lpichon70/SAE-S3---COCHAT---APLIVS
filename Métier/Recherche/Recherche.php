<?php 
  session_start();
  require_once('models/RencontreManager.php'); 
  require_once('controllers/mainController.php');
  require_once("../../index/PHP/pathLogoUtilisateur.php"); 
  $mainController = new MainController();



  //Permet d'afficher les bouttons lié au statut et le logo du profil
    //Donne accès à la page si l'on est connecter ou pas
    if (@$_SESSION['statut'] == null || @$_SESSION['statut'] == "")
    {
        header("Location:../../index.php");
    }
    else if (@$_SESSION['statut'] != "" && $_SESSION['statut'] != null)
    {
        $pathLogoConexion = "Images/profilConnect.png";
    }

    
    //Permet de gérer le contenu du menu dépliable de l'utilisateur
    $contentLogoManager = new pathLogoUtilisateur($_SESSION['statut']);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16" href="../../Images/icon_ballon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Recherche.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLIVS</title>
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




<div class="row"><hr></div>

<div class="l1">
  <img src="../../Images/logo.gif" alt="logo DDCS">
</div>

<div class="container">
  <h1 class="gras"><span>APPLIVS - APPLICATION WEB</span> <span>RELATIVE À LA
    <br> 
     PRÉVENTION</span> <span>ET LA LUTTE CONTRE</span>
    <br>
    <span>LES INCIVILITÉS ET LES</span> <span>VIOLENCES DANS LE SPORT</span></h2>
</div>

<div id="LesImages">
  <img id="logoDDCS" src="../../Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
</div>

<div>
  
  <p class="lien ombreText">
      <a href="../../index.php">Accueil</a>
  </p>
</p>
<form class="search-form" method="POST">
  <label for="search">Rechercher un club :</label>
  <input type="text" id="search" name="search">
  <button type="submit">Rechercher</button>
</form>

<table>
  <tr>
    <th>Club receveur</th>
    <th>Club visiteur</th>
    <th>Date</th>
    <th>Adresse du stade</th>
    <th>Ville</th>
    <th>Signalement</th>
</tr>
<tr>
  <?php
    if(isset($_POST["search"]))
    {
      if(!empty($_POST["search"])) echo $mainController->getRencontreClub($_POST["search"]);
      else echo $mainController->getValeurTab(); 
    }
    else echo $mainController->getValeurTab();
  ?>
</tr>
</table>
  <script src="../../index/JS/MenuUtilisateur.js"></script>
</body>
</html>