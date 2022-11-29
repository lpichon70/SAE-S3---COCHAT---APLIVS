<?php
    require_once("PHP/VoirMonClub/Club.php");  
    require_once("PHP/VoirMonClub/BDDManager.php");
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
    $club = $manager->get(15);
?>


<!DOCTYPE html>
<html lang="fr">



<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="CSS/FormulaireInscription.css" type="text/css">
    <title>Fiche d'inscription à la DDCS</title>
</head>



<body>

    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>



    <div class="container-first">
        <h1><span>Formulaire</span> <span>de</span> <span>modification</span> <span>de</span> <span>profil</span></h1>
    </div>


    <div id="LesImages">
        <img id="logoDDCS" src="Images/DDCS.jpg" width="25%" height="25%" class="logo" alt="logo DDCS" />
    </div>


    <div>
        <label class="lien">
            <a href="../index.html">Accueil</a>
        </label>

        <label class="lien">
            <a href="formulaire_renseignement.php">Signalement</a>
        </label>
    </div>


    

    <div class="l3"></div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <form action="./PageProfil.php" method="POST" enctype="multipart/form-data">
        <div class="p1">
            <div class="title">
                <legend>
                    <h2>Informations générales</h2>
                </legend>
                <legend>
                    <h4>Attention, certaines informations peuvent avoir été modifiées, vérifiez les bien.</h4>
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
                        <?php echo '<input type="text" name="nomClub" required class="input_text" value="'.$club->getNomClub().'"/>'; ?>
                    </p>

                    <p>
                        <label for="sigleClub">Sigle du club :</label>
                        <input type="file" name="sigleClub"/>
                    </p>

                    <p>
                        <?php echo '<img class="imageProfil" src="'.$club->getSigle().'" alt=sigle>' ; ?>
                    </p>

                    <p>
                        <label for="adresseClub">Rue :</label>
                        <?php echo '<input type="text" name="adresseClub" placeholder="Adresse" required class="input_text" value="'.$club->getRue().'"/>'; ?>
                    </p>
                    <p>
                        <label for="complementAdresseClub">Complément de rue :</label>
                        <?php echo '<input type="text" name="complementAdresseClub" placeholder="Facultatif" class="input_text" value="'.$club->getComplementRue().'"/>'; ?>
                    </p>

                    <p>
                        <label for="villeClub">Ville :</label>
                        <?php echo '<input type="text" name="villeClub" required class="input_text" value="'.$club->getVille().'"/>'; ?>                   
                    </p>
                    <p>
                        <label for="codePostalClub">Code postal :</label>
                        <?php echo '<input type="text" name="codePostalClub" required class="input_text" value="'.$club->getCodePostal().'"/>'; ?>                    
                    </p>                    
                  
                    <p>
                        <label for="numAgrement">N° Agrément du club :</label>
                        <?php echo '<input type="text" name="numAgrement" class="input_text" value="'.$club->getNumAgrement().'"/>'; ?>  
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
                        <select id="statutAsso" name="statutAsso" required size="1" class="listeDeroulente">
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
                        <?php echo '<input type="text" name="numSiret" required class="input_text" value="'.$club->getSiret().'"/>'; ?>  
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
                <?php echo '<input type="email" name="mailClub" placeholder="mail@club.com" required class="input_text" value="'.$club->getMailClub().'"/>'; ?> 
            </p>

            <p>
                <label for="siteClub">Site internet du club :</label>
                <?php echo '<input type="text" name="siteClub" required class="input_text" value="'.$club->getSiteClub().'"/>'; ?> 
            </p>
            <p>
                <label for="reseauSocialClub">Adresse réseau social du club :</label>
                <?php echo '<input type="texte" name="reseauSocialClub" class="input_text" value="'.$club->getReseau().'"/>'; ?> 
            </p>


            </br>
  
            <p>

                <label for="telFixeClub">Téléphone fixe du club :</label>
                <?php echo '<input type="text" name="telFixeClub" placeholder="Au format 0000000000" class="input_text" value="'.$club->getTelFixeClub().'"/>'; ?> 
            </p>
            <p>
                <label for="telPortableClub">Téléphone portable du club :</label>
                <?php echo '<input type="text" autocomplete="tel" name="telPortableClub" placeholder="Au format 0000000000" class="input_text" value="'.$club->getTelPortableClub().'"/>'; ?> 

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
                        <?php echo '<input type="text" name="nomPresident" required class="input_text" value="'.$club->getNomPres().'"/>'; ?> 
                    </p>
                    <p>
                        <label for="prenomPresident">Prénom :</label>
                        <?php echo '<input type="text" name="prenomPresident" required class="input_text" value="'.$club->getPrenomPres().'"/>'; ?> 
                    </p>

                    <p>
                        <label for="emailPresident">Adresse mail :</label>
                        <?php echo '<input type="email" name="emailPresident" placeholder="mail@president(e).com" required class="input_text" value="'.$club->getMailPres().'"/>'; ?> 
                    </p>

                    <p>
                        <label for="telPresident">Numéro de téléphone :</label>
                        <?php echo '<input type="text" name="telPresident" placeholder="Au format 0000000000" class="input_text" value="'.$club->getTelPres().'"/>'; ?> 
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
                        <?php echo '<input type="email" name="emailSecretariat" placeholder="mail@secretariat.com" required class="input_text" value="'.$club->getMailSecret().'"/>'; ?> 
                    </p>

                    <p>
                        <label for="telSecretaria">Numéro de téléphone :</label>
                        <?php echo '<input type="tel" name="telSecretariat" placeholder="Au format 0000000000" required class="input_text" value="'.$club->getTelSecret().'"/>'; ?> 
                    </p>

                </fieldset>

            </div>

        </div>
        <div id="p3">
            

            <br>
            <br>

            <button id="valide">Valider</button>

            <br>
            <br>
            <br>
            <br>


        </div>

    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="Js/Animation.js"></script>
</body>

</html>