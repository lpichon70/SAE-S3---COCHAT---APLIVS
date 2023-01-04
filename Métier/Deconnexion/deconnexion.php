<?php
    session_start();


    if ($_SESSION['statut'] != "" && $_SESSION['statut'] != null)
    {
        session_destroy();
        header("Location:../../index.php");
        
    }
    else {
        header("Location:../../index.php");
    }

?>