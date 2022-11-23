<?php
    session_start();
    if ($_SESSION["authentifie"] == true)
    {
        header("Location:protege.php");
    }  
    else 
    {
        header("Location:formulaire_verif.php");
    }
?>