<?php
  session_start();
  
  require_once("index/PHP/pathLogoUtilisateur.php");

  if (@$_SESSION['statut'] == null || @$_SESSION['statut'] == "")
  {
    @$_SESSION['statut'] = "";
    $pathLogoConexion = "Images/profilDeconnect.png";
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
    <meta charset="utf-8">
    <title>APPLIVS</title>
    <link rel="icon" type="image/png" sizes="16x16" href="Images/icon_ballon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index/CSS/Accueil_css.css">
    <link rel="stylesheet" href="index/CSS/logoProfil.css">
  </head>

  <body>

    <div class="row"><hr></div>

    <div class="menu-profil">    
      <img src="<?=$pathLogoConexion?>" class="logoProfil" onclick="toggleMenu()"/>

      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <h3>Menu</h3>
          </div>
          <hr>

          <a href="<?=$contentLogoManager->getPathMyProfil()?>" class="sub-menu-link <?=$contentLogoManager->getLinkMyProfilVisible()?>">
            <p>Mon profil</p>
            <span></span>
          </a>

          <a href="<?=$contentLogoManager->getPathSearch()?>" class="sub-menu-link <?=$contentLogoManager->getLinkSearchVisible()?>">
            <p>Recherche</p>
            <span></span>
          </a>

          <a href="<?=$contentLogoManager->getPathGestionUser()?>" class="sub-menu-link <?=$contentLogoManager->getLinkGestionUserVisible()?>">
          <p>Gérer les utilisateurs</p>
          <span></span>
          </a>

          <a href="<?=$contentLogoManager->getPathInscription()?>" class="sub-menu-link <?=$contentLogoManager->getLinkInscriptionVisible()?>">
            <p>Inscription</p>
            <span></span>
          </a>

          <a href="<?=$contentLogoManager->getPathConexion()?>" class="sub-menu-link <?=$contentLogoManager->getLinkConexionVisible()?>">
            <p>Connexion</p>
            <span></span>
          </a>

          <a href="<?=$contentLogoManager->getPathDeconexion()?>" class="sub-menu-link <?=$contentLogoManager->getLinkDeconexionVisible()?>">
            <p>Se déconnecter</p>
            <span></span>
          </a>

        </div>
      </div>
    </div>
    

    <div class="l1">
      <img src="Images/logo.gif" alt="logo DDCS">
    </div>

    <div class="container">
      <h1 class="gras"><span>APPLIVS - APPLICATION WEB</span> <span>RELATIVE À LA
        <br> 
         PRÉVENTION</span> <span>ET LA LUTTE CONTRE</span>
        <br>
        <span>LES INCIVILITÉS ET LES</span> <span>VIOLENCES DANS LE SPORT</span></h2>
    </div>

    <div id="LesImages">
      <img id="logoDDCS" src="Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
    </div>

    <div>
      
      <p class="lien ombreText <?=$contentLogoManager->getLinkInscriptionVisible()?>">
          <a href="Métier/Inscription/FormulaireInscription.html">Inscription</a>
      </p>
      <p class="lien ombreText <?=$contentLogoManager->getLinkSignalerVisible()?>">
          <a href="Métier/Signalement/formulaire_renseignement.php">Signaler</a>
      </p>
      <p class="lien ombreText <?=$contentLogoManager->getLinkMyProfilVisible()?>">
        <a href="Métier/Profil/PageProfil.php">Profil</a>
</p>
      <p class="lien ombreText <?=$contentLogoManager->getLinkConexionVisible()?>">
        <a href="Métier/Connexion/Connexion.php">Se connecter</a>
    </p>
    
    </div>

    <div class="page">
      <div class="pagePartie1">
      <div class="row">
        <h2 class="gras">Accueil</h2>
      </div>

      <div class="row">
        <h3 class="gras">Présentation</h3>
      </div>

      <div class="row justify">      
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper suscipit odio eget ultrices. Nullam dapibus mauris pretium diam posuere scelerisque. Ut volutpat euismod feugiat. Donec volutpat condimentum nulla id sollicitudin. Nunc sit amet congue risus. Mauris sit amet pretium elit. Etiam metus turpis, molestie eu diam ac, dignissim laoreet sapien. Aliquam malesuada commodo dolor scelerisque ultricies. Mauris blandit maximus consequat. Vivamus ultricies posuere tempor. Vivamus non ornare mi. Ut ut lacinia arcu, nec varius massa. Maecenas ornare, quam in hendrerit tempor, urna libero gravida ex, ac finibus justo odio sit amet nisi. Maecenas eu magna sed lorem consectetur rutrum nec non justo.
        In a pulvinar enim. In eu dictum est, nec elementum arcu. Nunc eget vehicula augue. Cras volutpat, ex eget rutrum volutpat, turpis nisl tempus nisi, sed molestie dui sapien in felis. Etiam enim eros, fringilla id varius sit amet, egestas sit amet diam. Nulla iaculis sem eu urna iaculis tincidunt. Fusce eu bibendum sapien. Suspendisse laoreet at enim a volutpat. Pellentesque tempus gravida dictum. Vestibulum non neque vitae libero tristique elementum sed a odio. Nullam nec eros vitae felis viverra accumsan. Nam urna urna, convallis sed felis a, scelerisque hendrerit neque. Aliquam ac quam congue, rutrum ipsum ac, pellentesque sapien. Nunc at euismod arcu. Mauris sed tellus id nisi convallis facilisis nec quis odio.</p>                
      </div>
    </div>

    <div class="pagePartie2">
      <div class="row">
          <h3 class="gras">Qu est-ce que APPLIVS ?</h3>
      </div>

      <div class="row justify"> 
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper suscipit odio eget ultrices. Nullam dapibus mauris pretium diam posuere scelerisque. Ut volutpat euismod feugiat. Donec volutpat condimentum nulla id sollicitudin. Nunc sit amet congue risus. Mauris sit amet pretium elit. Etiam metus turpis, molestie eu diam ac, dignissim laoreet sapien. Aliquam malesuada commodo dolor scelerisque ultricies. Mauris blandit maximus consequat. Vivamus ultricies posuere tempor. Vivamus non ornare mi. Ut ut lacinia arcu, nec varius massa. Maecenas ornare, quam in hendrerit tempor, urna libero gravida ex, ac finibus justo odio sit amet nisi. Maecenas eu magna sed lorem consectetur rutrum nec non justo.
        In a pulvinar enim. In eu dictum est, nec elementum arcu. Nunc eget vehicula augue. Cras volutpat, ex eget rutrum volutpat, turpis nisl tempus nisi, sed molestie dui sapien in felis. Etiam enim eros, fringilla id varius sit amet, egestas sit amet diam. Nulla iaculis sem eu urna iaculis tincidunt. Fusce eu bibendum sapien. Suspendisse laoreet at enim a volutpat. Pellentesque tempus gravida dictum. Vestibulum non neque vitae libero tristique elementum sed a odio. Nullam nec eros vitae felis viverra accumsan. Nam urna urna, convallis sed felis a, scelerisque hendrerit neque. Aliquam ac quam congue, rutrum ipsum ac, pellentesque sapien. Nunc at euismod arcu. Mauris sed tellus id nisi convallis facilisis nec quis odio.</p>                
      </div>
    </div>
  </div>


  <div class="basPage">
    <div class="row"><hr></div>

    <div class="row">
      <div>
        <h4>Nous contacter :</h4>
      </div>
    </div>

    <div class="row"><hr></div>
  </div>
    

    


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="index/JS/Animation.js"></script>
  <script src="index/JS/MenuUtilisateur.js"></script>
  
  </body>
</html>