<?php
    session_start();

    //Permet de rediriger l'utilisateur lors de sa conexion en fonction de son status
    function redirige($session)
    {
        switch($session)
        {
            case 'POLICE':
                header("Location:TestAcces.php");
            break;
            case 'DDCS':
                header("Location:TestAcces.php");
            break;
            case 'ADMIN':
                header("Location:TestAcces.php");
            break;
            case 'CLUB':
                header("Location:TestAcces.php");
            break;
        }
    }

    //Reidirige l'utilisateur sur la page de connexion s'il n'a pas de status ou sur une autre page grâce à la méthode au dessus
    if ($_SESSION['statut'] != '')
    {
        redirige($_SESSION['statut']);
    }
    else 
    {
        header("Location:../../Connexion.php");
    }
?>