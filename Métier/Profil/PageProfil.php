<?php
    session_start();
    require_once("./PHP/Club.php");  
    require_once("./PHP/BDDManager.php");
    require_once("../../index/PHP/pathLogoUtilisateur.php");


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

    //Permet d'afficher les bouttons lié au statut et le logo du profil
    //Donne accès à la page si l'on est connecter ou pas
    if (@$_SESSION['statut'] == null || @$_SESSION['statut'] == "")
    {
        header("Location:../../index.php");
    }
    else if (@$_SESSION['statut'] != "" && $_SESSION['statut'] != null)
    {
        $pathLogoConexion = "Images/profilConnect.png";
    }

    
    //Permet de gérer le contenu du menu dépliable de l'utilisateur
    $contentLogoManager = new pathLogoUtilisateur($_SESSION['statut']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/PageProfil.css" type="text/css">
    <title>Page de profil</title>
    <link rel="stylesheet" href="../../index/CSS/logoProfil.css">
</head>

<body>

    <div class="menu-profil">    
    <img src="../../<?=$pathLogoConexion?>" class="logoProfil" onclick="toggleMenu()"/>

    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <h3>Menu</h3>
        </div>
        <hr>

        <a href="../../<?=$contentLogoManager->getPathMyProfil()?>" class="sub-menu-link <?=$contentLogoManager->getLinkMyProfilVisible()?>">
          <p>Mon profil</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathSearch()?>" class="sub-menu-link <?=$contentLogoManager->getLinkSearchVisible()?>">
          <p>Recherche</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathGestionUser()?>" class="sub-menu-link <?=$contentLogoManager->getLinkGestionUserVisible()?>">
          <p>Gérer les utilisateurs</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathInscription()?>" class="sub-menu-link <?=$contentLogoManager->getLinkInscriptionVisible()?>">
          <p>Inscription</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathConexion()?>" class="sub-menu-link <?=$contentLogoManager->getLinkConexionVisible()?>">
          <p>Connexion</p>
          <span></span>
        </a>

        <a href="../../<?=$contentLogoManager->getPathDeconexion()?>" class="sub-menu-link <?=$contentLogoManager->getLinkDeconexionVisible()?>">
          <p>Se déconnecter</p>
          <span></span>
        </a>

      </div>
    </div>
    </div>

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
            <a href="../../index.php">Accueil</a>
        </label>
    </div>

    

    <br><br><br><br><br><br>
    <div class="info">
        <div id="en-tete">
            <br><br><br><br><br><br><br>
            <?php 
            if(!empty($_SESSION['statut']))
            {
                if($_SESSION['statut'] == 'CLUB') echo '<div id="nomClub">'.$club->getNomClub().'</div>'; 
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="../index/Js/Animation.js"></script>
    <script src="../../index/JS/MenuUtilisateur.js"></script>

</body>

</html>