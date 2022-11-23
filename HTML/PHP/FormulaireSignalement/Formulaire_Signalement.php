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
	<form action="PHP/FormulaireSignalement/Renseignement.php" method="POST">
	
		<h1>LUTTE CONTRE LA VIOLENCE DANS LE FOOTBALL DISPOSITIF<br>D'ALERTE ET DE PREVENTION</h1>
		<h2>FICHE DE SIGNALEMENT DE RENCONTRE A RISQUES (une fiche par rencontre signalée)<br>A retourner <span class="rouge gras souligne">72 heures minimum</span> avant la rencontre</h2>
		<p>Les information concernant les clubs qui se rencontrent doivent être impérativement renseignées</p>

		<fieldset>
			<p>	
				District de football concerné :
				<span class="gras"><label for="Nord77" class="district">Nord 77: </label></span>
				<input id="Nord77" name="district" value="Nord 77" type="radio" required>
				<span class="gras"><label for="Sud77" class="district">Sud 77: </label></span>
				<input id="Sud77" name="district" value="Sud 77" type="radio" required>
				<span class="gras"><label for="numMatch" class="district" id="labelNumMatch">N° de match : </label></span>
				<input id="numMatch" name="numMatch" type="text"> 
			</p>
			<p>
				<label for="rencontre">Rencontre entre: </label>
				<input id="rencontre" name="rencontre" type="text">
				<label for="et"> et </label>
				<input id="et" name="et" type="text">
				<label for="categorie">Catégorie: </label>
				<select name="categorie"> 
					<option value="Debutants (U6-U7/U8-U9)">Débutants (U6-U7/U8-U9)</option>
					<option value="Poussins (U10-U11)">Poussins (U10-U11)</option>
					<option value="Benjamins (U12-U13)">Benjamins (U12-U13)</option>
					<option value="U15-U14">U15-U14</option>
					<option value="U17-U16">U17-U16</option>
					<option value="U19-U18">U19-U18</option>
					<option value="Seniors">Séniors</option>
					<option value="Anciens">Anciens</option>
					<option value="Veterans +45ans">Vétérans +45ans</option>
					<option value="Veterans +55ans">Vétérans +55ans</option>
				</select>
			</p>
			<p>
				<label for="date">Date: </label>
				<input id="date" name="date" type="date">
				<label for="lien">Lieu :</label>
				<input id="lieu" name="lieu" type="text">
				<label for="horaire">Horaires: </label>
				<input id="horaire" name="horaire" type="time">
			</p>

		</fieldset>
		<br/>
		<fieldset>
		<div id="nature_gravite">
			<div id="nature">
				<p>	Nature du risque (plusieurs réponses possibles):</p>
				<p>1) Lié à l'enjeu sportif<br/>(enjeu important de la rencontre)</p>	
				<p>2) Lié aux spectateurs<br/>(fortes affluences attendues, médiation, présence de personnalités)</p>
				<p>3) Lié à un contentieux entre clubs - contexte d'ordre public sensible<br/>(ex: incident match aller)</p>
				<p>4) Lié à un contentieux entre supporters - contexte d'ordre public sensibe</p>
				<p>Description des incidents antérieurs motivant la déclaration (<span class="gras">obligatoire</span>): </p>
				<p><input id="descIncident" name="descIncident" type="text"></p>
				</p>
			</div>
			<div id="gravite">
				<main>
					<table>
						<tr> <th colspan="3">Gravité</th> </tr>
						<tr>
							<td>Faible</td>
							<td>Moyen</td>
							<td>Forte</td>
						</tr>
						<tr>
							<td class="boutonRadio"><input id="enjeuFa" name="enjeu" type="radio" required></td>
							<td class="boutonRadio"><input id="enjeuM" name="enjeu" type="radio" required></td>
							<td class="boutonRadio"><input id="enjeuFo" name="enjeu" type="radio" required></td>
						</tr>
						<tr>
							<td class="boutonRadio"><input id="spectateurFa" name="spectateur" type="radio" required></td>
							<td class="boutonRadio"><input id="spectateurM" name="spectateur" type="radio" required></td>
							<td class="boutonRadio"><input id="spectateurFo" name="spectateur" type="radio" required></td>
						</tr>
						<tr>
							<td class="boutonRadio"><input id="contentieuxCFa" name="contentieuxC" type="radio" required></td>
							<td class="boutonRadio"><input id="contentieuxCM" name="contentieuxC" type="radio" required></td>
							<td class="boutonRadio"><input id="contentieuxCFo" name="contentieuxC" type="radio" required></td>
						</tr>
						<tr>
							<td class="boutonRadio"><input id="contentieuxSFa" name="contentieuxS" type="radio" required></td>
							<td class="boutonRadio"><input id="contentieuxSM" name="contentieuxS" type="radio" required></td>
							<td class="boutonRadio"><input id="contentieuxSFo" name="contentieuxS" type="radio" required></td>
						</tr>
					</table>
				</main>
			</div>
		</div>
		</fieldset>
		<br/>
		<fieldset> 
			<p>
				<span class="souligne">Nom du Club <span class="gras">recevant</span></span>
				<input id="nomCRec" name="nomCRec" type="text">
			</p>
			<p>
				Personne à contacter lors de la rencontre
				<input id="persAContacterRec" name="persAContacterRec" type="text">
			</p>
			<p>
				Téléphones (s)
				<input id="telRec" name="telRec" type="tel">
			</p>
			<p>
				<span class="souligne">Nom du Club <span class="gras">visiteur</span></span>
				<input id="nomCVisiteur" name="nomCVisiteur" type="text">
			</p>
			<p>
				Personne à contacter lors de la rencontre
				<input id="persAContacterVis" name="persAContacterVis" type="text">
			</p>
			<p>
				Téléphones (s)
				<input id="telVis" name="telVis" type="tel">
			</p>
			<p>
				Des contacts ont-ils été pris entre les deux clubs: 
				<input id="oui" name="contacts" value="oui" type="radio"  required>
				<span class="gras"> <label for="oui">Oui </label></span>
				<input id="non" name="contacts" value="non" type="radio"  required>
				<span class="gras"> <label for="non">Non </label></span>
			</p>
		</fieldset>
		
		<p><span class="souligne">Coordonnées du <span class="gras">déclarant</span></span></p>

		<main>
			<table>
				<tr>
					<td></td>
					<td>Nom</td>
					<td>Prénom</td>
					<td>Fonction</td>
					<td>Téléphone</td>
				</tr>
				<tr>
					<td>Club Recevant</td>
					<td> <input id="nomR" name="nomR" type="text"> </td>
					<td> <input id="prenomR" name="prenomR" type="text"> </td>
					<td> <input id="fonctionR" name="fonctionR" type="text"> </td>
					<td> <input id="telR" name="telR" type="tel"> </td>
				</tr>
				<tr>
					<td>Club Visiteur</td>
					<td> <input id="nomV" name="nomV" type="text"> </td>
					<td> <input id="prenomV" name="prenomV" type="text"> </td>
					<td> <input id="fonctionV" name="fonctionV" type="text"> </td>
					<td> <input id="telV" name="telV" type="tel"> </td>
				</tr>
			</table>
		</main>
		
		<p>
			<label for="faitA">Fait à: </label>
			<input id="faitA" name="faitA" type="text">
			<label for="le">Le:  </label>
			<input id="le" name="le" type="text">
			<label for="signature">Signature: </label>
		</p>

		<p>
			<label for="rendrePublic">Voulez-vous rendre public votre formulaire ?</label>
			<input id="rendrePublic" name="rendrePublic" type="checkbox" value="rendrePublic" required>
		</p>

		<p><input id="validation" class="bouton" type="submit" value="Valider"></p>
	</form>
	
</body>
</html>