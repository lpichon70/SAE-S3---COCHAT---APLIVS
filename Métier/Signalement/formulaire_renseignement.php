<?php
	session_start();
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
?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<script src="./Js/formulaire_renseignement.js"></script>
	<link rel="stylesheet" href="./CSS/formulaire_renseignement.css" type="text/css">
	<title>Fiche de signalement de rencontres à risques</title>
</head>

<body>
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

		<fieldset id="club-receveur" class="<?=$voirClub?>">
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
			
				<p>
				<label class="label-text" for="Délégués">Envoi de délégués :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Délégués" id="DeleguesOui" <?=$requiredClub?> onchange="showDelegues()" />
				<label name="non">Non</label>
				<input type="radio" name="Délégués" <?=$requiredClub?> onchange="showDelegues()" /><br>
				<div class="d-none" id="deleg">
				<div class="elements-input">
					<label class="label-text" for="nomDelegue">Nom du délégué :</label>
					<input type="text" name="nomDelegue" />
					<div class="ligne-input"></div>
				</div>
				
				<br>
				<div class="elements-input">
					<label class="label-text" for="telDelegue">Téléphone du délégué :</label>
					<input type="text" name="telDelegue" />
					<div class="ligne-input"></div>
				</div>
				
			</div>
			</p>

			<p>
				<label class="label-text" for="Arbitres">Envoi d'arbitres :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Arbitres" id="ArbitresOui" <?=$requiredClub?> onchange="showArbitres()" />
				<label name="non">Non</label>
				<input type="radio" name="Arbitres" <?=$requiredClub?> onchange="showArbitres()" /><br>
				<div id="arb" class="d-none">
					<div class="elements-input">
						<label class="label-text" for="nbArbitre">Nombre d'arbitres :</label>
						<input type="text" name="nbArbitre" />
						<div class="ligne-input"></div>
					</div>
					
				</div>
			</p>
			<p>
				<label class="label-text" for="Terrain">Changement de terrain :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Terrain" id="TerrainsOui" <?=$requiredClub?> onchange="showTerrains()" />
				<label name="non">Non</label>
				<input type="radio" name="Terrain" <?=$requiredClub?> onchange="showTerrains()" /><br>
				<div id="terr" class="d-none">
					<div class="elements-input">
						<label class="label-text" for="adresseTerrain">Adresse du nouveau terrain :</label>
						<input type="text" name="adresseTerrain" />
						<div class="ligne-input"></div>
					</div>
					
				<br>
					<div class="elements-input">
						<label class="label-text" for="dateRencontre">Nouvelle date pour la rencontre :</label>
						<input type="text" name="dateRencontre" />
						<div class="ligne-input"></div>
					</div>
					
				<br>
					<div class="elements-input">
						<label class="label-text" for="heureRencontre">Nouvelle heure de la rencontre :</label>
						<input type="text" name="heureRencontre" />
						<div class="ligne-input"></div>
					</div>
					
				</div>
			</p>
			<p>
				<label class="label-text" for="Report">Report du match :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Report" id="ReportOui" <?=$requiredClub?> onchange="showReport()" />
				<label name="non">Non</label>
				<input type="radio" name="Report" <?=$requiredClub?> onchange="showReport()" /><br>
			<div id="rep" class="d-none">
				<div class="elements-input">
					<label class="label-text" for="adresseTerrain">Adresse du nouveau terrain :</label>
					<input type="text" name="adresseTerrain" />
					<div class="ligne-input"></div>
				</div>
				<br>
				<div class="elements-input">
					<label class="label-text" for="dateRencontre">Nouvelle date pour la rencontre :</label>
					<input type="text" name="dateRencontre" />
					<div class="ligne-input"></div>
				</div>
				
				<br>
				<div class="elements-input">
					<label class="label-text" for="heureRencontre">Nouvelle heure de la rencontre :</label>
					<input type="text" name="heureRencontre" />
					<div class="ligne-input"></div>
				</div>
				
			</div>
			</p>
			<p>
				<label class="label-text" for="contactDistrict">Contact du district :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="contactDistrict" <?=$requiredClub?> />
				<label name="non">Non</label>
				<input type="radio" name="contactDistrict" <?=$requiredClub?> />
			</p>
			<p>
				<label class="label-text" for="contactPolice">Contact des forces de l'ordre :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="contactPolice" <?=$requiredClub?> />
				<label name="non">Non</label>
				<input type="radio" name="contactPolice" <?=$requiredClub?> />
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


		<fieldset id="club" class="<?=$voirClub?>">
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
					<label for="IncidentRec">Y a-t-il eu un incident ? :</label>
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


		<fieldset id="ddcs" class="<?=$voirDDCS?> <?=$voirPolice?>">
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


		<fieldset id="police" class="<?=$voirPolice?>">
			<h3>
				Partie Force de l'ordre
			</h3>
			<p>
				<label for="nbrForceOrdre">Combien de membres des force de l'ordre seront présents ?</label><br>
				<input type="nomber" name="nbrForceOrdre"><br>
				<label for="Procedure">Moyens mis en oeuvre en cas d'incident :</label><br>
				<textarea id="Procedure" name="Procedure" rows="5" cols="50"></textarea>
			</p>
			<fieldset>
			<legend>
				<label for="IncidentFO">Y a-t-il eu un incident ? :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="IncidentFO" id="IncidentOui3"/>
				<label name="non">Non</label>
				<input type="radio" name="IncidentFO"/>
			</legend>
			<div class="incident3" class="d-none">
				<label for="nbrForceOrdreIncident">Combien de membres des force de l'ordre étaient présents ?</label><br>
				<input type="nomber" name="nbrForceOrdreIncident"><br>
				<label for="descFO">Description des évènements qui on eu lieu :</label><br>
				<textarea id="descFO" name="descFO" rows="5" cols="50"></textarea>
			</div>
		</fieldset>
		</fieldset>
		
		<br>
		<button id="valide">Valider</button>
	</form>
</body>

</html>