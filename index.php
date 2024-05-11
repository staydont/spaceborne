<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche Planète</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css'>
    <style>
        /* Ajoutez un style pour espacer les boutons */
        .container form button {
            margin-right: 10px; /* Ajout de marge à droite */
        }
    </style>
</head>
<body>
    <div class="container" id="large-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
        <h1 class="main-title">Recherche de Planètes <span class="thin"></span></h1>
        <form action="rechercher_produit.php" method="POST">
            <input type="text" name="codebarre" placeholder="Entrez la référence">
            <button type="submit">Rechercher</button>
            <!-- Utilisez un lien pour rediriger vers la page code_barre.php -->
            <a href="code_barre.php"><button type="button">Code-Barres</button></a>
        </form>
    </div>

    <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
    <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
    <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>
    <script  src="./app.js"></script>
    <script  src="./codebarres.js"></script>
</body>
</html>
