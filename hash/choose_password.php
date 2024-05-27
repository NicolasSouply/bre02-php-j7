<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir un mot de passe</title>
</head>
<body>
    <h1>Choisir un mot de passe</h1>
    <form action="hash_password.php" method="post">
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Valider</button>
    </form>
</body>
</html>