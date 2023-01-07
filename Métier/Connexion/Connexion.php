<?php
  session_start();
  $_SESSION['statut']='';
  $_SESSION['idClub']='';
  require_once("PHP/Conn.php");
  require_once("PHP/BDDManager.php");
  require_once("../../index/PHP/pathLogoUtilisateur.php");
  

  //Récupère les données saisies pas l'utilisateur sur la page
  @$valider = $_POST['submit'];
  @$identifiant = $_POST['nomUtilisateur'];
  @$mdp = $_POST['Mdp'];
  $error = "";

  //Si l'utilisateur valide son identifiant et son mot de passe (Me connecter)
  if (isset($valider))
  {
    //Connextion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
    /*Permet de vérifier si le mot de passe et l'identifiant sont dans la base de donnée
    et sont cohérents (mot de passe ratacher à l'indentifiant*/
    $conn = $manager->get($identifiant,$mdp);
    $connexionClub = $manager->getClub($identifiant,$mdp);

    if ( $conn == false && $connexionClub == false )
    {
      //Si les informations rentré par l'utilisateur sont érronés, alors on reste sur la page 
      //De connexion et on affiche un message d'erreur
      $error = "Identifiant ou mot de passe invalide !";
    }
    else
    {
      if ($conn == true){
        //Dans le cas ou l'utilisateur à réussi à se connecter
        //On lui attribu un statut
        $_SESSION['statut']=$manager->getStatutByID($identifiant);
        header("Location:./PHP/Index.php");
      }
      else if ($connexionClub == true)
      {
        $_SESSION['statut']='CLUB';
        $_SESSION['idClub']=$manager->getIdClub($identifiant);
        header("Location:./PHP/Index.php");
      }
    }
  }

  //Permet d'afficher les bouttons lié au statut et le logo du profil
    //Donne accès à la page si l'on est connecter ou pas
    
    $pathLogoConexion = "Images/profilDeconnect.png";
    

    
    //Permet de gérer le contenu du menu dépliable de l'utilisateur
    $contentLogoManager = new pathLogoUtilisateur($_SESSION['statut']);

?>

<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="Images/icon_ballon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Connexion.css">
    <link rel="stylesheet" href="../../index/CSS/logoProfil.css">
  </head>

  <body>

    <div class="menu-profil">    
    <img src="../../<?=$pathLogoConexion?>" class="logoProfil" onclick="toggleMenu()"/>

    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <h3>Menu <?=$_SESSION['statut']?></h3>
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
    
    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    <div class="container-first">
        <h1><span>Page</span> <span>de</span> <span>connexion</span></h1>
    </div>
    
    <fieldset id="blockConnexion">
        <form action="#" method="post">
            <h2>Connexion</h2>

            <div class="element">
              <label  for="nomUtilisateur">Identifiant :</label>
              <br>
            
              <input class="container" type="text" name="nomUtilisateur" required/>
              <div class="lignesElement"></div> 
              <label class="erreur"><?=$error?></label>
            </div>
                    
            <br>

            <div class="element">
              <label for="Mdp" >Mot de passe :</label>
              <br>
              <input class="container" type="password" name="Mdp"  required/>
              <div class="lignesElement"></div>
              <label class="erreur"><?=$error?></label>
            </div>
            
            <br>

            <input id="btn-connexion" type="submit" name="submit" value="Me connecter"/>
            
            <br>

            <a id="inscription" href="../Inscription/FormulaireInscription.html"  >Je ne suis pas encore inscrit</a>
        </form>
        
    </fieldset>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="../../index/JS/Animation.js"></script>
    <script src="../../index/JS/MenuUtilisateur.js"></script>
  </body>


</html>
