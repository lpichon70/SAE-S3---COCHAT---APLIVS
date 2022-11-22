<?php
    require_once("Club.php");  
    require_once("BDDManger.php");
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_progweb', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
?>