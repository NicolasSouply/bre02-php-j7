<?php
session_start();



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Choisir un pseudo</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>Choisissez votre pseudo</h1>
    <form action="nickname.php" method="post">
        <fieldset>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" required>
        </fieldset>
        <fieldset>
            <button type="submit">Envoyer</button>
        </fieldset>
    </form>

<a href="logout.php">Déconnexion</a>
</body>
</html>