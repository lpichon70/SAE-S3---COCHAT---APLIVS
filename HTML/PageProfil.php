<?php
    require_once("PHP/VoirMonClub/Club.php");  
    require_once("PHP/VoirMonClub/BDDManager.php");
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
    //$club = $manager->get();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link rel="stylesheet" href=".css" type="text/css">
	<title>Page de profil</title>
</head>

<body>

    <form>

    <div id="banniere">

        <input id="logo" name="logo" type="file">

        <div>

            <div id="infoPartie1">

                <p>Infomations du club: </p>
                <p>
                    Nom du club: 
                    <input id="nomClub" name="nomClub" type="text" value="">
                </p>
                <p>
                    Téléphone: 
                    <input id="telephone" name="telephone" type="tel">
                </p>
                <p>
                    Email:
                    <input id="mail" name="mail" type="email">
                </p>
                <p>
                    Siège social:
                    <input id="siege" name="siege" type="text">
                </p>
                <p>
                    Fédération: 
                    <input id="federation" name="federation" type="tel">
                </p>
            </div>
            <div id="infoPartie2">
                <p>
                    Président: 
                    <input id="PrenomPres" name="PrenomPres" type="text" placeholder="Prénom">
                    <input id="NomPres" name="NomPres" type="text" placeholder="Nom">
                </p>
                <p>
                    Téléphone du président: 
                    <input id="telPres" name="telPres" type="tel">
                </p>
                <p>
                    Email du président:
                    <input id="mailPres" name="mailPres" type="email">
                </p>
                <p>
                    Date création:
                    <input id="dateCreation" name="dateCreation" type="date">
                </p>
                <p>
                    Mail secrétariat:
                    <input id="mailSecret" name="mailSecret" type="mail">
                </p>
                <p>
                    Téléphone secrétariat:
                    <input id="telSecret" name="telSecret" type="tel">
                </p>


            </div>



        </div>

        <div id="Description">
            <p>Descrpition du club: </p>
            <p><textarea id="description" name="description"></textarea></p>
        </div>

        <div id="ListeMembre">
            <p>Liste es membres: </p>
            <p><textarea id="listeMembre" name="listeMembre"></textarea></p>
        </div>

    </div>

</form>

</body>

