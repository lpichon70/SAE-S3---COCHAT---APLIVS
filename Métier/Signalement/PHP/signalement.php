<?php
    require_once("./Receveur.php");
    //Après avoir signaler un incident, nous arrivons sur cette page.

    $tabClubReceveur;
    $tabClubVisiteur;
    $tabPolice;
    $tabDDCS;

    if ($_POST)
    {
        $tabClubReceveur = new Receveur();
    }
    else 
    {
        //header("Location:../../../index.php");
    }

?>