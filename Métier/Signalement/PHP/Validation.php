<?php
    require_once("../models/Signalement.php");
    require_once("../models/SignalementManager.php");
    $manager = new SignalementManager();    
    if(!empty($_POST))
    {
        $donnees = array(
            'idSignalement' =>  $_GET["Id_Rencontre"],
            'nomClubReceveur' => $_POST["nomClubRecevoir"],
            'date' => $_POST["date"],
            'adresse' => $_POST["adresse"],
            'ville' => $_POST["ville"],
            'delegues' => $_POST["delegues"],
            'nomDelegue' => $_POST["nomDelegue"],
            'telDelegue' => $_POST["telDelegue"],
            'arbitres' => $_POST["arbitres"],
            'nbArbitre' => $_POST["nbArbitre"],
            'terrain' => $_POST["terrain"],
            'adresseTerrain' => $_POST["adresseTerrain"],
            'dateRencontre' => $_POST["dateRencontre"],
            'contactDistrict' => $_POST["contactDistrict"],
            'contactPolice' => $_POST["contactPolice"],
            'incidentRec' => $_POST["incidentRec"],
            'agressionVerbaleJoueurs' => $_POST["agressionVerbaleJoueurs"],
            'agressionVerbaleArbitres' => $_POST["agressionVerbaleArbitres"],
            'agressionVerbaleDirigeant' => $_POST["agressionVerbaleDirigeant"],
            'agressionVerbaleSpectateurs' => $_POST["agressionVerbaleSpectateurs"],
            'victimeConcerneJoueurs' => $_POST["victimeConcerneJoueurs"],
            'victimeConcerneArbitres' => $_POST["victimeConcerneArbitres"],
            'victimeConcerneDelegues' => $_POST["victimeConcerneDelegues"],
            'victimeConcerneSpectateurs' => $_POST["victimeConcerneSpectateurs"],
            'victimeConcerneAutre' => $_POST["victimeConcerneAutre"],
            'auteurPresumeMineurMembreClub' => $_POST["auteurPresumeMineurMembreClub"],
            'auteurPresumeMineurJoueur' => $_POST["auteurPresumeMineurJoueur"],
            'auteurPresumeMineurDirigeant' => $_POST["auteurPresumeMineurDirigeant"],
            'auteurPresumeMineurAutre' => $_POST["auteurPresumeMineurAutre"],
            'mesuresImediatesPolice' => $_POST["mesuresImediatesPolice"],
            'mesuresImediatesMairie' => $_POST["mesuresImediatesMairie"],
            'mesuresImediatesPompier' => $_POST["mesuresImediatesPompier"],
            'mesuresImediatesSamu' => $_POST["mesuresImediatesSamu"],
            'mesuresImediatesAutre' => $_POST["mesuresImediatesAutre"],
            'mesuresUlterieursExamMedical' => $_POST["mesuresUlterieursExamMedical"],
            'mesuresUlterieursHospitalisation' => $_POST["mesuresUlterieursHospitalisation"],
            'mesuresUlterieursMainCourante' => $_POST["mesuresUlterieursMainCourante"],
            'mesuresUlterieursDepoPlainte' => $_POST["mesuresUlterieursDepoPlainte"],
            'nomClubVisiteur' => $_POST["nomClubVisiteur"],
            'incidentRecVisiteur' => $_POST["incidentRecVisiteur"],
            'agressionVerbaleJoueurVisiteur' => $_POST["agressionVerbaleJoueurVisiteur"],
            'agressionVerbaleArbitresVisiteur' => $_POST["agressionVerbaleArbitresVisiteur"],
            'agressionVerbaleDirigeantVisiteur' => $_POST["agressionVerbaleDirigeantVisiteur"],
            'agressionVerbaleSpectateursVisiteur' => $_POST["agressionVerbaleSpectateursVisiteur"],
            'victimeConcerneJoueursVisiteur' => $_POST["victimeConcerneJoueursVisiteur"],
            'victimeConcerneArbitresVisiteur' => $_POST["victimeConcerneArbitresVisiteur"],
            'victimeConcerneDeleguesVisiteur' => $_POST["victimeConcerneDeleguesVisiteur"],
            'victimeConcerneSpectateursVisiteur' => $_POST["victimeConcerneSpectateursVisiteur"],
            'victimeConcerneAutreVisiteur' => $_POST["victimeConcerneAutreVisiteur"],
            'auteurPresumeMajeurMembreClubVisiteur' => $_POST["auteurPresumeMajeurMembreClubVisiteur"],
            'auteurPresumeMajeurJoueurVisiteur' => $_POST["auteurPresumeMajeurJoueurVisiteur"],
            'auteurPresumeMajeurDirigeantVisiteur' => $_POST["auteurPresumeMajeurDirigeantVisiteur"],
            'auteurPresumeMajeurAutreVisiteur' => $_POST["auteurPresumeMajeurAutreVisiteur"],
            'mesuresImediatesPoliceVisiteur' => $_POST["mesuresImediatesPoliceVisiteur"],
            'mesuresImediatesMairieVisiteur' => $_POST["mesuresImediatesMairieVisiteur"],
            'mesuresImediatesPompierVisiteur' => $_POST["mesuresImediatesPompierVisiteur"],
            'mesuresImediatesSamuVisiteur' => $_POST["mesuresImediatesSamuVisiteur"],
            'mesuresImediatesAutreVisiteur' => $_POST["mesuresImediatesAutreVisiteur"],
            'mesuresUlterieursExamMedicalVisiteur' => $_POST["mesuresUlterieursExamMedicalVisiteur"],
            'mesuresUlterieursHospitalisationVisiteur' => $_POST["mesuresUlterieursHospitalisationVisiteur"],
            'mesuresUlterieursMainCouranteVisiteur' => $_POST["mesuresUlterieursMainCouranteVisiteur"],
            'mesuresUlterieursDepoPlainteVisiteur' => $_POST["mesuresUlterieursDepoPlainteVisiteur"],
            'contactReceveur' => $_POST["contactReceveur"],
            'contactVisiteur' => $_POST["contactVisiteur"],
            'nbForceOrdre' => $_POST["nbForceOrdre"],
            'incidentFO' => $_POST["incidentFO"]
        );

        $signalement = new Signalement($donnees);
        $manager->insertSignalement($signalement);
        var_dump($_POST);
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    LE FORMULAIRE A BIEN ETE VALIDE

</body>
</html>