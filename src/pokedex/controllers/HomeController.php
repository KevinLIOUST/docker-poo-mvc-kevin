<?php
// class HomeController pour récupérer les données à partir de la class PokemonModel, puis on lui donne les données à la vue home.php pour que home.php puisse afficher les données correspondantes
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

        // On donne les données à la vue home.php en appelant la vue home.php
        require_once __DIR__ . "/../views/home.php";

        // return 'Pokemon par exemple 25 : Pikachu';
    }
}
?>