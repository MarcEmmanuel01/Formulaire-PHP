<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Adresse du serveur de base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$dbname = "etudiant"; // Nom de la base de données

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête SQL pour sélectionner toutes les entrées de la table 'etudiant'
$sql = "SELECT * FROM etudiant";

// Exécuter la requête SQL
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des personnes inscrites</title>
    <style>
        body {
            background-color: #ffffff; /* Fond blanc */
            text-align: center; /* Centrer le texte */
        }
        table {
            width: 90%; /* Largeur du tableau */
            margin: 20px auto; /* Centrer le tableau */
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>LISTES DES PERSONNES INSCRITES</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Motivation</th>
            <th>Diplôme</th>
            <th>Nationalité</th>
            <th>Numéro de téléphone</th>
            <th>Niveau en anglais</th>
            <th>Spécialité choisie</th>
            <th>Photo</th> <!-- Nouvelle colonne pour la photo -->
        </tr>
        <?php
        // Vérifier si des résultats ont été retournés
        if ($result->num_rows > 0) {
            // Afficher les données de chaque ligne
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenom"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["date_de_naissance"] . "</td>";
                echo "<td>" . $row["sexe"] . "</td>";
                echo "<td>" . $row["motivation"] . "</td>";
                echo "<td>" . $row["diplome"] . "</td>";
                echo "<td>" . $row["nationalite"] . "</td>";
                echo "<td>" . $row["numero"] . "</td>";
                echo "<td>" . $row["niveau"] . "</td>";
                echo "<td>" . $row["specialite"] . "</td>";
                // Afficher la photo
                echo "<td><img src='" . $row["photo"] . "' alt='Photo de l'étudiant' style='max-width: 100px; max-height: 100px;'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>Aucune donnée trouvée</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Fermer la connexion à la base de données
$conn->close();
?>
