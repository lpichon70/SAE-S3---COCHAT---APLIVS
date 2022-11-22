<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>APPLIVS</title>
        <link rel="icon"  type="image/png" sizes="16x16" href="Images/icon_ballon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/FormulaireInscription.css">
    </head>
    <body>


        <h1>
            Récapitulatif de votre inscription
        </h1>

        <?php

            require_once("Club.php");
            require_once("President.php");
            require_once("Secretaria.php");

            require_once("FormInscriptionManager.php");

            $club = new Club($_POST["nomClub"],$_POST["sigleClub"],$_POST["adresseClub"],
            $_POST["complementAdresseClub"],$_POST["villeClub"],$_POST["codePostalClub"],
            $_POST["numAgrement"],$_POST["fedAffiliation"],$_POST["satutAsso"],$_POST["numSiret"],
            $_POST["mailClub"],$_POST["siteClub"],$_POST["reseauSocialClub"],$_POST["telFixeClub"],
            $_POST["telPortableClub"]);

            $president = new President($_POST["civilitePresident"],$_POST["nomPresident"],
            $_POST["prenomPresident"], $_POST["emailPresident"],$_POST["telPresident"]);

            $secretaria = new Secretaria($_POST["emailSecretaria"], $_POST["telSecretaria"]);

            
            echo "</br>"."</br>"."<h2>Informations du club :</h2>"."</br>".$club->__toString();
            
            echo "</br>"."</br>"."<h2>Informations president :</h2>"."</br>".$president->__toString();
            
            echo "</br>"."</br>"."<h2>Informations secrétariat :</h2>"."</br>".$secretaria->__toString();


            //Connection à la base de données 
          
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
                }
                catch (Exception $e)
                {
                    die('Erreur : ' . $e->getMessage());
                }

            $manager = new FormInscriptionManager($bdd);
            $manager->add($club, $president, $secretaria);
                
        ?> 
        
        </br>
        </br>
        <div>
            <a href="../../../Index.html" >Retourner au menu</a>                
        </div>
        </br>
        </br>
    </body>


</html>