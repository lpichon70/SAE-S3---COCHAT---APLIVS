<?php
    session_start();
    require_once("../../index/PHP/pathLogoUtilisateur.php");

    //Permet d'afficher les bouttons lié au statut et le logo du profil
    //Donne accès à la page si l'on est connecter ou pas
    
    if (@$_SESSION['statut'] == null || @$_SESSION['statut'] == "")
    {
        @$_SESSION['statut'] = "";
        $pathLogoConexion = "Images/profilDeconnect.png";
    }
    else if (@$_SESSION['statut'] != "" && $_SESSION['statut'] != null)
    {
        header("Location:../../index.php");
    }
    

    
    //Permet de gérer le contenu du menu dépliable de l'utilisateur
    $contentLogoManager = new pathLogoUtilisateur($_SESSION['statut']);
?>


<!DOCTYPE html>
<html lang="fr">



<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="CSS/FormulaireInscription.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../index/CSS/logoProfil.css">
    <title>Fiche d'inscription à la DDCS</title>
</head>



<body>

    <div class="menu-profil">    
    <img src="../../<?=$pathLogoConexion?>" class="logoProfil" onclick="toggleMenu()"/>

    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <h3>Menu <?=$_SESSION['statut']?></h3>
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
        <h1 class="ombreText gras"><span>Formulaire</span> <span>d'incription</span> <span>à</span> <span>la</span> <span>DDCS</span></h1>
    </div>


    <div id="LesImages">
        <img id="logoDDCS" src="../../Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
    </div>


    <div>
        <label class="lien ombreText">
            <a href="../../index.php">Accueil</a>
        </label>
    </div>




    <div class="l3"></div>




    <p class="text">Ce formulaire doit impérativement être validé et/ou rempli par le président du club !</p>

    <br>


    <form action="PHP/FormulaireInscription.php" method="POST" enctype="multipart/form-data">
        <div class="p1">
            <div class="title">
                <legend>
                    <h2>Informations générales</h2>
                </legend>
            </div>

            <div class="lignesForm"></div>
            <div id="field1">
                <fieldset class="field">
                    <legend>
                        <h3>Situation</h3>
                    </legend>

                    <p>
                        <label for="nomClub">Nom du club :</label>
                        <input type="text" name="nomClub" required class="input_text" />
                    </p>

                    <p>
                        <label for="sigleClub">Sigle du club :</label>
                        <input type="text" name="sigleClub" required class="input_text" />
                    </p>

                    <p>
                        <label for="adresseClub">Rue :</label>
                        <input type="text" name="adresseClub" placeholder="Adresse" required class="input_text" />
                    </p>
                    <p>
                        <label for="complementAdresseClub">Complément de rue :</label>
                        <input type="text" name="complementAdresseClub" placeholder="Facultatif" class="input_text" />
                    </p>

                    <p>
                        <label for="villeClub">Ville :</label>
                        <input type="text" name="villeClub" required class="input_text" />
                    </p>
                    <p>
                        <label for="codePostalClub">Code postal :</label>
                        <input type="text" name="codePostalClub" required class="input_text" />
                    </p>

                    <p>
                        <label for="numAgrement">N° Agrément du club :</label>
                        <input type="text" name="numAgrement" value="AS 77" class="input_text" />
                    </p>


                    <p>
                        <label for="fedAffiliation">Fédération d'affiliation :</label>
                        <select id="fedAffiliation" name="fedAffiliation" required size="1" class="listeDeroulente">
                            <option>
                                FFF
                            </option>

                        </select>
                    </p>

                    <p>
                        <label for="satutAsso">Statut d'association :</label>
                        <select id="satutAsso" name="satutAsso" required size="1" class="listeDeroulente">
                            <option>
                                Active
                            </option>
                            <option>
                                En pause
                            </option>
                            <option>
                                N'existe plus
                            </option>
                        </select>
                    </p>


                    <p>
                        <label for="numSiret">N° Siret du club :</label>
                        <input type="text" name="numSiret" required class="input_text" />
                    </p>

                </fieldset>
            </div>

        </div id="field2">
        <fieldset class="field">
            <legend>
                <h3>Contact</h3>
            </legend>

            <p>
                <label for="mailClub">Adresse mail du club :</label>
                <input type="email" name="mailClub" placeholder="mail@club.com" required class="input_text" />
            </p>

            <p>
                <label for="siteClub">Site internet du club :</label>
                <input type="text" name="siteClub" value="www." required class="input_text" />
            </p>
            <p>
                <label for="reseauSocialClub">Adresse réseau social du club :</label>
                <input type="texte" name="reseauSocialClub" value="www." class="input_text" />
            </p>


            </br>
            <label>Au moins un numéro doit être saisi !</label>
            <p>

                <label for="telFixeClub">Téléphone fixe du club :</label>
                <input type="text" name="telFixeClub" placeholder="Au format 0000000000" class="input_text" />
            </p>
            <p>
                <label for="telPortableClub">Téléphone portable du club :</label>
                <input type="text" autocomplete="tel" name="telPortableClub" placeholder="Au format 0000000000"
                    class="input_text" />

            </p>

        </fieldset>
        </div>
        </div>


        <div class="title">
            <legend>
                <h2>Informations administratives</h2>
            </legend>

        </div>
        <div class="p2">
            <div id="field3">
                <fieldset class="field">
                    <legend>
                        <h3>Président du club</h3>
                    </legend>

                    <p>
                        <label for="civilitePresident">Civilité du président(e) :</label>
                        <select id="civilitePresident" name="civilitePresident" required size="1"
                            class="listeDeroulente">
                            <option>
                                Monsieur
                            </option>
                            <option>
                                Madame
                            </option>

                        </select>
                    </p>

                    <p>
                        <label for="nomPresident">Nom :</label>
                        <input type="text" name="nomPresident" required class="input_text" />
                    </p>
                    <p>
                        <label for="prenomPresident">Prénom :</label>
                        <input type="text" name="prenomPresident" required class="input_text" />
                    </p>

                    <p>
                        <label for="emailPresident">Adresse mail :</label>
                        <input type="email" name="emailPresident" placeholder="mail@president(e).com" required
                            class="input_text" />
                    </p>

                    <p>
                        <label for="telPresident">Numéro de téléphone :</label>
                        <input type="text" name="telPresident" placeholder="Au format 0000000000" class="input_text" />
                    </p>
                </fieldset>
            </div>

            <div id="field3">
                <fieldset class="field">
                    <legend>
                        <h3>Secrétariat</h3>
                    </legend>

                    <p>
                        <label for="emailSecretaria">Adresse mail :</label>
                        <input type="email" name="emailSecretaria" placeholder="mail@secretariat.com" required
                            class="input_text" />


                    </p>

                    <p>
                        <label for="telSecretaria">Numéro de téléphone :</label>
                        <input type="tel" name="telSecretaria" placeholder="Au format 0000000000" required
                            class="input_text" />
                    </p>
                </fieldset>
            </div>
        </div>
        <div id="p3">
            <p>
            <h4>Confidentialité et Consentement</h4>
            </p>
            <p>
                <input type="checkbox" id="declare" required />
                <label for="declare">Je déclare que l'assemblée générale du club a pris connaissance de
                    l'existence
                    de cette demande d'inscription <br class="retourLigne" />à la DDCS et déclare que ce document a
                    été
                    validé et/ou rempli par
                    le président de l'association sportive.
                </label>

                <br />
                <br />

                <input type="checkbox" id="valideInscription" required />
                <label for="valideInscription">
                    Je déclare avoir pris connaissance et relu les informations données de sorte à ce qu'elles ne
                    soient
                    pas éronnées.
                </label>

                <br />
                <br />


            <div>
                <input type="checkbox" id="accepte" required />
                <label for="accepte">
                    Je déclare avoir lu et accepté <a href="#popup" id="conditions">les conditions générales
                        d'utilisation. </a>
                </label>
            </div>

            <div id="popup" class="overlay">
                <div class="popup">
                    <h2>Conditions générales d'utilisations</h2>
                    <a href="#" class="cross">&times;</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a eros mauris. Mauris
                        faucibus
                        massa eget justo venenatis gravida. Ut nec venenatis arcu. Sed finibus tincidunt
                        consectetur.
                        Donec suscipit augue ac eros posuere, id dictum velit lobortis. Sed leo purus, tristique id
                        ultrices eget, facilisis a sem. Suspendisse ac neque libero. Aenean eget sodales elit.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc
                        semper ultricies sapien, cursus malesuada tortor posuere a. Nunc euismod semper purus, et
                        porttitor erat consequat ut. Aliquam urna odio, mollis ut massa non, ornare iaculis dui.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed
                        congue sodales rhoncus.

                        Proin sed elementum massa, eu molestie turpis. In a hendrerit quam. Morbi finibus pretium
                        quam
                        eu maximus. Donec ante ante, ultrices non placerat nec, tempor in arcu. Donec laoreet
                        venenatis
                        blandit. Etiam vel ligula tortor. Duis condimentum egestas magna nec elementum. Curabitur
                        rutrum
                        pretium justo vel facilisis. Vestibulum leo lorem, ornare ac ultricies eu, tempor sed nibh.
                        Aliquam facilisis ex vitae ex maximus posuere. Maecenas eu ornare tortor. Sed sit amet
                        bibendum
                        ante. Maecenas at suscipit arcu, ut vehicula ligula.

                        Vestibulum eleifend, dui ac pulvinar bibendum, metus nisl sollicitudin magna, eget luctus
                        velit
                        massa ut erat. Nulla commodo odio non lacus rutrum dictum. Morbi sed placerat nunc. Sed
                        volutpat
                        blandit leo, ac fringilla quam sagittis vel. Nunc in tincidunt ex. Vestibulum hendrerit leo
                        id
                        facilisis consequat. Etiam auctor quam augue, sed aliquet lacus pulvinar et. In eros quam,
                        efficitur id placerat vitae, dignissim eu felis. Phasellus aliquet odio in magna mattis, non
                        malesuada ante volutpat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                        ducimus illum nam! Vero, doloremque corrupti architecto molestiae, impedit at, consequatur a
                        ad
                        ut nihil illo possimus quis porro! Enim veritatis minima quia voluptates, exercitationem
                        dolorem
                        cumque sint quasi sequi fugit beatae alias debitis voluptatibus quidem? Nisi tempora minus
                        nesciunt odit delectus modi, consequatur repudiandae fugit corporis non totam nostrum dicta,
                        nihil sit. Voluptates soluta ratione odio esse minima quam dicta iure dolor, quibusdam
                        impedit
                        illum, hic beatae excepturi libero rerum? Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Earum nesciunt facilis perspiciatis saepe cumque libero laudantium sapiente asperiores
                        placeat eum exercitationem, neque, autem dignissimos temporibus quam non. Incidunt ab
                        temporibus
                        voluptates. Deserunt est dolorem temporibus ducimus debitis fugit dignissimos praesentium
                        excepturi velit labore! Aperiam voluptatem eos inventore consequuntur a natus saepe beatae
                        vitae
                        laboriosam molestias? Nobis quasi atque ducimus, officiis inventore sint est cum reiciendis
                        amet
                        corrupti laboriosam assumenda temporibus quas necessitatibus? Quod ad excepturi quia, id
                        reprehenderit amet labore! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias
                        necessitatibus totam ipsa molestiae, deleniti numquam est dolorem impedit dignissimos
                        repudiandae a minus veniam corrupti distinctio ab deserunt, officiis, libero harum!</p>

                </div>
            </div>



            </p>

            <br>
            <br>

            <button id="valide">Valider</button>


        </div>

    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="../../index/JS/Animation.js"></script>
    <script src="../../index/JS/MenuUtilisateur.js"></script>
</body>

</html>