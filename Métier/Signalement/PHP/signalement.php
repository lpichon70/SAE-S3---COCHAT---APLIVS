<?php
    require_once("./Receveur.php");
    //Après avoir signaler un incident, nous arrivons sur cette page.

    $ClubReceveur;
    $ClubVisiteur;
    $Police;
    $DDCS;

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
    }
    else 
    {
        //header("Location:../../../index.php");
    }

?>