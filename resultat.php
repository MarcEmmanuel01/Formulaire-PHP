<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification d'admission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3498db; /* Couleur de fond bleue */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            opacity: 0;
            animation: fadein 1s forwards;
        }
        h1 {
            margin-top: 0;
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
        .admis {
            color: green;
        }
        .non-admis {
            color: red;
        }
        @keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Définition des données de la personne
        $nom = "AMANI";
        $prenom = "Kone Yann";
        $filiere = "Genie Logiciel";
        $note = 14; // Note de la personne
        
        // Fonction pour vérifier si la personne est admise
        function estAdmis($note) {
            // Mettre ici la condition pour être admis, par exemple si la note est supérieure ou égale à 10
            return $note >= 10;
        }
        
        // Affichage des informations de la personne
        echo "<h1>Informations sur les etudiants admis: 1/12 </h1>";
        echo "<p><strong>Nom :</strong> $nom</p>";
        echo "<p><strong>Prénom :</strong> $prenom</p>";
        echo "<p><strong>Filière :</strong> $filiere</p>";
        echo "<p><strong>Note :</strong> $note</p>";
        
        // Vérification si la personne est admise
        if (estAdmis($note)) {
            echo "<p class='admis'><strong>Cette personne est admise.</strong></p>";
        } else {
            echo "<p class='non-admis'><strong>Cette personne n'est pas admise.</strong></p>";
        }
        ?>
    </div>

    <script>
        // Ajouter une animation pour le message d'admission
        const message = document.querySelector('.admis') || document.querySelector('.non-admis');
        if (message) {
            message.style.animation = 'bounce 0.5s infinite alternate';
        }
    </script>
</body>
</html>
