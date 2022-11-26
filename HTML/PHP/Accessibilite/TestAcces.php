<?php
    session_start();
    $statut = $_SESSION['statut'];
?>



<html>
    <h1>Vous avez réussi à vous connecter en tant que <?=$statut?></h1>

    <a href="../../../index.html" >Retourner au menu</a>
</html>