<?php

require_once('models/SignalementManager.php');

class SignalementController{

    private SignalementManager $manager;

    ///Fonction index qui permet de générer la vue
    public function __construct()
    {
        $this->manager = new SignalementManager();
    }

    public function genererTab(array $data) : string
    {
        $tableau='';
        $tableau.="<form id='formulaire' action='PHP/Validation.php?Id_Rencontre=".$data['idRencontre']."' method='POST'>
		<fieldset id='club-receveur' class='<?=$"."voirClub?>'>
			<h3>
				Partie club receveur
			</h3>
				<p>
					<div class='elements-input'>
						<label class='label-text' for='nomClub'>Nom du club :</label>
						<br>
						<input type='text' name='nomClub' value=".$data['clubReceveur']." ?> <?=$"."requiredClub?>
						<div class='ligne-input'></div>
					</div>
					
				</p>
				<p>		
					
					<div class='elements-input'>
						<label class='label-text' for='numMatch'>Numéro du match :</label>
						<br>
						<input type='text' name='numMatch' <?=$"."requiredClub?>
						<div class='ligne-input'></div>
					</div>
					
				</p>
				<p>
					<div class='elements-input'>
						<label class='label-text' for='categorie'>Catégorie :</label>
						<input type='text' name='categorie' <?=$"."requiredClub?> 
						<div class='ligne-input'></div>
					</div>
					
				</p>
				<p>
					<div class='elements-input'>
						<label class='label-text' for='date'>Date :</label>
						<input type='text' name='date' value=".$data['dateRencontre']." <?=$"."requiredClub?> 
						<div class='ligne-input'></div>
					</div>
					
				</p>
				<p>
					<div class='elements-input'>
						<label class='label-text' for='adresse'>Adresse Stade :</label>
						<input type='text' name='adresse' value=".$data['adresseStade']." <?=$"."requiredClub?> 
						<div class='ligne-input'></div>
					</div>
					
				</p>
				<p>
					<div class='elements-input'>
						<label class='label-text' for='ville'>Ville :</label>
						<input type='text' name='ville' value=".$data['ville']." <?=$"."requiredClub?> 
						<div class='ligne-input'></div>
					</div>
					
				</p>
				<p>
					<div class='elements-input'>
						<label class='label-text' for='horaires'>Horaires :</label>
						<input type='text' name='horaires' <?=$"."requiredClub?> 
						<div class='ligne-input'></div>
					</div>
					
				</p>
			
				<p>
				<label class='label-text' for='Délégués'>Envoi de délégués :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='Délégués' id='DeleguesOui' onchange=showDelegues() <?=$"."requiredClub?>
                
				<div class='d-none' id='deleg'>
                    <div class='elements-input'>
                        <label class='label-text' for='nomDelegue'>Nom du délégué :</label>
                        <input type='text' name='nomDelegue' 
                    
                        <br>
                        <label class='label-text' for='telDelegue'>Téléphone du délégué :</label>
                        <input type='text' name='telDelegue' 
                        <div class='ligne-input'></div>
                    </div>
				</div>
			</p>

			<p>
				<label class='label-text' for='Arbitres'>Envoi d'arbitres :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='Arbitres' id='ArbitresOui'  onchange='showArbitres()' <?=$"."requiredClub?> 
				<div id='arb' class='d-none'>
					<div class='elements-input'>
						<label class='label-text' for='nbArbitre'>Nombre d'arbitres :</label>
						<input type='text' name='nbArbitre'
						<div class='ligne-input'></div>
					</div>
					
				</div>
			</p>
			<p>
				<label class='label-text' for='Terrain'>Changement de terrain :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='Terrain' id='TerrainsOui' onchange='showTerrains()' <?=$"."requiredClub?>  
				<div id='terr' class='d-none'>
					<div class='elements-input'>
						<label class='label-text' for='adresseTerrain'>Adresse du nouveau terrain :</label>
						<input type='text' name='adresseTerrain'
						
                        <br>
                        <label class='label-text' for='dateRencontre'>Nouvelle date pour la rencontre :</label>
						<input type='text' name='dateRencontre'
						
                        <br>
                        <label class='label-text' for='heureRencontre'>Nouvelle heure de la rencontre :</label>
						<input type='text' name='heureRencontre'
						<div class='ligne-input'></div>
					</div>	
				</div>
			</p>
			<p>
				<label class='label-text' for='Report'>Report du match :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='Report' id='ReportOui' onchange='showReport()' <?=$"."requiredClub?>  
				
			<div id='rep' class='d-none'>
				<div class='elements-input'>
					<label class='label-text' for='adresseTerrain'>Adresse du nouveau terrain :</label>
					<input type='text' name='adresseTerrain' 
					
                    <label class='label-text' for='dateRencontre'>Nouvelle date pour la rencontre :</label>
					<input type='text' name='dateRencontre'
					
                    <label class='label-text' for='heureRencontre'>Nouvelle heure de la rencontre :</label>
					<input type='text' name='heureRencontre'
					<div class='ligne-input'></div>
				</div>
				<br>
				
			</div>
			</p>
			<p>
				<label class='label-text' for='contactDistrict'>Contact du district :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='contactDistrict' <?=$"."requiredClub?> 
			
			</p>
			<p>
				<label class='label-text' for='contactPolice'>Contact des forces de l'ordre :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='contactPolice' <?=$"."requiredClub?>
			</p>
			<fieldset>
				<legend>
					<label for='IncidentRec'>Y a-t-il eu un incident ? :</label>
					<label name='oui'>Oui</label>
					<input type='checkbox' name='IncidentRec' id='IncidentOui1' onchange='showIncident1()' <?=$"."requiredClub?> 
					
				</legend>
				<div id='incident1' class='d-none'>
					<h5>
					<label> Type d'incivilité :</label>
					</h5>
					<p>
						<label for='titre'>S'il y a eu une agression verbale, sur qui était-elle portée :</label><br>
						<input type='checkbox' name='agressionVerbaleJoueurs' value='yes'>
						<label for='agressionVerbaleJoueurs'>Joueur(s)</label><br>
						<input type='checkbox' name='agressionVerbaleArbitres' value='yes'>
						<label for='agressionVerbaleArbitres'>Arbitre(s)</label><br>
						<input type='checkbox' name='agressionVerbaleDirigeants' value='yes'>
						<label for='agressionVerbaleDirigeants'>Dirigeant(s)</label><br>
						<input type='checkbox' name='agressionVerbaleSpectateurs' value='yes'>
						<label for='agressionVerbaleSpectateurs'>Spectateur(s)</label><br>
					</p>
					<p>
						<label for='titre'>S'il y a eu des victime(s), qui sont elles ? :</label><br>
						<input type='checkbox' name='victimeConcerneJoueurs' value='yes'>
						<label for='victimeConcerneJoueurs'>Joueur(s)</label><br>
						<input type='checkbox' name='victimeConcerneEducateur' value='yes'>
						<label for='victimeConcerneEducateur'>Éducateur(s)</label><br>
						<input type='checkbox' name='victimeConcerneDirigeants' value='yes'>
						<label for='victimeConcerneDirigeants'>Dirigeant(s)</label><br>
						<input type='checkbox' name='victimeConcerneArbitres' value='yes'>
						<label for='victimeConcerneArbitres'>Arbitre(s)</label><br>
						<input type='checkbox' name='victimeConcerneDelegue' value='yes'>
						<label for='victimeConcerneDelegue'>Délégué(s)</label><br>
						<input type='checkbox' name='victimeConcerneSpectateurs' value='yes'>
						<label for='victimeConcerneSpectateurs'>Spectateur(s)</label><br>
						<input type='checkbox' name='victimeConcerneAutre' value='yes'>
						<label for='victimeConcerneAutre'>Autre(s)</label><br>
					</p>
					<p>
						<label for='titre'>Qui sont les auteurs présumés ? :</label><br>
						
						<input type='checkbox' name='auteurPresumeMineurMembreClub' value='yes'>
						<label for='auteurPresumeMineurMembreClub'>Un membre d'un club</label><br>
						<input type='checkbox' name='auteurPresumeMineurJoueur' value='yes'>
						<label for='auteurPresumeMineurJoueur'>Un joueur</label><br>
						<input type='checkbox' name='auteurPresumeMineurEducateur' value='yes'>
						<label for='auteurPresumeMineurEducateur'>Un éducateur</label><br>
						<input type='checkbox' name='auteurPresumeMineurDirigeant' value='yes'>
						<label for='auteurPresumeMineurDirigeant'>Un dirigeant</label><br>
						<input type='checkbox' name='auteurPresumeMineurAutre' value='yes'>
						<label for='auteurPresumeMineurAutre'>Un autre</label><br>
					</p>
					<p>
						<h5><label for='titre'>Qu'elles sont les mesure(s) qui ont été prise(s) ? :</label></h5><br>
						<label for='titre'>La (les) mesure(s) immédiate(s) :</label><br>
						<input type='checkbox' name='mesuresImediatesPolice' value='yes'>
						<label for='mesuresImediatesPolice'> Appel de la police</label><br>
						<input type='checkbox' name='mesuresImediatesGendarmerie' value='yes'>
						<label for='mesuresImediatesGendarmerie'>Appel de la gendarmerie</label><br>
						<input type='checkbox' name='mesuresImediatesPoliceMunicipale' value='yes'>
						<label for='mesuresImediatesPoliceMunicipale'>Appel de la police municipale</label><br>
						<input type='checkbox' name='mesuresImediatesMairie' value='yes'>
						<label for='mesuresImediatesMairie'>Appel de la mairie</label><br>
						<input type='checkbox' name='mesuresImediatesPompiers' value='yes'>
						<label for='mesuresImediatesPompiers'>Appel des pompiers</label><br>
						<input type='checkbox' name='mesuresImediatesSamu' value='yes'>
						<label for='mesuresImediatesSamu'>Appel du SAMU</label><br>
						<input type='checkbox' name='mesuresImediatesAutres' value='yes'>
						<label for='mesuresImediatesAutres'>Autre</label><br>


						<label for='titre'>La (les) mesure(s) ultérieure(s) :</label><br>
						<input type='checkbox' name='mesuresUlterieursExamMedical' value='yes'>
						<label for='mesuresUlterieursExamMedical'>Examen(s) médical(aux)</label><br>
						<input type='checkbox' name='mesuresUlterieursHospitalisation' value='yes'>
						<label for='mesuresUlterieursHospitalisation'>Hospitalisation(s)</label><br>
						<input type='checkbox' name='mesuresUlterieursMainCourante' value='yes'>
						<label for='mesuresUlterieursMainCourante'>Déposition(s) sur main courante</label><br>
						<input type='checkbox' name='mesuresUlterieursDepoPlainte' value='yes'>
						<label for='mesuresUlterieursDepoPlainte'>Dépôt(s) de plainte(s)</label><br>
					</p>
					<p>
						<label for='discription'> Description des évènements qui ont eu lieu : </label><br>
						<textarea id='discriptionReceveur' name='discriptionReceveur' rows='5' cols='50'></textarea>
					</p>
				</div>
			</fieldset>
		</fieldset>

		<br>


		<fieldset id='club' class='<?=$"."voirClub?>'>
			<h3>
				Partie club visiteur
			</h3>
			<p>
				<div class='elements-input'>
					<label for='nomClubVisiteur'>Nom du club :</label>
					<input type='text' name='nomClubVisiteur'  value=".$data['clubVisiteur'].">
					<div class='ligne-input'></div>
				</div>
			</p>
			<fieldset>
				<legend>
					<label for='IncidentRec'>Y a-t-il eu un incident ? :</label>
					<label name='oui'>Oui</label>
					<input type='checkbox' name='IncidentRec' id='IncidentOui2' onchange='showIncident2()' <?=$"."requiredClub?> 
					
				</legend>
				<div id='incident2' class='d-none'>
					<h5>
						<label> Type d'incivilité :</label>
					</h5>
					<p>
						<label for='titre'>S'il y a eu une agression verbale, sur qui était-elle portée :</label><br>
						<input type='checkbox' name='agressionVerbaleJoueursVisiteur' value='joueurs'>
						<label for='agressionVerbaleJoueursVisiteur'>Joueur(s)</label><br>
						<input type='checkbox' name='agressionVerbaleArbitresVisiteur' value='arbitres'>
						<label for='agressionVerbaleArbitresVisiteur'>Arbitre(s)</label><br>
						<input type='checkbox' name='agressionVerbaleDirigeantsVisiteur' value='dirigeants'>
						<label for='agressionVerbaleDirigeantsVisiteur'>Dirigeant(s)</label><br>
						<input type='checkbox' name='agressionVerbaleSpectateursVisiteur' value='spectateurs'>
						<label for='agressionVerbaleSpectateursVisiteur'>Spectateur(s)</label><br>
					</p>
					<p>
						<label for='titre'>S'il y a eu des victime(s), qui sont elles ? :</label><br>
						<input type='checkbox' name='victimeConcerneJoueursVisiteur' value='joueurs'>
						<label for='victimeConcerneJoueursVisiteur'>Joueur(s)</label><br>
						<input type='checkbox' name='victimeConcerneEducateurVisiteur' value='éducateurs'>
						<label for='victimeConcerneEducateurVisiteur'>Éducateur(s)</label><br>
						<input type='checkbox' name='victimeConcerneDirigeantsVisiteur' value='dirigeants'>
						<label for='victimeConcerneDirigeantsVisiteur'>Dirigeant(s)</label><br>
						<input type='checkbox' name='victimeConcerneArbitresVisiteur' value='arbitres'>
						<label for='victimeConcerneArbitresVisiteur'>Arbitre(s)</label><br>
						<input type='checkbox' name='victimeConcerneDelegueVisiteur' value='délégué'>
						<label for='victimeConcerneDelegueVisiteur'>Délégué(s)</label><br>
						<input type='checkbox' name='victimeConcerneSpectateursVisiteur' value='spectateurs'>
						<label for='victimeConcerneSpectateursVisiteur'>Spectateur(s)</label><br>
						<input type='checkbox' name='victimeConcerneAutreVisiteur' value='autres'>
						<label for='victimeConcerneAutreVisiteur'>Autre(s)</label><br>
					</p>
					<p>
						<label for='titre'>Qui sont les auteurs présumés ? :</label><br>
						
						<input type='checkbox' name='auteurPresumeMajeurMembreClubVisiteur' value='membre'>
						<label for='auteurPresumeMajeurMembreClubVisiteur'>Un membre d'un club</label><br>
						<input type='checkbox' name='auteurPresumeMajeurJoueurVisiteur' value='joueurs'>
						<label for='auteurPresumeMajeurJoueurVisiteur'>Un joueur</label><br>
						<input type='checkbox' name='auteurPresumeMajeurEducateurVisiteur' value='éducateurs'>
						<label for='auteurPresumeMajeurEducateurVisiteur'>Un éducateur</label><br>
						<input type='checkbox' name='auteurPresumeMajeurDirigeantVisiteur' value='dirigeants'>
						<label for='auteurPresumeMajeurDirigeantVisiteur'>Un dirigeant</label><br>
						<input type='checkbox' name='auteurPresumeMajeurAutreVisiteur' value='autres'>
						<label for='auteurPresumeMajeurAutreVisiteur'>Un autre</label><br>
					</p>
					<p>
						<h5><label for='titre'>Qu'elles sont les mesure(s) qui ont été prise(s) ? :</label></h5>
						<label for='titre'>La (les) mesure(s) immédiate(s) :</label><br>
						<input type='checkbox' name='mesuresImediatesPoliceVisiteur' value='police'>
						<label for='mesuresImediatesPoliceVisiteur'> Appel de la police</label><br>
						<input type='checkbox' name='mesuresImediatesGendarmerieVisiteur' value='gendarmerie'>
						<label for='mesuresImediatesGendarmerieVisiteur'>Appel de la gendarmerie</label><br>
						<input type='checkbox' name='mesuresImediatesPoliceMunicipaleVisiteur' value='municipale'>
						<label for='mesuresImediatesPoliceMunicipaleVisiteur'>Appel de la police municipale</label><br>
						<input type='checkbox' name='mesuresImediatesMairieVisiteur' value='mairie'>
						<label for='mesuresImediatesMairieVisiteur'>Appel de la mairie</label><br>
						<input type='checkbox' name='mesuresImediatesPompiersVisiteur' value='pompiers'>
						<label for='mesuresImediatesPompiersVisiteur'>Appel des pompiers</label><br>
						<input type='checkbox' name='mesuresImediatesSamuVisiteur' value='SAMU'>
						<label for='mesuresImediatesSamuVisiteur'>Appel du SAMU</label><br>
						<input type='checkbox' name='mesuresImediatesAutresVisiteur' value='autres'>
						<label for='mesuresImediatesAutresVisiteur'>Autre</label><br>


						<label for='titre'>La (les) mesure(s) ultérieure(s) :</label><br>
						<input type='checkbox' name='mesuresUlterieursExamMedicalVisiteur' value='exam'>
						<label for='mesuresUlterieursExamMedicalVisiteur'>Examen(s) médical(aux)</label><br>
						<input type='checkbox' name='mesuresUlterieursHospitalisationVisiteur' value='hospit'>
						<label for='mesuresUlterieursHospitalisationVisiteur'>Hospitalisation(s)</label><br>
						<input type='checkbox' name='mesuresUlterieursMainCouranteVisiteur' value='maincourante'>
						<label for='mesuresUlterieursMainCouranteVisiteur'>Déposition(s) sur main courante</label><br>
						<input type='checkbox' name='mesuresUlterieursDepoPlainteVisiteur' value='plainte'>
						<label for='mesuresUlterieursDepoPlainteVisiteur'>Dépôt(s) de plainte(s)</label><br>
					</p>
					<p>
						<label for='discription'> Description des évènements qui ont eu lieu : </label><br>
						<textarea id='discriptionVisiteur' name='discriptionVisiteur' rows='5' cols='50'></textarea>
					</p>
				</div>
			</fieldset>

		</fieldset>


		<br />


		<fieldset id='ddcs' class='<?=$"."voirDDCS?> <?=$"."voirPolice?>'>
			<h3>
				Partie DDCS
			</h3>

			<p>
				<label for='ContactReceveur'>Les personnes responsable du club receveur ont été contactée ? :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='ContactReceveur' id='ContactOui1' onchange='showContact1()' <?=$"."requiredDDCS?> 
	
			</p>
			<div id='contact1' class='d-none'>
				<p>
					<label for='ExplicationsReceveur'>Justification du contact :</label><br>
					<textarea id='ExplicationsReceveur' name='ExplicationsReceveur' rows='5' cols='50'></textarea>
				</p>
			</div>
			<p>
				<label for='ContactVisiteur'>Les personnes responsable du club visiteur ont été contactée ? :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='ContactVisiteur' id='ContactOui2' onchange='showContact2()' <?=$"."requiredDDCS?> 
		
			</p>
			<div id='contact2' class='d-none'>
				<p>
					<label for='ExplicationsVisiteur'>Justification du contact :</label><br>
					<textarea id='ExplicationsVisiteur' name='ExplicationsVisiteur' rows='5' cols='50'></textarea>
				</p>
			</div>
		</fieldset>

		</br>


		<fieldset id='police' class='<?=$"."voirPolice?>'>
			<h3>
				Partie Force de l'ordre
			</h3>
			<p>
				<label for='nbrForceOrdre'>Combien de membres des force de l'ordre seront présents ?</label><br>
				<input type='nomber' name='nbrForceOrdre'><br>
				<label for='Procedure'>Moyens mis en oeuvre en cas d'incident :</label><br>
				<textarea id='Procedure' name='Procedure' rows='5' cols='50'></textarea>
			</p>
			<fieldset>
			<legend>
				<label for='IncidentFO'>Y a-t-il eu un incident ? :</label>
				<label name='oui'>Oui</label>
				<input type='checkbox' name='IncidentFO' id='IncidentOui3'/>
			</legend>
			<div class='incident3' class='d-none'>
				<label for='nbrForceOrdreIncident'>Combien de membres des force de l'ordre étaient présents ?</label><br>
				<input type='nomber' name='nbrForceOrdreIncident'><br>
				<label for='descFO'>Description des évènements qui on eu lieu :</label><br>
				<textarea id='descFO' name='descFO' rows='5' cols='50'></textarea>
			</div>
		</fieldset>
		</fieldset>";
        return $tableau;
    }

}
?>