<?php
    session_start();
    //Permet d'affichier la page de redirection de l'utiliateur en fonction de son grade.
    $statut = $_SESSION['statut'];
?>



<html>
    <h1>Vous avez réussi à vous connecter en tant que <?=$statut?></h1>

    <a href="../../../index.php" >Retourner au menu</a>
</html>