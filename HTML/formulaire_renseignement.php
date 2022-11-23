<?php




?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link rel="stylesheet" href="css/formulaire.css" type="text/css">
	<title>Fiche de signalement de rencontres à risques</title>
</head>

<body>
    <script type="text/javascript" src="formulaire_renseignement.js"></script>
	<form action="formulaire_renseignement.php" method="POST">

		<fieldset id="club">
			<legend>
				Partie club receveur
			</legend>
			<p>
				<label for="nomClub">Nom du club :</label>
				<input type="text" name="nomClub" required />
			</p>
			<p>
				<label for="NumMatch">Numéro du match :</label>
				<input type="text" name="NumMatch" required />
			</p>
			<p>
				<label for="Catégorie">Catégorie :</label>
				<input type="text" name="Catégorie" required />
			</p>
			<p>
				<label for="Date">Date :</label>
				<input type="text" name="Date" required />
			</p>
			<p>
				<label for="Lieu">Lieu :</label>
				<input type="text" name="Lieu" required />
			</p>
			<p>
				<label for="Horaires">Horaires :</label>
				<input type="text" name="Horaires" required />
			</p>
			<p>
				<label for="Délégués">Envoi de délégués :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Délégués" required />
				<label name="non">Non</label>
				<input type="radio" name="Délégués" required /><br>
				<label for="nomDélégué">Nom du délégué :</label>
				<input type="text" name="nomDélégué" />
				<label for="telDélégué">Téléphone du délégué :</label>
				<input type="text" name="telDélégué" />
			</p>
			<p>
				<label for="Arbitres">Envoi d'arbitres :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Arbitres" required />
				<label name="non">Non</label>
				<input type="radio" name="Arbitres" required /><br>
				<label for="nbArbitre">Nombre d'arbitres :</label>
				<input type="text" name="nbArbitre" />
			</p>
			<p>
				<label for="Terrain">Changement de terrain :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Terrain" required />
				<label name="non">Non</label>
				<input type="radio" name="Terrain" required /><br>
				<label for="NvTerrain">Adresse du nouveau terrain :</label>
				<input type="text" name="NvTerrain" />
				<label for="DateRencontre">Nouvelle date pour la rencontre :</label>
				<input type="text" name="DateRencontre" />
				<label for="HeureRencontre">Nouvelle heure de la rencontre :</label>
				<input type="text" name="HeureRencontre" />
			</p>
			<p>
				<label for="Report">Report du match :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="Report" required />
				<label name="non">Non</label>
				<input type="radio" name="Report" required /><br>
				<label for="NvTerrain">Adresse du nouveau terrain :</label>
				<input type="text" name="NvTerrain" />
				<label for="DateRencontre">Nouvelle date pour la rencontre :</label>
				<input type="text" name="DateRencontre" />
				<label for="HeureRencontre">Nouvelle heure de la rencontre :</label>
				<input type="text" name="HeureRencontre" />
			</p>
			<p>
				<label for="ContactDistrict">Contact du district :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactDistrict" required />
				<label name="non">Non</label>
				<input type="radio" name="ContactDistrict" required />
			</p>
			<p>
				<label for="ContactPolice">Contact des forces de l'ordre :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactPolice" required />
				<label name="non">Non</label>
				<input type="radio" name="ContactPolice" required />
			</p>
			<fieldset>
				<legend>
					<label for="IncidentRec">Si incident :</label>
					<label name="oui">Oui</label>
					<input type="radio" name="IncidentRec" required />
					<label name="non">Non</label>
					<input type="radio" name="IncidentRec" required />
				</legend>
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
					<label for="majeurs">Nombre de majeurs</label>
					<input type="text" name="majeurs"><br>
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


					<label for="mineurs">Nombre de mineurs</label>
					<input type="text" name="mineurs"><br>
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
			</fieldset>


		</fieldset>
		<br>
		<fieldset id="club">
			<legend>
				Partie club visiteur
			</legend>
			<p>
				<label for="nomClub">Nom du club :</label>
				<input type="text" name="nomClub" />
			</p>
			<fieldset>
				<legend>
					<label for="IncidentRec">Si incident :</label>
					<label name="oui">Oui</label>
					<input type="radio" name="IncidentRec" required />
					<label name="non">Non</label>
					<input type="radio" name="IncidentRec" required />
				</legend>
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
					<label for="majeurs">Nombre de majeurs</label>
					<input type="text" name="majeurs"><br>
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


					<label for="mineurs">Nombre de mineurs</label>
					<input type="text" name="mineurs"><br>
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
			</fieldset>

		</fieldset>
		<br />
		<fieldset id="ddcs">
			<legend>
				Partie DDCS
			</legend>

			<p>
				<label for="ContactReceveur">Personne contactée du club receveur :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactReceveur" required />
				<label name="non">Non</label>
				<input type="radio" name="ContactReceveur" required />
			</p>
			<p>
				<label for="ExplicationsReceveur">Justification du contact :</label>
				<textarea id="ExplicationsReceveur" name="ExplicationsReceveur" rows="5" cols="33"></textarea>
			</p>
			<p>
				<label for="ContactVisiteur">Personne contactée du club visiteur :</label>
				<label name="oui">Oui</label>
				<input type="radio" name="ContactVisiteur" required />
				<label name="non">Non</label>
				<input type="radio" name="ContactVisiteur" required />
			</p>
			<p>
				<label for="ExplicationsVisiteur">Justification du contact :</label>
				<textarea id="ExplicationsVisiteur" name="ExplicationsVisiteur" rows="5" cols="33"></textarea>
			</p>
			<fieldset>
				<legend>
					SI INCIDENT
				</legend>
			</fieldset>
		</fieldset>

		<br />
		<fieldset id="police">
			<legend>
				Partie Force de l'ordre
			</legend>
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