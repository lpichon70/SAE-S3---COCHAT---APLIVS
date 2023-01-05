<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="public/css/main.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestion Utilisateur</title>
    </head>


<body>
<h1>Ajout d'un Utilisateur</h1>

<form action="../gestionUtilisateur.php?action=add-user" method="POST">
    <div class="container">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required/>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" />

        <label for="identifiant">Identifiant :</label>
        <input type="text" name="identifiant" />

        <label for="mdp">Mot de passe :</label>
        <input type="text" name="mdp" />

        <label for="statut">Statut :</label>
        <select type="text" name="statut">
            <option>DDCS</option>
            <option>ADMIN</option>
            <option>POLICE</option>
        </select>
    </div>

    <button >Valider</button>
</form>
</body>