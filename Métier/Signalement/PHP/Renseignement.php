<?php
    require_once("Rencontre.php");
    require_once("Risque.php");
    require_once("Clubs.php");
    require_once("Declarant.php");
    require_once("BDDManager.php");
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
    $rencontre = new Rencontre($_POST["district"], $_POST["numMatch"], $_POST["rencontre"], $_POST["et"], $_POST["categorie"], $_POST["date"], $_POST["lieu"], $_POST["horaire"]);
    $risque = new Risque($_POST["enjeu"], $_POST["spectateur"], $_POST["contentieuxC"], $_POST["contentieuxS"], $_POST["descIncident"]);
    $clubs = new Clubs($_POST["nomCRec"], $_POST["persAContacterRec"], $_POST["telRec"], $_POST["nomCVisiteur"], $_POST["persAContacterVis"], $_POST["telVis"], $_POST["contacts"]);
    $declarant = new Declarant($_POST["nomR"], $_POST["prenomR"], $_POST["fonctionR"], $_POST["telR"], $_POST["nomV"], $_POST["prenomV"], $_POST["fonctionV"], $_POST["telV"], $_POST["faitA"], $_POST["le"]);
    $manager->addRencontre($rencontre);
?>  