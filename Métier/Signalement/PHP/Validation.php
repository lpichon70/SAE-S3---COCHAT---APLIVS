<?php
    require_once("../models/Signalement.php");
    require_once("../models/SignalementManager.php");
    $manager = new SignalementManager();    
    if(!empty($_POST))
    {
        $donnees = array(
            'idSignalement' =>  $_GET["Id_Rencontre"]
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