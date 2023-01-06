<?php
	session_start();
	require_once("models/SignalementManager.php"); 
  	require_once("controllers/signalementController.php");
	require_once("../../index/PHP/pathLogoUtilisateur.php");

	$signalementController = new SignalementController();

	$voirClub = "d-none";
	$voirPolice = "d-none";
	$voirDDCS = "d-none";

	$requiredPolice = "required";
	$requiredClub = "required";
	$requiredDDCS = "required";

	if ($_SESSION['statut'] != "" && $_SESSION['statut'] != null)	
	{
		switch ($_SESSION['statut']) {
			case 'POLICE':
				$voirPolice = "";
				$voirClub = "";
				$voirDDCS = "";

				$requiredClub = "";
				$requiredDDCS = "";
			break;
			
			case 'DDCS':
				$voirDDCS = "";
				$voirPolice = "";
				$voirClub = "";

				$requiredPolice = "";
				$requiredClub = "";
			break;

			case 'ADMIN':
				$voirClub = "";
				$voirDDCS = "";
				$voirPolice = "";
			break;

			case 'CLUB':
				$voirClub = "";

				$requiredPolice = "";
				$requiredDDCS = "";
			break;
				
		}

	}
	else {
		header("Location:../../index.php");
	}

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
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<script src="./Js/formulaire_renseignement.js"></script>
	<link rel="stylesheet" href="./CSS/formulaire_renseignement.css" type="text/css">
	<title>Fiche de signalement de rencontres à risques</title>
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

	<div class="lignes">
		<div class="l1"></div>
		<div class="l2"></div>
	</div>
		


	<div class="container-first">
		<h1 class="gras ombreText"><span>Formulaire</span> <span>de</span> <span>signalement</span> <span>d'incident</span></h1>
	</div>


	<div id="LesImages">
		<img id="logoDDCS" src="../../Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
	</div>


	<div id="btn-accueil">
		<p class="lien ombreText">
			<a href="../../index.php">Accueil</a>
		</p>
	</div>


	<div class="l3"></div>

	<?php
    	echo $signalementController->genererTab($_GET);
  	?>
		<br>
		<button id="valide" >Valider</button>
	</form>
	<script src="../../index/JS/MenuUtilisateur.js"></script>

</body>

</html>