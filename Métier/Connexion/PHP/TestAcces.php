<?php
    session_start();
    //Permet d'affichier la page de redirection de l'utiliateur en fonction de son grade.
    $statut = $_SESSION['statut'];
?>



<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>APPLIVS</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../../Images/icon_ballon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/TestAccess.css">
  </head>

  <body>

    <div class="row"><hr></div>

    <div class="l1">
      <img src="../../../Images/logo.gif" alt="logo DDCS">
    </div>

    <div class="container">
      <h1 class="gras"><span>VOUS</span> <span>ETES
        <br> 
         CONNECTES</span> <span>EN TEMPS</span>
        <br>
        <span>QUE</span> <span><?=$statut?></span></h2>
    </div>

    <div id="LesImages">
      <img id="logoDDCS" src="../../../Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
    </div>

    <div>
      <p class="lien ombreText">
          <a href="../../../index.php">Accueil</a>
      </p>
      <p class="lien ombreText <?=$afficheClub?>">
          <a href="../../../Métier/Signalement/formulaire_renseignement.php"  >Signaler</a>
      </p>
      <p class="lien ombreText <?=$afficheRecherche?>">
        <a href="#">Rechercher</a>
</p>
    
    </div>
    </html>
</body>