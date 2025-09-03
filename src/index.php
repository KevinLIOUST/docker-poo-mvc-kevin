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