<?php
    session_start();

    //Reidirige l'utilisateur sur la page de connexion s'il n'a pas de status ou sur une autre page grâce à la méthode au dessus
    if ($_SESSION['statut'] != '')
    {
        header("Location:../../../index.php");
    }
    else 
    {
        header("Location:../Connexion.php");
    }
?>