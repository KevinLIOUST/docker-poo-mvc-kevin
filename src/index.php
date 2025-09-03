<?php

// Pas du reader Location mais du require (inclure quelque chose)
require_once __DIR__ . "/router.php";


// Étape 1 : Charger le fichier JSON
$jsonContent = file_get_contents('pokedex/data/pokemons.json');

// Étape 2 : Décoder le JSON en tableau associatif
$data = json_decode($jsonContent, true); // true pour un tableau, false pour un objet

// Étape 3 : Manipuler les données
// if ($data) {
//     foreach ($data as $key => $value) {
//         echo "Clé : $key, Valeur : $value\n";
//     }
// } else {
//     echo "Erreur : Impossible de décoder le fichier JSON.";
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon MVC</title>

    <!-- Lien vers Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Lien vers les icônes Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">

    <!-- Lien vers le fichier pour designer le site web -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1 class="text-center">Pokédex</h1>
</body>

</html>