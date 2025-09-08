<?php

namespace controllers;

use models\PokemonModel;
class DetailsController
{
    public function show($id)
    {
        // On va chercher le modèle
        require_once __DIR__ . "/../models/PokemonModel.php";

        // On récupère (préparer) les données pour les donner à la vue details.php
        $pokemonModel = new PokemonModel();
        $pokemonAvecId = $pokemonModel->getById($id);

        // On donne les données préparées à details.php
        require_once __DIR__ . "/../views/details.php";
    }
}
?>