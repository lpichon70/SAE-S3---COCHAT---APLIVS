<?php
    require_once("PHP/VoirMonClub/Club.php");  
    require_once("PHP/VoirMonClub/BDDManager.php");
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
    $club = $manager->get(10);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="CSS/PageProfil.css" type="text/css">
    <title>Page de profil</title>
</head>

<body>

    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    <div class="container-first">
        <h1><span>Page</span> <span>de</span> <span>profil</span> <span>du</span> <span>club</span></h1>
    </div>

    <div id="LesImages">
        <img id="logoDDCS" src="Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
    </div>

    <div>
        <label class="lien">
            <a href="../index.html">Accueil</a>
        </label>

        <label class="lien">
            <a href="">à remplir</a>
        </label>


        <label class="lien">
            <a href="">à remplir</a>
        </label>
    </div>

    <div class="l3"></div>

    <br>

    <div>
        <?php echo '<img class="imageProfil" src="'.$club->getSigle().'" alt=sigle>' ; ?>
        <p>
            Nom du club :
            <?php echo $club->getNomClub(); ?>
        </p>
    </div>

    <div id="infoPartie1">


        <p>Infomations du club : </p>

        <p>
            Ville :
            <?php echo $club->getVille(); ?>
        </p>
        <p>
            Rue :
            <?php echo $club->getRue(); ?>
        </p>
        <p>
            Complement de rue :
            <?php echo $club->getComplementRue(); ?>
        </p>
        <p>
            Code postal :
            <?php echo $club->getCodePostal(); ?>
        </p>
        <p>
            Numéro d'agrément :
            <?php echo $club->getNumAgrement(); ?>
        </p>
        <p>
            Fédération :
            <?php echo $club->getFederation(); ?>
        </p>
        <p>
            Statut :
            <?php echo $club->getStatut(); ?>
        </p>
        <p>
            Siret :
            <?php echo $club->getSiret(); ?>
        </p>
        <p>
            Email :
            <?php echo $club->getMailClub(); ?>
        </p>
        <p>
            Site internet :
            <?php echo $club->getSiteClub(); ?>
        </p>
        <p>
            Réseau social :
            <?php echo $club->getReseau(); ?>
        </p>
        <p>
            Téléphone fixe :
            <?php echo $club->getTelFixeClub(); ?>
        </p>
        <p>
            Téléphone portable :
            <?php echo $club->getTelPortableClub(); ?>
        </p>
    </div>
    <div id="infoPartie2">
        <p>
            Président :
            <?php echo $club->getCivilitePres()." ".$club->getNomPres()." ".$club->getPrenomPres(); ?>
        </p>
        <p>
            Téléphone du président :
            <?php echo $club->getTelPres(); ?>
        </p>
        <p>
            Email du président :
            <?php echo $club->getMailPres(); ?>
        </p>
        <p>
            Téléphone secrétariat :
            <?php echo $club->getTelSecret(); ?>
        </p>
        <p>
            Mail secrétariat :
            <?php echo $club->getMailSecret(); ?>
        </p>



    </div>

    <div id="Description">
        <p>Descrpition du club : </p>
        <p><textarea id="description" name="description"></textarea></p>
    </div>

    <div id="ListeMembre">
        <p>Liste des membres : </p>
        <p><textarea id="listeMembre" name="listeMembre"></textarea></p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="Js/Animation.js"></script>


</body>

</html>