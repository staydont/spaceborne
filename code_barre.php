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

        .product-info {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .product-info p {
            margin: 5px 0;
        }

        .barcode-img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>


<div class="container2">
    <h1>Résultats de la Recherche :</h1>

    <?php
    // Tableau contenant les informations sur les planètes
    $planetes = array(
        array("Nom" => "Terre", "Code-barre" => "168379208293"),
        array("Nom" => "Mars", "Code-barre" => "789456123547"),
        array("Nom" => "Jupiter", "Code-barre" => "951753852741"),
        array("Nom" => "Saturne", "Code-barre" => "357159753024"),
        array("Nom" => "Uranus", "Code-barre" => "654321987456"),
        array("Nom" => "Neptune", "Code-barre" => "123456789012"),
        array("Nom" => "Vénus", "Code-barre" => "987654321098"),
        array("Nom" => "Mercure", "Code-barre" => "456789012345"),
        array("Nom" => "Pluton", "Code-barre" => "789012345678"),
        array("Nom" => "Cérès", "Code-barre" => "012345678901"),
        array("Nom" => "Io", "Code-barre" => "234567890123"),
        array("Nom" => "Europe", "Code-barre" => "345678901234"),
        array("Nom" => "Titan", "Code-barre" => "456789012345"),
        array("Nom" => "Ganymède", "Code-barre" => "567890123456"),
        array("Nom" => "Callisto", "Code-barre" => "678901234567"),
        array("Nom" => "Io", "Code-barre" => "789012345678"),
        array("Nom" => "Encelade", "Code-barre" => "890123456789"),
        array("Nom" => "Triton", "Code-barre" => "901234567890"),
        array("Nom" => "Charon", "Code-barre" => "012345678901"),
        array("Nom" => "Phobos", "Code-barre" => "234567890123")
    );

    // Boucle pour afficher les noms et les codes-barres des planètes
    foreach ($planetes as $planete) {
        echo "<div class='product-info'>";
        echo "<p>Nom: " . $planete["Nom"] . "</p>";
        echo "<div style='text-align: center;'>";
        echo "<img class='barcode-img' alt='Barcode' src='https://barcode.tec-it.com/barcode.ashx?data=" . $planete["Code-barre"] . "&code=Code128&multiplebarcodes=true&translate-esc=on'/>";
        echo "</div>";
        echo "<p>Référence: " . $planete["Code-barre"] . "</p>";
        echo "</div>";
    }
    ?>

</div>

<!-- Inclure les liens vers vos fichiers JavaScript -->
</body>
</html>
