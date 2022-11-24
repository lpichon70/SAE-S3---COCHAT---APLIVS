<?php
    session_start();

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


    if ($_SESSION['statut'] != '')
    {
        redirige($_SESSION['statut']);
    }
    else 
    {
        header("Location:../../Connexion.php");
    }
?>