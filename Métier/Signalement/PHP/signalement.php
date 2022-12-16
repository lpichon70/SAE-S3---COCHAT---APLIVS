<?php
    require_once("./Receveur.php");
    require_once("./Visiteur.php");
    require_once("./BDDManager.php");
    //Après avoir signaler un incident, nous arrivons sur cette page.

    $ClubReceveur;
    $ClubVisiteur;
    $Police;
    $DDCS;


    //On récupère les données du formulaire via la méthode POST
    if ($_POST)
    {
        //Creation d'un nouvel objet Receveur
        $ClubReceveur = new Receveur(
                    $_POST['nomClub'],
                    $_POST['numMatch'],
                    $_POST['categorie'],
                    $_POST['date'],
                    $_POST['lieu'],
                    $_POST['horaires'],
                    $_POST['nomDelegue'],
                    $_POST['telDelegue'],
                    $_POST['nbArbitre'],
                    $_POST['adresseTerrain'],
                    $_POST['dateRencontre'],
                    $_POST['heureRencontre'],
                    $_POST['contactDisctrict'],
                    $_POST['contactPolice'],
                    $_POST['violencePersonnesJoueurs'],
                    $_POST['violencePersonnesArbitres'],
                    $_POST['violencePersonnesDelegue'],
                    $_POST['violencePersonnesDirigeants'],
                    $_POST['violencePersonnesSpectateurs'],
                    $_POST['atteinteBiensJoueurs'],
                    $_POST['atteinteBiensArbitres'],
                    $_POST['atteinteBiensDirigeants'],
                    $_POST['atteinteBiensSpectateurs'],
                    $_POST['agressionVerbaleJoueurs'],
                    $_POST['agressionVerbaleArbitres'],
                    $_POST['agressionVerbaleDirigeants'],
                    $_POST['agressionVerbaleSpectateurs'],
                    $_POST['envahissementTerrainViolence'],
                    $_POST['victimeConcerneJoueurs'],
                    $_POST['victimeConcerneArbitres'],
                    $_POST['victimeConcerneDelegue'],
                    $_POST['victimeConcerneDirigeants'],
                    $_POST['victimeConcerneSpectateurs'],
                    $_POST['victimeConcerneEducateur'],
                    $_POST['victimeConcerneAutre'],
                    $_POST['auteurPresumeNbMajeurs'],
                    $_POST['auteurPresumeMajeurConnu'],
                    $_POST['auteurPresumeMajeurMembreClub'],
                    $_POST['auteurPresumeMajeurJoueur'],
                    $_POST['auteurPresumeMajeurEducateur'],
                    $_POST['auteurPresumeMajeurDirigeant'],
                    $_POST['auteurPresumeMajeurAutre'],    
                    $_POST['auteurPresumeNbMineurs'],                    
                    $_POST['auteurPresumeMineurConnu'],                    
                    $_POST['auteurPresumeMineurMembreClub'],
                    $_POST['auteurPresumeMineurJoueur'],
                    $_POST['auteurPresumeMineurEducateur'],
                    $_POST['auteurPresumeMineurDirigeant'],
                    $_POST['auteurPresumeMineurAutre'],
                    $_POST['mesuresImediatesPolice'],
                    $_POST['mesuresImediatesGendarmerie'],
                    $_POST['mesuresImediatesPoliceMunicipale'],
                    $_POST['mesuresImediatesMairie'],
                    $_POST['mesuresImediatesPompiers'],
                    $_POST['mesuresImediatesSamu'],
                    $_POST['mesuresImediatesAutres'],
                    $_POST['mesuresUlterieursExamMedical'],
                    $_POST['mesuresUlterieursHospitalisation'],
                    $_POST['mesuresUlterieursMainCourante'],
                    $_POST['mesuresUlterieursDepoPlainte'],
        );

        $ClubVisiteur = new Visiteur(
            $_POST['nomClubVisiteur'],
            $_POST['numMatchVisiteur'],
            $_POST['categorieVisiteur'],
            $_POST['dateVisiteur'],
            $_POST['lieuVisiteur'],
            $_POST['horairesVisiteur'],
            $_POST['nomDelegueVisiteur'],
            $_POST['telDelegueVisiteur'],
            $_POST['nbArbitreVisiteur'],
            $_POST['adresseTerrainVisiteur'],
            $_POST['dateRencontreVisiteur'],
            $_POST['heureRencontreVisiteur'],
            $_POST['contactDisctrictVisiteur'],
            $_POST['contactPoliceVisiteur'],
            $_POST['violencePersonnesJoueursVisiteur'],
            $_POST['violencePersonnesArbitresVisiteur'],
            $_POST['violencePersonnesDelegueVisiteur'],
            $_POST['violencePersonnesDirigeantsVisiteur'],
            $_POST['violencePersonnesSpectateursVisiteur'],
            $_POST['atteinteBiensJoueursVisiteur'],
            $_POST['atteinteBiensArbitresVisiteur'],
            $_POST['atteinteBiensDirigeantsVisiteur'],
            $_POST['atteinteBiensSpectateursVisiteur'],
            $_POST['agressionVerbaleJoueursVisiteur'],
            $_POST['agressionVerbaleArbitresVisiteur'],
            $_POST['agressionVerbaleDirigeantsVisiteur'],
            $_POST['agressionVerbaleSpectateursVisiteur'],
            $_POST['envahissementTerrainViolenceVisiteur'],
            $_POST['victimeConcerneJoueursVisiteur'],
            $_POST['victimeConcerneArbitresVisiteur'],
            $_POST['victimeConcerneDelegueVisiteur'],
            $_POST['victimeConcerneDirigeantsVisiteur'],
            $_POST['victimeConcerneSpectateursVisiteur'],
            $_POST['victimeConcerneEducateurVisiteur'],
            $_POST['victimeConcerneAutreVisiteur'],
            $_POST['auteurPresumeNbMajeursVisiteur'],
            $_POST['auteurPresumeMajeurConnuVisiteur'],
            $_POST['auteurPresumeMajeurMembreClubVisiteur'],
            $_POST['auteurPresumeMajeurJoueurVisiteur'],
            $_POST['auteurPresumeMajeurEducateurVisiteur'],
            $_POST['auteurPresumeMajeurDirigeantVisiteur'],
            $_POST['auteurPresumeMajeurAutreVisiteur'],    
            $_POST['auteurPresumeNbMineursVisiteur'],                    
            $_POST['auteurPresumeMineurConnuVisiteur'],                    
            $_POST['auteurPresumeMineurMembreClubVisiteur'],
            $_POST['auteurPresumeMineurJoueurVisiteur'],
            $_POST['auteurPresumeMineurEducateurVisiteur'],
            $_POST['auteurPresumeMineurDirigeantVisiteur'],
            $_POST['auteurPresumeMineurAutreVisiteur'],
            $_POST['mesuresImediatesPoliceVisiteur'],
            $_POST['mesuresImediatesGendarmerieVisiteur'],
            $_POST['mesuresImediatesPoliceMunicipaleVisiteur'],
            $_POST['mesuresImediatesMairieVisiteur'],
            $_POST['mesuresImediatesPompiersVisiteur'],
            $_POST['mesuresImediatesSamuVisiteur'],
            $_POST['mesuresImediatesAutresVisiteur'],
            $_POST['mesuresUlterieursExamMedicalVisiteur'],
            $_POST['mesuresUlterieursHospitalisationVisiteur'],
            $_POST['mesuresUlterieursMainCouranteVisiteur'],
            $_POST['mesuresUlterieursDepoPlainteVisiteur'],
        );
    }
    else 
    {
        //header("Location:../../../index.php");
    }

    //Connection à la base de données 
          
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

    $manager = new BDDManager($bdd);

    $manager->addFicheIncident($ClubVisiteur,$ClubReceveur);




?>