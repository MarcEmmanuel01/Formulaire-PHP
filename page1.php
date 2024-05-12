<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('image_esatic.Jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .button {
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            border: none;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BIENVENUE SUR NOTRE SITE </h1>
        <h2>Choisissez une action :</h2>
        <a href="connex.php" class="button">Formulaire d'inscription</a>
        <a href="liste_inscrites.php" class="button">Personnes inscrites</a>
        <a href="resultat.php" class="button">Résultats</a>
    </div>
</body>
</html>
