<?php

session_start();



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tester un mot de passe</title>
</head>
<body>
    <h1>Tester un mot de passe</h1>
    <form action="decrypt_password.php" method="post">
        
        <label for="password">Mot de passe en clair :</label>
        
        <input type="password" name="password" id="password" required>
        
        <label for="hashed_password">Mot de passe en chiffré :</label>
        
        <input type="password" name="hashed_password" id="hashed_password" required>
        
        <button type="submit">Vérifier</button>
        
    </form>
</body>
</html>
