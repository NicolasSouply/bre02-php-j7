<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choix de couleur</title>
</head>
<body>
    <h1>Choisissez une couleur</h1>
    <form action="index.php" method="post">
        <label for="couleur">Choix de couleur :</label>
        <select name="couleur" id="couleur">
            <option value="noir">Noir</option>
            <option value="rouge">Rouge</option>
            <option value="bleu">Bleu</option>
        </select>
        <button type="submit">Appliquer</button>
    </form>
</body>
</html>