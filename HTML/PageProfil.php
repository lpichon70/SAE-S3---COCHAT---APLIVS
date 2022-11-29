<?php
    require_once("PHP/VoirMonClub/Club.php");  
    require_once("PHP/VoirMonClub/BDDManager.php");
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
    $id = 15;
    $club = $manager->get($id);

    if(!empty($_POST))
    {
        $sigle = "";
        if(empty($_POST['sigleClub']))
        {
            $sigle = $club->getSigle();
        }
        else
        {
            $sigle = "Images/Sigle/".$_FILES["sigleClub"]['name'];
            move_uploaded_file($_FILES['sigleClub']['tmp_name'], $sigle);
        }
        
        $data = 
        [
            $_POST['nomClub'],
            $sigle,
            $_POST['villeClub'],
            $_POST['adresseClub'],
            $_POST['complementAdresseClub'],
            $_POST['codePostalClub'],
            $_POST['numAgrement'],
            $_POST['fedAffiliation'],
            $_POST['statutAsso'],
            $_POST['numSiret'],
            $_POST['mailClub'],
            $_POST['siteClub'],
            $_POST['reseauSocialClub'],
            $_POST['telFixeClub'],
            $_POST['telPortableClub'],
            $_POST['civilitePresident'],
            $_POST['nomPresident'],
            $_POST['prenomPresident'],
            $_POST['emailPresident'],
            $_POST['telPresident'],
            $_POST['emailSecretariat'],
            $_POST['telSecretariat']
        ];
        $manager->set($data, $id);
    }

    $club = $manager->get($id);
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
        <?php echo '<p>'.$club->getNomClub().'<p>'; ?>
    </div>

    <div>


        <p>Infomations du club : </p>

        <?php echo '<p> Ville : '.$club->getVille().'<p>'; ?>
        <?php echo '<p> Rue : '.$club->getRue().'<p>'; ?>
        <?php echo '<p> Complement de rue : '.$club->getComplementRue().'<p>'; ?>
        <?php echo '<p> Code postal : '.$club->getCodePostal().'<p>'; ?>
        <?php echo '<p> Numéro d\'agrément : '.$club->getNumAgrement().'<p>'; ?>
        <?php echo '<p> Fédération : '.$club->getFederation().'<p>'; ?>
        <?php echo '<p> Statut : '.$club->getStatut().'<p>'; ?>
        <?php echo '<p> Siret : '.$club->getSiret().'<p>'; ?>
        <?php echo '<p> Mail du club : '.$club->getMailClub().'<p>'; ?>
        <?php echo '<p> Site : '.$club->getSiteClub().'<p>'; ?>
        <?php echo '<p> Réseau social : '.$club->getReseau().'<p>'; ?>
        <?php echo '<p> Tel fixe du club : '.$club->getTelFixeClub().'<p>'; ?>
        <?php echo '<p> Tel portable du club : '.$club->getTelPortableClub().'<p>'; ?>
        <?php echo '<p> Président : '.$club->getCivilitePres()." ".$club->getNomPres()." ".$club->getPrenomPres().'<p>'; ?>
        <?php echo '<p> Tel du président : '.$club->getTelPres().'<p>'; ?>
        <?php echo '<p> Mail du président : '.$club->getMailPres().'<p>'; ?>
        <?php echo '<p> Tel du secrétariat : '.$club->getTelSecret().'<p>'; ?>
        <?php echo '<p> Mail du secrétariat : '.$club->getMailSecret().'<p>'; ?>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="Js/Animation.js"></script>


</body>

</html>