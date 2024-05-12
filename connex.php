<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style.css">
    <script src="java.js" defer></script>

</head>

<body>
    <!-- Logo de l'école -->
    <img src="logo_esatic1.png" alt="Logo de l'école" width="100">

    <h2>INSCRIPTION CONCOURS CRACK 2024</h2>
    <form action="donnees.php" method="post" enctype="multipart/form-data">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="date">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date" required><br><br>

        <label for="sexe">Sexe :</label>
        <input type="radio" id="homme" name="sexe" value="homme" required>
        <label for="homme">Homme</label>
        <input type="radio" id="femme" name="sexe" value="femme" required>
        <label for="femme">Femme</label><br><br>

        <label for="motivation">Motivation :</label>
        <textarea id="motivation" name="motivation" required></textarea><br><br>

        <label for="diplome">Diplôme :</label>
        <select id="diplome" name="diplome" required>
            <option value="">-- Sélectionner --</option>
            <option value="DUT">DUT</option>
            <option value="BTS">BTS</option>
            <option value="LICENCE">LICENCE</option>
            <option value="MASTER">MASTER</option>
            <option value="DOCTORAT">DOCTORAT</option>
        </select><br><br>

        <label for="nationalite">Nationalité :</label>
        <input type="text" id="nationalite" name="nationalite" required><br><br>

        <label for="numero">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="numero" required><br><br>

        <label for="niveau">Niveau en anglais :</label>
        <select id="niveau_anglais" name="niveau" required>
            <option value="">-- Sélectionner --</option>
            <option value="debutant">Débutant</option>
            <option value="intermediaire">Intermédiaire</option>
            <option value="avance">Avancé</option>
        </select><br><br>

        <label for="photo">Photo :</label>
        <input type="file" id="photo" name="photo" accept="image/*" required><br><br>

        <label for="specialite">Spécialité choisie :</label>
        <select id="specialite" name="specialite" required>
            <option value="">-- Sélectionner --</option>
            <option value="Data Science">Data Science</option>
            <option value="Intelligence Artificielle">Intelligence Artificielle</option>
            <option value="Réseaux Télécom">Réseaux Télécom</option>
            <option value="Génie Logiciel">Génie Logiciel</option>
            <option value="Securite Informatique">Securite Informatique</option>
        </select><br><br>
        
        <input type="submit" value="Valider" >
    </form>
</body>
</html>
