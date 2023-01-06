<?php
    require_once("../models/Signalement.php");
    require_once("../models/SignalementManager.php");
    $manager = new SignalementManager();
    $signalement = new Signalement();
    if(!empty($_POST))
    {
        //$signalement->setidSignalement($_GET["Id_Rencontre"]);
        //$signalement->setNatureIncident($_POST[""]);
        //$signalement->setAntecedent($_POST[""]);
        $signalement->setIdSignalement($_GET["Id_Rencontre"]);
        $signalement->setNatureIncident("test");
        $signalement->setAntecedent("oui c'est modifié");
        $manager->insertSignalement($signalement);
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