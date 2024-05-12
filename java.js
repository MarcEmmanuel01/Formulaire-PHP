document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Empêcher l'envoi du formulaire par défaut

        // Valider le formulaire
        if (validateForm()) {
            // Envoyer le formulaire si la validation réussit
            form.submit();
        }
    });

    function validateForm() {
        // Récupérer les champs du formulaire
        const nom = document.getElementById("nom").value;
        const prenom = document.getElementById("prenom").value;
        const email = document.getElementById("email").value;
        const dateNaissance = document.getElementById("date_naissance").value;
        const nationalite = document.getElementById("nationalite").value;
        const telephone = document.getElementById("telephone").value;

        // Valider chaque champ individuellement
        if (nom === "" || prenom === "" || email === "" || dateNaissance === "" || nationalite === "" || telephone === "") {
            alert("Veuillez remplir tous les champs.");
            return false; // Validation échouée
        }

        // Valider l'email avec une expression régulière simple
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Veuillez entrer une adresse email valide.");
            return false; // Validation échouée
        }

        // Valider le numéro de téléphone avec une expression régulière simple
        const phonePattern = /^\d{10}$/;
        if (!phonePattern.test(telephone)) {
            alert("Veuillez entrer un numéro de téléphone valide (10 chiffres).");
            return false; // Validation échouée
        }

        // Si toutes les validations réussissent, retourne true
        return true;
    }
});
