<?php
	session_start();
	require_once("../../index/PHP/pathLogoUtilisateur.php");

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

				$requiredClub = "";
				$requiredDDCS = "";
			break;
			
			case 'DDCS':
				$voirDDCS = "";

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




	<form id="formulaire" action="PHP/signalement.php" method="POST">

		<fieldset id="club-receveur" class="<?=$voirClub?> <?=$voirPolice?> <?=$voirDDCS?>">
			<h3>
				Partie club receveur
			</h3>
				<p>
					<div class="elements-input">
						<label class="label-text" for="nomClub">Nom du club :</label>
						<br>
						<input type="text" name="nomClub" <?=$requiredClub?>/>
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>		
					
					<div class="elements-input">
						<label class="label-text" for="numMatch">Numéro du match :</label>
						<br>
						<input type="text" name="numMatch" <?=$requiredClub?> />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>
					<div class="elements-input">
						<label class="label-text" for="categorie">Catégorie :</label>
						<input type="text" name="categorie" <?=$requiredClub?> />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>
					<div class="elements-input">
						<label class="label-text" for="date">Date :</label>
						<input type="text" name="date" <?=$requiredClub?> />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>
					<div class="elements-input">
						<label class="label-text" for="lieu">Lieu :</label>
						<input type="text" name="lieu" <?=$requiredClub?> />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>
					<div class="elements-input">
						<label class="label-text" for="horaires">Horaires :</label>
						<input type="text" name="horaires" <?=$requiredClub?> />
						<div class="ligne-input"></div>
					</div>
					
				</p>
			
			<fieldset>
				<legend>
					<label for="IncidentRec">Y a-t-il eu un incident ? :</label>
					<label name="oui">Oui</label>
					<input type="radio" name="IncidentRec" id="IncidentOui1" <?=$requiredClub?> onchange="showIncident1()" />
					<label name="non">Non</label>
					<input type="radio" name="IncidentRec" <?=$requiredClub?> onchange="showIncident1()" />
				</legend>
				<div id="incident1" class="d-none">
					<h5>
					<label> Type d'incivilité :</label>
					</h5>
					<p>
						<label for="titre">S'il y a eu une agression verbale, sur qui était-elle portée :</label><br>
						<input type="checkbox" name="agressionVerbaleJoueurs" value="yes">
						<label for="agressionVerbaleJoueurs">Joueur(s)</label><br>
						<input type="checkbox" name="agressionVerbaleArbitres" value="yes">
						<label for="agressionVerbaleArbitres">Arbitre(s)</label><br>
						<input type="checkbox" name="agressionVerbaleDirigeants" value="yes">
						<label for="agressionVerbaleDirigeants">Dirigeant(s)</label><br>
						<input type="checkbox" name="agressionVerbaleSpectateurs" value="yes">
						<label for="agressionVerbaleSpectateurs">Spectateur(s)</label><br>
					</p>
					<p>
						<label for="titre">S'il y a eu des victime(s), qui sont elles ? :</label><br>
						<input type="checkbox" name="victimeConcerneJoueurs" value="yes">
						<label for="victimeConcerneJoueurs">Joueur(s)</label><br>
						<input type="checkbox" name="victimeConcerneEducateur" value="yes">
						<label for="victimeConcerneEducateur">Éducateur(s)</label><br>
						<input type="checkbox" name="victimeConcerneDirigeants" value="yes">
						<label for="victimeConcerneDirigeants">Dirigeant(s)</label><br>
						<input type="checkbox" name="victimeConcerneArbitres" value="yes">
						<label for="victimeConcerneArbitres">Arbitre(s)</label><br>
						<input type="checkbox" name="victimeConcerneDelegue" value="yes">
						<label for="victimeConcerneDelegue">Délégué(s)</label><br>
						<input type="checkbox" name="victimeConcerneSpectateurs" value="yes">
						<label for="victimeConcerneSpectateurs">Spectateur(s)</label><br>
						<input type="checkbox" name="victimeConcerneAutre" value="yes">
						<label for="victimeConcerneAutre">Autre(s)</label><br>
					</p>
					<p>
						<label for="titre">Qui sont les auteurs présumés ? :</label><br>
						
						<input type="checkbox" name="auteurPresumeMineurMembreClub" value="yes">
						<label for="auteurPresumeMineurMembreClub">Un membre d'un club</label><br>
						<input type="checkbox" name="auteurPresumeMineurJoueur" value="yes">
						<label for="auteurPresumeMineurJoueur">Un joueur</label><br>
						<input type="checkbox" name="auteurPresumeMineurEducateur" value="yes">
						<label for="auteurPresumeMineurEducateur">Un éducateur</label><br>
						<input type="checkbox" name="auteurPresumeMineurDirigeant" value="yes">
						<label for="auteurPresumeMineurDirigeant">Un dirigeant</label><br>
						<input type="checkbox" name="auteurPresumeMineurAutre" value="yes">
						<label for="auteurPresumeMineurAutre">Un autre</label><br>
					</p>
					<p>
						<h5><label for="titre">Qu'elles sont les mesure(s) qui ont été prise(s) ? :</label></h5><br>
						<label for="titre">La (les) mesure(s) immédiate(s) :</label><br>
						<input type="checkbox" name="mesuresImediatesPolice" value="yes">
						<label for="mesuresImediatesPolice"> Appel de la police</label><br>
						<input type="checkbox" name="mesuresImediatesGendarmerie" value="yes">
						<label for="mesuresImediatesGendarmerie">Appel de la gendarmerie</label><br>
						<input type="checkbox" name="mesuresImediatesPoliceMunicipale" value="yes">
						<label for="mesuresImediatesPoliceMunicipale">Appel de la police municipale</label><br>
						<input type="checkbox" name="mesuresImediatesMairie" value="yes">
						<label for="mesuresImediatesMairie">Appel de la mairie</label><br>
						<input type="checkbox" name="mesuresImediatesPompiers" value="yes">
						<label for="mesuresImediatesPompiers">Appel des pompiers</label><br>
						<input type="checkbox" name="mesuresImediatesSamu" value="yes">
						<label for="mesuresImediatesSamu">Appel du SAMU</label><br>
						<input type="checkbox" name="mesuresImediatesAutres" value="yes">
						<label for="mesuresImediatesAutres">Autre</label><br>


						<label for="titre">La (les) mesure(s) ultérieure(s) :</label><br>
						<input type="checkbox" name="mesuresUlterieursExamMedical" value="yes">
						<label for="mesuresUlterieursExamMedical">Examen(s) médical(aux)</label><br>
						<input type="checkbox" name="mesuresUlterieursHospitalisation" value="yes">
						<label for="mesuresUlterieursHospitalisation">Hospitalisation(s)</label><br>
						<input type="checkbox" name="mesuresUlterieursMainCourante" value="yes">
						<label for="mesuresUlterieursMainCourante">Déposition(s) sur main courante</label><br>
						<input type="checkbox" name="mesuresUlterieursDepoPlainte" value="yes">
						<label for="mesuresUlterieursDepoPlainte">Dépôt(s) de plainte(s)</label><br>
					</p>
					<p>
						<label for="discription"> Description des évènements qui ont eu lieu : </label><br>
						<textarea id="discriptionReceveur" name="discriptionReceveur" rows="5" cols="50"></textarea>
					</p>
				</div>
			</fieldset>
		</fieldset>

		<br>


		<fieldset id="club" class="<?=$voirClub?> <?=$voirPolice?> <?=$voirDDCS?>">
			<h3>
				Partie club visiteur
			</h3>
			<p>
				<div class="elements-input">
					<label for="nomClubVisiteur">Nom du club :</label>
					<input type="text" name="nomClubVisiteur" />
					<div class="ligne-input"></div>
				</div>
			</p>
			<fieldset>
				<legend>
					<label for="IncidentRec">Si incident :</label>
					<label name="oui">Oui</label>
					<input type="radio" name="IncidentRec" id="IncidentOui2" <?=$requiredClub?> onchange="showIncident2()" />
					<label name="non">Non</label>
					<input type="radio" name="IncidentRec" <?=$requiredClub?> onchange="showIncident2()" />
				</legend>
				<div id="incident2" class="d-none">
					<h5>
						<label> Type d'incivilité :</label>
					</h5>
					<p>
						<label for="titre">S'il y a eu une agression verbale, sur qui était-elle portée :</label><br>
						<input type="checkbox" name="agressionVerbaleJoueursVisiteur" value="joueurs">
						<label for="agressionVerbaleJoueursVisiteur">Joueur(s)</label><br>
						<input type="checkbox" name="agressionVerbaleArbitresVisiteur" value="arbitres">
						<label for="agressionVerbaleArbitresVisiteur">Arbitre(s)</label><br>
						<input type="checkbox" name="agressionVerbaleDirigeantsVisiteur" value="dirigeants">
						<label for="agressionVerbaleDirigeantsVisiteur">Dirigeant(s)</label><br>
						<input type="checkbox" name="agressionVerbaleSpectateursVisiteur" value="spectateurs">
						<label for="agressionVerbaleSpectateursVisiteur">Spectateur(s)</label><br>
					</p>
					<p>
						<label for="titre">S'il y a eu des victime(s), qui sont elles ? :</label><br>
						<input type="checkbox" name="victimeConcerneJoueursVisiteur" value="joueurs">
						<label for="victimeConcerneJoueursVisiteur">Joueur(s)</label><br>
						<input type="checkbox" name="victimeConcerneEducateurVisiteur" value="éducateurs">
						<label for="victimeConcerneEducateurVisiteur">Éducateur(s)</label><br>
						<input type="checkbox" name="victimeConcerneDirigeantsVisiteur" value="dirigeants">
						<label for="victimeConcerneDirigeantsVisiteur">Dirigeant(s)</label><br>
						<input type="checkbox" name="victimeConcerneArbitresVisiteur" value="arbitres">
						<label for="victimeConcerneArbitresVisiteur">Arbitre(s)</label><br>
						<input type="checkbox" name="victimeConcerneDelegueVisiteur" value="délégué">
						<label for="victimeConcerneDelegueVisiteur">Délégué(s)</label><br>
						<input type="checkbox" name="victimeConcerneSpectateursVisiteur" value="spectateurs">
						<label for="victimeConcerneSpectateursVisiteur">Spectateur(s)</label><br>
						<input type="checkbox" name="victimeConcerneAutreVisiteur" value="autres">
						<label for="victimeConcerneAutreVisiteur">Autre(s)</label><br>
					</p>
					<p>
						<label for="titre">Qui sont les auteurs présumés ? :</label><br>
						
						<input type="checkbox" name="auteurPresumeMajeurMembreClubVisiteur" value="membre">
						<label for="auteurPresumeMajeurMembreClubVisiteur">Un membre d'un club</label><br>
						<input type="checkbox" name="auteurPresumeMajeurJoueurVisiteur" value="joueurs">
						<label for="auteurPresumeMajeurJoueurVisiteur">Un joueur</label><br>
						<input type="checkbox" name="auteurPresumeMajeurEducateurVisiteur" value="éducateurs">
						<label for="auteurPresumeMajeurEducateurVisiteur">Un éducateur</label><br>
						<input type="checkbox" name="auteurPresumeMajeurDirigeantVisiteur" value="dirigeants">
						<label for="auteurPresumeMajeurDirigeantVisiteur">Un dirigeant</label><br>
						<input type="checkbox" name="auteurPresumeMajeurAutreVisiteur" value="autres">
						<label for="auteurPresumeMajeurAutreVisiteur">Un autre</label><br>
					</p>
					<p>
						<h5><label for="titre">Qu'elles sont les mesure(s) qui ont été prise(s) ? :</label></h5>
						<label for="titre">La (les) mesure(s) immédiate(s) :</label><br>
						<input type="checkbox" name="mesuresImediatesPoliceVisiteur" value="police">
						<label for="mesuresImediatesPoliceVisiteur"> Appel de la police</label><br>
						<input type="checkbox" name="mesuresImediatesGendarmerieVisiteur" value="gendarmerie">
						<label for="mesuresImediatesGendarmerieVisiteur">Appel de la gendarmerie</label><br>
						<input type="checkbox" name="mesuresImediatesPoliceMunicipaleVisiteur" value="municipale">
						<label for="mesuresImediatesPoliceMunicipaleVisiteur">Appel de la police municipale</label><br>
						<input type="checkbox" name="mesuresImediatesMairieVisiteur" value="mairie">
						<label for="mesuresImediatesMairieVisiteur">Appel de la mairie</label><br>
						<input type="checkbox" name="mesuresImediatesPompiersVisiteur" value="pompiers">
						<label for="mesuresImediatesPompiersVisiteur">Appel des pompiers</label><br>
						<input type="checkbox" name="mesuresImediatesSamuVisiteur" value="SAMU">
						<label for="mesuresImediatesSamuVisiteur">Appel du SAMU</label><br>
						<input type="checkbox" name="mesuresImediatesAutresVisiteur" value="autres">
						<label for="mesuresImediatesAutresVisiteur">Autre</label><br>


						<label for="titre">La (les) mesure(s) ultérieure(s) :</label><br>
						<input type="checkbox" name="mesuresUlterieursExamMedicalVisiteur" value="exam">
						<label for="mesuresUlterieursExamMedicalVisiteur">Examen(s) médical(aux)</label><br>
						<input type="checkbox" name="mesuresUlterieursHospitalisationVisiteur" value="hospit">
						<label for="mesuresUlterieursHospitalisationVisiteur">Hospitalisation(s)</label><br>
						<input type="checkbox" name="mesuresUlterieursMainCouranteVisiteur" value="maincourante">
						<label for="mesuresUlterieursMainCouranteVisiteur">Déposition(s) sur main courante</label><br>
						<input type="checkbox" name="mesuresUlterieursDepoPlainteVisiteur" value="plainte">
						<label for="mesuresUlterieursDepoPlainteVisiteur">Dépôt(s) de plainte(s)</label><br>
					</p>
					<p>
						<label for="discription"> Description des évènements qui ont eu lieu : </label><br>
						<textarea id="discriptionVisiteur" name="discriptionVisiteur" rows="5" cols="50"></textarea>
					</p>
				</div>
			</fieldset>

		</fieldset>


		<br />


		<fieldset id="ddcs" class="<?=$voirPolice?> <?=$voirDDCS?>">
			<h3>
				Partie DDCS
			</h3>

			<p>
				<label for="ContactReceveur">Les personnes responsable du club receveur ont été contactée ? :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactReceveur" id="ContactOui1" <?=$requiredDDCS?> onchange="showContact1()" />
				<label name="non">Non</label>
				<input type="radio" name="ContactReceveur" <?=$requiredDDCS?> onchange="showContact1()" />
			</p>
			<div id="contact1" class="d-none">
				<p>
					<label for="ExplicationsReceveur">Justification du contact :</label><br>
					<textarea id="ExplicationsReceveur" name="ExplicationsReceveur" rows="5" cols="50"></textarea>
				</p>
			</div>
			<p>
				<label for="ContactVisiteur">Les personnes responsable du club visiteur ont été contactée ? :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactVisiteur" id="ContactOui2" <?=$requiredDDCS?> onchange="showContact2()" />
				<label name="non">Non</label>
				<input type="radio" name="ContactVisiteur" <?=$requiredDDCS?> onchange="showContact2()" />
			</p>
			<div id="contact2" class="d-none">
				<p>
					<label for="ExplicationsVisiteur">Justification du contact :</label><br>
					<textarea id="ExplicationsVisiteur" name="ExplicationsVisiteur" rows="5" cols="50"></textarea>
				</p>
			</div>
		</fieldset>

		</br>


		<fieldset id="police" class="<?=$voirPolice?> <?=$voirDDCS?>">
			<h3>
				Partie Force de l'ordre
			</h3>
			<p>
				<label for="Procédure">Moyens mis en oeuvre en cas d'incident :</label><br>
				<textarea id="Procédure" name="Procédure" rows="5" cols="50"></textarea>
			</p>
		</fieldset>
		<br>
		<button id="valide">Valider</button>
	</form>
	<script src="../../index/JS/MenuUtilisateur.js"></script>
</body>

</html>