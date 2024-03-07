
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
<main class="container">
<form method="post">
    <input type="hidden" name="csrf_token">
    <h1>Inscription</h1>
    <!-- <label for="user_name">Votre user_name :</label> -->
    <input type="text" id="surname" name="surname" placeholder="Veuillez saisir votre nom" /><br>
    <input type="text" id="name" name="name" placeholder="Veuillez saisir votre Prenom" /><br>
    <input type="text" id="age" name="age" placeholder="Veuillez saisir votre age" /><br>
    <input type="date" id="birthday" name="birthday" placeholder="Veuillez saisir votre date d'anniversaire" /><br>
    <!-- <label for="email">Votre adresse mail</label> -->
    <input type="email" name="email" id="email" placeholder="Veuillez saisir votre mail" /><br>
    <!-- <label for="confirm_password">Votre mot de passe</label> -->
    <input type="password" name="password" id="pwd" placeholder="Veuillez saisir votre mot de passe" /><br>
    <input hidden>
        <select id="promotion" name="promotion">
        <?php foreach($row as $data){ ?>
        <option value=<?= $data['id'];?>><?= $data['name'];?>     /année : <?=$data['date'];?></option>
        <?php }; ?>
        </select>
    </input>

    <input type="submit" class="but" value="Valider" name="ok" /> <br>
    <div id="link">
        <a href="?page=login.php">Retour</a>
    </div>
</form>
</main>
</body>
</html>