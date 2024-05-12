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
    die(": " . $conn->connect_error);
}

echo "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $dates = $_POST['date'];
    $sexe = $_POST['sexe'];
    $motivation = $_POST['motivation'];
    $diplome = $_POST['diplome'];
    $nationalite = $_POST['nationalite'];
    $numero = $_POST['numero'];
    $niveau = $_POST['niveau'];
    $specialite = $_POST['specialite'];
    
    // Récupérer le nom du fichier de la photo téléchargée
    $photo_name = $_FILES['photo']['name'];

    // Emplacement temporaire du fichier téléchargé
    $photo_tmp_name = $_FILES['photo']['tmp_name'];

    // Déplacer le fichier téléchargé vers un dossier de destination
    $photo_destination = 'uploads/' . $photo_name;

    if (move_uploaded_file($photo_tmp_name, $photo_destination)) {
        echo ".";
    } else {
        echo ".";
    }

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO etudiant (nom, prenom, email, date_de_naissance, sexe, motivation, diplome, nationalite, numero, niveau, photo, specialite) VALUES ('$nom', '$prenom', '$email', '$dates', '$sexe', '$motivation', '$diplome', '$nationalite', '$numero', '$niveau', '$photo_destination', '$specialite')";

    // Exécuter la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo ": " . $conn->error;
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirection vers la liste des personnes inscrites</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirection vers la liste des personnes inscrites</title>
    <style>
        body {
            background-color: #b3d9ff; /* Fond bleu clair */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        form {
            text-align: center;
        }
        input[type="submit"] {
            background-color: #007bff; /* Couleur de fond bleu */
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Couleur de fond bleu foncé au survol */
        }
    </style>
</head>
<body>
    <!-- Ajouter un bouton pour voir les personnes inscrites -->
    <form action="liste_inscrites.php" method="get">
        <input type="submit" value="VOUS ETES INSCRITS AVEC SUCCES VOIR LES PERSONNES INSCRITES">
    </form>
</body>
</html>
