<?php

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
	<script src="formulaire_renseignement.js"></script>
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
		<img id="logoDDCS" src="./Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
	</div>


	<div id="btn-accueil">
		<p class="lien ombreText">
			<a href="./index.html">Accueil</a>
		</p>
	</div>


	<div class="l3"></div>




	<form id="formulaire" action="formulaire_renseignement.php" method="POST">

		<fieldset id="club-receveur">
			<h3>
				Partie club receveur
			</h3>
				<p>
					<div class="elements-input">
						<label class="label-text" for="nomClub">Nom du club :</label>
						<br>
						<input type="text" name="nomClub" required />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>		
					
					<div class="elements-input">
						<label class="label-text" for="NumMatch">Numéro du match :</label>
						<br>
						<input type="text" name="NumMatch" required />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>
					<div class="elements-input">
						<label class="label-text" for="Catégorie">Catégorie :</label>
						<input type="text" name="Catégorie" required />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>
					<div class="elements-input">
						<label class="label-text" for="Date">Date :</label>
						<input type="text" name="Date" required />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>
					<div class="elements-input">
						<label class="label-text" for="Lieu">Lieu :</label>
						<input type="text" name="Lieu" required />
						<div class="ligne-input"></div>
					</div>
					
				</p>
				<p>
					<div class="elements-input">
						<label class="label-text" for="Horaires">Horaires :</label>
						<input type="text" name="Horaires" required />
						<div class="ligne-input"></div>
					</div>
					
				</p>
			
			<p>
				<label class="label-text" for="Délégués">Envoi de délégués :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Délégués" id="DeleguesOui" required onchange="showDelegues()" />
				<label name="non">Non</label>
				<input type="radio" name="Délégués" required onchange="showDelegues()" /><br>
			<div class="d-none" id="deleg">
				<div class="elements-input">
					<label class="label-text" for="nomDélégué">Nom du délégué :</label>
					<input type="text" name="nomDélégué" />
					<div class="ligne-input"></div>
				</div>
				
				<br>
				<div class="elements-input">
					<label class="label-text" for="telDélégué">Téléphone du délégué :</label>
					<input type="text" name="telDélégué" />
					<div class="ligne-input"></div>
				</div>
				
			</div>
			</p>

			<p>
				<label class="label-text" for="Arbitres">Envoi d'arbitres :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Arbitres" id="ArbitresOui" required onchange="showArbitres()" />
				<label name="non">Non</label>
				<input type="radio" name="Arbitres" required onchange="showArbitres()" /><br>
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
				<input type="radio" name="Terrain" id="TerrainsOui" required onchange="showTerrains()" />
				<label name="non">Non</label>
				<input type="radio" name="Terrain" required onchange="showTerrains()" /><br>
				<div id="terr" class="d-none">
					<div class="elements-input">
						<label class="label-text" for="NvTerrain">Adresse du nouveau terrain :</label>
						<input type="text" name="NvTerrain" />
						<div class="ligne-input"></div>
					</div>
					
				<br>
					<div class="elements-input">
						<label class="label-text" for="DateRencontre">Nouvelle date pour la rencontre :</label>
						<input type="text" name="DateRencontre" />
						<div class="ligne-input"></div>
					</div>
					
				<br>
					<div class="elements-input">
						<label class="label-text" for="HeureRencontre">Nouvelle heure de la rencontre :</label>
						<input type="text" name="HeureRencontre" />
						<div class="ligne-input"></div>
					</div>
					
				</div>
			</p>
			<p>
				<label class="label-text" for="Report">Report du match :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Report" id="ReportOui" required onchange="showReport()" />
				<label name="non">Non</label>
				<input type="radio" name="Report" required onchange="showReport()" /><br>
			<div id="rep" class="d-none">
				<div class="elements-input">
					<label class="label-text" for="NvTerrain">Adresse du nouveau terrain :</label>
					<input type="text" name="NvTerrain" />
					<div class="ligne-input"></div>
				</div>
				<br>
				<div class="elements-input">
					<label class="label-text" for="DateRencontre">Nouvelle date pour la rencontre :</label>
					<input type="text" name="DateRencontre" />
					<div class="ligne-input"></div>
				</div>
				
				<br>
				<div class="elements-input">
					<label class="label-text" for="HeureRencontre">Nouvelle heure de la rencontre :</label>
					<input type="text" name="HeureRencontre" />
					<div class="ligne-input"></div>
				</div>
				
			</div>
			</p>
			<p>
				<label class="label-text" for="ContactDistrict">Contact du district :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactDistrict" required />
				<label name="non">Non</label>
				<input type="radio" name="ContactDistrict" required />
			</p>
			<p>
				<label class="label-text" for="ContactPolice">Contact des forces de l'ordre :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactPolice" required />
				<label name="non">Non</label>
				<input type="radio" name="ContactPolice" required />
			</p>
			<fieldset>
				<legend>
					<label for="IncidentRec">Si incident :</label>
					<label name="oui">Oui</label>
					<input type="radio" name="IncidentRec" id="IncidentOui1" required onchange="showIncident1()" />
					<label name="non">Non</label>
					<input type="radio" name="IncidentRec" required onchange="showIncident1()" />
				</legend>
				<div id="incident1" class="d-none">
					<p>
						Type d'incivilité :
					</p>
					<p>
						<label for="titre">Violence à personne(s) :</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs"> Sur joueurs</label><br>
						<input type="checkbox" name="arbitres" value="arbitres">
						<label for="arbitres"> Sur arbitres</label><br>
						<input type="checkbox" name="délégué" value="délégué">
						<label for="délégué"> Sur délégué</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants"> Sur dirigeants</label><br>
						<input type="checkbox" name="spectateurs" value="spectateurs">
						<label for="spectateurs"> Sur spectateurs</label><br>
					</p>
					<p>
						<label for="titre">Atteinte aux biens :</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs"> Sur joueurs</label><br>
						<input type="checkbox" name="arbitres" value="arbitres">
						<label for="arbitres"> Sur arbitres</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants"> Sur dirigeants</label><br>
						<input type="checkbox" name="spectateurs" value="spectateurs">
						<label for="spectateurs"> Sur spectateurs</label><br>
					</p>
					<p>
						<label for="titre">Agression verbale :</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs"> Sur joueurs</label><br>
						<input type="checkbox" name="arbitres" value="arbitres">
						<label for="arbitres"> Sur arbitres</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants"> Sur dirigeants</label><br>
						<input type="checkbox" name="spectateurs" value="spectateurs">
						<label for="spectateurs"> Sur spectateurs</label><br>
					</p>
					<p>
						<label for="titre">Envahissement de terrain :</label><br>
						<input type="checkbox" name="avecviolence" value="avecviolence">
						<label for="avecviolence">Avec violence</label><br>
						<input type="checkbox" name="sansviolence" value="sansviolence">
						<label for="sansviolence">Sans violence</label><br>
					</p>
					<p>
						<label for="titre">Victime(s) concernée(s) :</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs"> Sur joueurs</label><br>
						<input type="checkbox" name="éducateurs" value="éducateurs">
						<label for="éducateurs">Sur éducateurs</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants"> Sur dirigeants</label><br>
						<input type="checkbox" name="arbitres" value="arbitres">
						<label for="arbitres"> Sur arbitres</label><br>
						<input type="checkbox" name="délégué" value="délégué">
						<label for="délégué"> Sur délégué</label><br>
						<input type="checkbox" name="spectateurs" value="spectateurs">
						<label for="spectateurs"> Sur spectateurs</label><br>
						<input type="checkbox" name="autres" value="autres">
						<label for="autres"> Sur autres</label><br>
					</p>
					<p>
						<label for="titre">Auteur(s) présumé(s) :</label><br>

						<div class="elements-input">
							<label for="majeurs">Nombre de majeurs</label>
							<input type="text" name="majeurs"><br>
							<div class="ligne-input"></div>
						</div>
						
						<input type="checkbox" name="connu" value="connu">
						<label for="autres"> Déja connu</label><br>
						<input type="checkbox" name="membre" value="membre">
						<label for="membre"> Membre d'un club</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs">Un joueur</label><br>
						<input type="checkbox" name="éducateurs" value="éducateurs">
						<label for="éducateurs">Un éducateur</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants">Un dirigeant</label><br>
						<input type="checkbox" name="autres" value="autres">
						<label for="autres">Un autre</label><br>

						<div class="elements-input">
							<label for="mineurs">Nombre de mineurs</label>
							<input type="text" name="mineurs"><br>
							<div class="ligne-input"></div>
						</div>
						
						<input type="checkbox" name="connu" value="connu">
						<label for="autres"> Déja connu</label><br>
						<input type="checkbox" name="membre" value="membre">
						<label for="membre"> Membre d'un club</label><br>
						<label for="joueurs">Un joueur</label><br>
						<input type="checkbox" name="éducateurs" value="éducateurs">
						<label for="éducateurs">Un éducateur</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants">Un dirigeant</label><br>
						<input type="checkbox" name="autres" value="autres">
						<label for="autres">Un autre</label><br>
					</p>
					<p>
						<label for="titre">Mesure(s) prise(s) :</label><br>
						<label for="titre">Mesure(s) immédiate(s) :</label><br>
						<input type="checkbox" name="police" value="police">
						<label for="police"> Appel de la police</label><br>
						<input type="checkbox" name="gendarmerie" value="gendarmerie">
						<label for="gendarmerie">Appel de la gendarmerie</label><br>
						<input type="checkbox" name="municipale" value="municipale">
						<label for="municipale">Appel de la police municipale</label><br>
						<input type="checkbox" name="mairie" value="mairie">
						<label for="mairie">Appel de la mairie</label><br>
						<input type="checkbox" name="pompiers" value="pompiers">
						<label for="pompiers">Appel des pompiers</label><br>
						<input type="checkbox" name="SAMU" value="SAMU">
						<label for="SAMU">Appel du SAMU</label><br>
						<input type="checkbox" name="autres" value="autres">
						<label for="autres">Autre</label><br>


						<label for="titre">Mesure(s) ultérieure(s) :</label><br>
						<input type="checkbox" name="exam" value="exam">
						<label for="exam">Examen(s) médical(aux)</label><br>
						<input type="checkbox" name="hospit" value="hospit">
						<label for="hospit">Hospitalisation(s)</label><br>
						<input type="checkbox" name="maincourante" value="maincourante">
						<label for="maincourante">Déposition(s) sur main courante</label><br>
						<input type="checkbox" name="plainte" value="plainte">
						<label for="plainte">Dépôt(s) de plainte(s)</label><br>
					</p>
				</div>
			</fieldset>
		</fieldset>

		<br>


		<fieldset id="club">
			<h3>
				Partie club visiteur
			</h3>
			<p>
				<div class="elements-input">
					<label for="nomClub">Nom du club :</label>
					<input type="text" name="nomClub" />
					<div class="ligne-input"></div>
				</div>
			</p>
			<fieldset>
				<legend>
					<label for="IncidentRec">Si incident :</label>
					<label name="oui">Oui</label>
					<input type="radio" name="IncidentRec" id="IncidentOui2" required onchange="showIncident2()" />
					<label name="non">Non</label>
					<input type="radio" name="IncidentRec" required onchange="showIncident2()" />
				</legend>
				<div id="incident2" class="d-none">
					<p>
						Type d'incivilité :
					</p>
					<p>
						<label for="titre">Violence à personne(s) :</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs"> Sur joueurs</label><br>
						<input type="checkbox" name="arbitres" value="arbitres">
						<label for="arbitres"> Sur arbitres</label><br>
						<input type="checkbox" name="délégué" value="délégué">
						<label for="délégué"> Sur délégué</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants"> Sur dirigeants</label><br>
						<input type="checkbox" name="spectateurs" value="spectateurs">
						<label for="spectateurs"> Sur spectateurs</label><br>
					</p>
					<p>
						<label for="titre">Atteinte aux biens :</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs"> Sur joueurs</label><br>
						<input type="checkbox" name="arbitres" value="arbitres">
						<label for="arbitres"> Sur arbitres</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants"> Sur dirigeants</label><br>
						<input type="checkbox" name="spectateurs" value="spectateurs">
						<label for="spectateurs"> Sur spectateurs</label><br>
					</p>
					<p>
						<label for="titre">Agression verbale :</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs"> Sur joueurs</label><br>
						<input type="checkbox" name="arbitres" value="arbitres">
						<label for="arbitres"> Sur arbitres</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants"> Sur dirigeants</label><br>
						<input type="checkbox" name="spectateurs" value="spectateurs">
						<label for="spectateurs"> Sur spectateurs</label><br>
					</p>
					<p>
						<label for="titre">Envahissement de terrain :</label><br>
						<input type="checkbox" name="avecviolence" value="avecviolence">
						<label for="avecviolence">Avec violence</label><br>
						<input type="checkbox" name="sansviolence" value="sansviolence">
						<label for="sansviolence">Sans violence</label><br>
					</p>
					<p>
						<label for="titre">Victime(s) concernée(s) :</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs"> Sur joueurs</label><br>
						<input type="checkbox" name="éducateurs" value="éducateurs">
						<label for="éducateurs">Sur éducateurs</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants"> Sur dirigeants</label><br>
						<input type="checkbox" name="arbitres" value="arbitres">
						<label for="arbitres"> Sur arbitres</label><br>
						<input type="checkbox" name="délégué" value="délégué">
						<label for="délégué"> Sur délégué</label><br>
						<input type="checkbox" name="spectateurs" value="spectateurs">
						<label for="spectateurs"> Sur spectateurs</label><br>
						<input type="checkbox" name="autres" value="autres">
						<label for="autres"> Sur autres</label><br>
					</p>
					<p>
						<label for="titre">Auteur(s) présumé(s) :</label><br>
						<div class="elements-input">						
							<label for="majeurs">Nombre de majeurs</label>
							<input type="text" name="majeurs"><br>
							<div class="ligne-input"></div>
						</div>
							
						<input type="checkbox" name="connu" value="connu">
						<label for="autres"> Déja connu</label><br>
						<input type="checkbox" name="membre" value="membre">
						<label for="membre"> Membre d'un club</label><br>
						<input type="checkbox" name="joueurs" value="joueurs">
						<label for="joueurs">Un joueur</label><br>
						<input type="checkbox" name="éducateurs" value="éducateurs">
						<label for="éducateurs">Un éducateur</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants">Un dirigeant</label><br>
						<input type="checkbox" name="autres" value="autres">
						<label for="autres">Un autre</label><br>


						<div class="elements-input">
							<div class="ligne-input"></div>
							<label for="mineurs">Nombre de mineurs</label>
							<input type="text" name="mineurs"><br>
						</div>
							
						<input type="checkbox" name="connu" value="connu">
						<label for="autres"> Déja connu</label><br>
						<input type="checkbox" name="membre" value="membre">
						<label for="membre"> Membre d'un club</label><br>
						<label for="joueurs">Un joueur</label><br>
						<input type="checkbox" name="éducateurs" value="éducateurs">
						<label for="éducateurs">Un éducateur</label><br>
						<input type="checkbox" name="dirigeants" value="dirigeants">
						<label for="dirigeants">Un dirigeant</label><br>
						<input type="checkbox" name="autres" value="autres">
						<label for="autres">Un autre</label><br>
					</p>
					<p>
						<label for="titre">Mesure(s) prise(s) :</label><br>
						<label for="titre">Mesure(s) immédiate(s) :</label><br>
						<input type="checkbox" name="police" value="police">
						<label for="police"> Appel de la police</label><br>
						<input type="checkbox" name="gendarmerie" value="gendarmerie">
						<label for="gendarmerie">Appel de la gendarmerie</label><br>
						<input type="checkbox" name="municipale" value="municipale">
						<label for="municipale">Appel de la police municipale</label><br>
						<input type="checkbox" name="mairie" value="mairie">
						<label for="mairie">Appel de la mairie</label><br>
						<input type="checkbox" name="pompiers" value="pompiers">
						<label for="pompiers">Appel des pompiers</label><br>
						<input type="checkbox" name="SAMU" value="SAMU">
						<label for="SAMU">Appel du SAMU</label><br>
						<input type="checkbox" name="autres" value="autres">
						<label for="autres">Autre</label><br>


						<label for="titre">Mesure(s) ultérieure(s) :</label><br>
						<input type="checkbox" name="exam" value="exam">
						<label for="exam">Examen(s) médical(aux)</label><br>
						<input type="checkbox" name="hospit" value="hospit">
						<label for="hospit">Hospitalisation(s)</label><br>
						<input type="checkbox" name="maincourante" value="maincourante">
						<label for="maincourante">Déposition(s) sur main courante</label><br>
						<input type="checkbox" name="plainte" value="plainte">
						<label for="plainte">Dépôt(s) de plainte(s)</label><br>
					</p>
				</div>
			</fieldset>

		</fieldset>


		<br />


		<fieldset id="ddcs">
			<h3>
				Partie DDCS
			</h3>

			<p>
				<label for="ContactReceveur">Personne contactée du club receveur :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactReceveur" id="ContactOui1" required onchange="showContact1()" />
				<label name="non">Non</label>
				<input type="radio" name="ContactReceveur" required onchange="showContact1()" />
			</p>
			<div id="contact1" class="d-none">
				<p>
					<label for="ExplicationsReceveur">Justification du contact :</label>
					<textarea id="ExplicationsReceveur" name="ExplicationsReceveur" rows="5" cols="33"></textarea>
				</p>
			</div>
			<p>
				<label for="ContactVisiteur">Personne contactée du club visiteur :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactVisiteur" id="ContactOui2" required onchange="showContact2()" />
				<label name="non">Non</label>
				<input type="radio" name="ContactVisiteur" required onchange="showContact2()" />
			</p>
			<div id="contact2" class="d-none">
				<p>
					<label for="ExplicationsVisiteur">Justification du contact :</label>
					<textarea id="ExplicationsVisiteur" name="ExplicationsVisiteur" rows="5" cols="33"></textarea>
				</p>
			</div>
			<fieldset>
				<legend>
					SI INCIDENT
				</legend>
			</fieldset>
		</fieldset>

		</br>


		<fieldset id="police">
			<h3>
				Partie Force de l'ordre
			</h3>
			<p>
				<label for="Procédure">Moyens mis en oeuvre :</label>
				<textarea id="Procédure" name="Procédure" rows="5" cols="33"></textarea>
			</p>
			<fieldset>
				<legend>
					SI INCIDENT
				</legend>
			</fieldset>
		</fieldset>
		<br>
		<button id="valide">Valider</button>
	</form>
</body>

</html>