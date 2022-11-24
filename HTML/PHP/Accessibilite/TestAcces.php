<?php
    session_start();
    $statut = $_SESSION['statut'];
?>



<html>
    <h1>Vous avez réussi à vous connecter en tant que <?=$statut?></h1>
</html>