<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'une Planète</title>
    <!-- Inclure le lien vers votre fichier CSS -->
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css'>
    <style>
        .container {
            z-index: 1; /* Z-index plus bas pour le placer en arrière-plan */
        }

        .container2 {
            position: absolute; /* Position absolue pour l'ancrer au milieu */
            top: 50%; /* Placer le haut de la div à 50% de la hauteur de la fenêtre */
            left: 50%; /* Placer la gauche de la div à 50% de la largeur de la fenêtre */
            transform: translate(-50%, -50%); /* Déplacer la div de moitié de sa propre taille */
            background-color: rgba(255, 255, 255, 0.7); /* Couleur de fond blanc semi-transparent */
            padding: 20px; /* Marge intérieure */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre douce */
            max-width: 600px; /* Largeur maximale */
            z-index: 2; /* Z-index plus élevé pour le placer au-dessus du background */
        }

        .product-info {
            margin-top: 20px; /* Marge en haut des informations du produit */
        }

        .product-info p {
            margin: 10px 0; /* Marge autour de chaque paragraphe */
        }

        /* Style pour le bouton de retour */
        .back-button {
            background-color: #f44336; /* Rouge */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px; /* Ajout de marge en haut */
            display: inline-block; /* Affichage en ligne pour qu'il soit sur la même ligne que les autres éléments */
        }

        .back-button:hover {
            background-color: #d32f2f; /* Rouge plus foncé au survol */
        }
    </style>
</head>
<body>

<div class="container" id="large-header" class="large-header">
    <canvas id="demo-canvas"></canvas>
</div>

<div class="container2">
    <h1>Résultats de la Recherche :</h1>

    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "Admin123";
    $dbname = "BornedePrix";

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Récupération du code-barres saisi dans le formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codebarre = $_POST['codebarre'];

        // Requête SQL pour rechercher le produit correspondant au code-barres
        $sql = "SELECT * FROM produits WHERE code_barre = '$codebarre'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Affichage des données du produit
            while($row = $result->fetch_assoc()) {
                echo "<div class='product-info'>";
                echo "<p>Nom: " . $row["nom"]. "</p>";
                echo "<p>Prix: " . $row["prix"]. "</p>";
                echo "<p> <img src='" . $row["image"] . "'></p>";
                echo "<p>Référence de la planète: " . $row["code_barre"]. "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Aucune planète n'a été trouvé avec cette référence</p>";
        }
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
    ?>
    
    <!-- Bouton de retour -->
    <button class="back-button" onclick="window.history.back()">Retour</button>
</div>

<!-- Inclure les liens vers vos fichiers JavaScript -->
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>
<script  src="./app.js"></script>
</body>
</html>
