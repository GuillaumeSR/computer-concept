
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
<main class="container">
<form action="./controllers/connexion_controller.php" method="post">
    <h1>Connexion</h1>
    <!-- <label for="user_name">Votre nom :</label> -->
    <input type="text" id="name" name="name" placeholder="Veuillez saisir votre nom" required /><br>
    <!-- <label for="password">Votre mot de passe</label> -->
    <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required /><br>

    <input type="submit" class="but" value="Valider" name="ok" /><br>
    
    <div id="link">
        <a href= "?page=inscription.php">S'inscrire</a>
        <a href="?page=homepage.php">Accueil</a>
    </div>
    
</form>
</main>

</body>

</html>