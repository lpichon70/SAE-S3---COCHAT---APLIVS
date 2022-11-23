<?php
  session_start();

  require_once("PHP/PageConnexion/FabriqueSession.php");
  require_once("PHP/PageConnexion/Conn.php");
  require_once("PHP/PageConnexion/BDDManager.php");

  @$valider = $_POST['submit'];
  @$identifiant = $_POST['nomUtilisateur'];
  @$mdp = $_POST['Mdp'];

  if (isset($valider))
  {
    $db = new PDO('mysql:host=localhost;dbname=grp-254_s3_sae', 'grp-254', '0k6zqrrr');
    $manager = new BDDManager($db);
    $conn = $manager->get($identifiant);
    if ($conn == null)
    {
      header("Location:Connexion.php");
      $error = "Identifiant ou mot de passe invalide !";
    }
    else
    {
      header("Location:FormulaireInscription.html");
    }
  }

?>

<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="icon" type="image/png" sizes="16x16" href="Images/icon_ballon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Connexion.css">
  </head>

  <body>

    
    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    <div class="container-first">
        <h1><span>Page</span> <span>de</span> <span>connexion</span></h1>
    </div>

  
    <fieldset id="blockConnexion">
        <form action="PHP/PageConnexion/Index.php" method="post">
            <h2>Connexion</h2>

            <div class="element">
              <label  for="nomUtilisateur">Identifiant :</label>
              <br>
            
              <input class="container" type="text" name="nomUtilisateur" required/>
              <div class="lignesElement"></div> 
              <label class="error"><?$error?></label>
            </div>
                    
            <br>

            <div class="element">
              <label for="Mdp" >Mot de passe :</label>
              <br>
              <input class="container" type="password" name="Mdp"  required/>
              <div class="lignesElement"></div>
              <label class="error"><?$error?></label>
            </div>
            
            <br>

            <input id="btn-connexion" type="submit" name="submit" value="Me connecter"/>
            
            <br>

            <a id="inscription" href="./FormulaireInscription.html"  >Je ne suis pas encore inscrit</a>
        </form>
        
    </fieldset>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="Js/Animation.js"></script>
  </body>


</html>
