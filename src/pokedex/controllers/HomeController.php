<?php
class HomeController
{
    public function index()
    {
        // On va chercher le modèle
        require_once __DIR__ . "/../models/PokemonModel.php";

        // On récupère tous les Pokémon avec la méthode getAll()
        $pokemonModel = new PokemonModel();
        $tousLesPokemons = $pokemonModel->getAll();

        // var_dump($tousLesPokemons);

        $id = $pokemonModel->getById(3);
        var_dump($id);

        // On appelle la vue home
        require_once __DIR__ . "/../views/home.php";
        return 'Pokemon par exemple 25 : Pikachu';
    }
}
?>