// Récupérer le code-barre scanné (remplacez ceci par votre logique de récupération du code-barre scanné)
var codebarreScanne = "168379208293"; // Exemple de code-barre scanné

// Créer un objet XMLHttpRequest
var xhttp = new XMLHttpRequest();

// Configurer la requête
xhttp.open("GET", "rechercher_produit.php?codebarre=" + codebarreScanne, true);

// Définir la fonction de rappel pour gérer la réponse
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Convertir la réponse JSON en objet JavaScript
        var produit = JSON.parse(this.responseText);
        
        // Vérifier si un produit a été trouvé
        if (produit) {
            // Afficher les informations du produit sur la page
            document.getElementById("resultats").innerHTML =
                "<div class='product-info'>" +
                "<p>ID: " + produit.id + "</p>" +
                "<p>Nom: " + produit.nom + "</p>" +
                "<p>Prix: " + produit.prix + "</p>" +
                "<p> <img src='" + produit.image + "'></p>" +
                "<p>Référence de la planète: " + produit.code_barre + "</p>" +
                "</div>";
        } else {
            // Afficher un message si aucun produit n'a été trouvé
            document.getElementById("resultats").innerHTML = "<p>Aucune planète n'a été trouvé avec cette référence</p>";
        }
    }
};

// Envoyer la requête
xhttp.send();
