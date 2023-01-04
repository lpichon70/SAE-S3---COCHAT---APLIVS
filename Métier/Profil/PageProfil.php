<?php
    session_start();
    require_once("./PHP/Club.php");  
    require_once("./PHP/BDDManager.php");
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
    $id = null;

    if(!empty($_SESSION['statut']))
    {
        if($_SESSION['statut'] == 'CLUB')
        {
            $id = $_SESSION['idClub'];
            //on récupère le club
            $club = $manager->get($id);
        }
    }     

    //vérifie si on provient de ModifierProfil.php
    if(!empty($_POST))
    {        
        $data = 
        [
            $_POST['nomClub'],
            $_POST['sigleClub'],
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
        //si on vient de la modification, lors on change les données
        $manager->set($data, $id);
    }

    if(!empty($_SESSION['statut']))
    {
        if($_SESSION['statut'] == 'CLUB')
        {
            //on récupère les données au cas ou elles ont été modifiées
            $club = $manager->get($id);
        }
    } 
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
        <img id="logoDDCS" src="../Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
    </div>

    <div>
        <label class="lien">
            <a href="../index.php">Accueil</a>
        </label>
    </div>

    

    <br><br><br><br><br><br>
    <div class="info">
        <div id="en-tete">
            <br><br><br><br><br><br><br>
            <?php 
            if(!empty($_SESSION['statut']))
            {
                if($_SESSION['statut'] == 'CLUB') echo '<span id="nomClub">'.$club->getNomClub().'</span>'; 
                else if($_SESSION['statut'] == 'ADMIN') echo '<span id="nomClub">Admin</span>';  
                else if($_SESSION['statut'] == 'POLICE') echo '<span id="nomClub">Police</span>';  
                else echo '<span id="nomClub">DDCS</span>';  
            }            
            else
            {
                echo 'Vous n\'êtes pas connecté.';
            }
            ?>
        </div>
        <a id="modifierProfil" href="./PHP/ModifierProfil.php">Modifier le profil</a>

        <div class="resume">

            <?php 
                if(!empty($_SESSION['statut']))
                {
                    if($_SESSION['statut'] == 'CLUB') 
                    {
                        echo '<p> Sigle : '.$club->getSigle().'<p>'; 
                        echo '<p> Localisation : '.$club->getVille().', '.$club->getRue().'<p>'; 
                        echo '<p> Complement de rue : '.$club->getComplementRue().'<p>'; 
                        echo '<p> Code postal : '.$club->getCodePostal().'<p>'; 
                        echo '<br>';
                        echo '<p> Numéro d\'agrément : '.$club->getNumAgrement().'<p>'; 
                        echo '<p> Fédération : '.$club->getFederation().'<p>'; 
                        echo '<p> Statut : '.$club->getStatut().'<p>'; 
                        echo '<p> Siret : '.$club->getSiret().'<p>'; 
                        echo '<br>';
                        echo '<p> Mail du club : '.$club->getMailClub().'<p>'; 
                        echo '<p> Site : '.$club->getSiteClub().'<p>'; 
                        echo '<p> Réseau social : '.$club->getReseau().'<p>'; 
                        echo '<p> Tel fixe du club : '.$club->getTelFixeClub().'<p>'; 
                        echo '<p> Tel portable du club : '.$club->getTelPortableClub().'<p>'; 
                        echo '<br>';
                        echo '<p> Président : '.$club->getCivilitePres()." ".$club->getNomPres()." ".$club->getPrenomPres().'<p>'; 
                        echo '<p> Tel du président : '.$club->getTelPres().'<p>'; 
                        echo '<p> Mail du président : '.$club->getMailPres().'<p>'; 
                        echo '<br>';
                        echo '<p> Tel du secrétariat : '.$club->getTelSecret().'<p>'; 
                        echo '<p> Mail du secrétariat : '.$club->getMailSecret().'<p>';
                    }                
                }              
            ?>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="../index/Js/Animation.js"></script>

</body>

</html>