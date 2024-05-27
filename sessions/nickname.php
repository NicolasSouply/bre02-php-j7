<?php
session_start();
$_SESSION["pseudo"] = $_POST['pseudo'];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Redirection...</title>
    <meta http-equiv="refresh" content="0; url=welcome.php">
</head>
<body>
    <p>Redirection en cours...</p>
</body>
</html>