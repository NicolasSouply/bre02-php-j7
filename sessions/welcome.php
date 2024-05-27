<?php
session_start();
$pseudo = isset($_SESSION["pseudo"]) ? $_SESSION["pseudo"] : "invité";
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue <?= htmlspecialchars($pseudo) ?>!</h1>
</body>
</html>