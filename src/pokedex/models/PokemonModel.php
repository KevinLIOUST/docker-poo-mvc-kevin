<?php
// class PokemonModel pour pouvoir rechercher et récupérer les données sur les Pokémon
class PokemonModel
{

    // CA MARCHE !!!!
    public function getAll()
    {
        // il va falloir chercher dans le json
        // ici le file get content
        $result = file_get_contents(__DIR__ . "/../data/pokemons.json");
        $fichierDecode = json_decode($result, true);

        // Ca va retourner un array
        return $fichierDecode;
    }

    // CA MARCHE !!!!
    public function getById($id)
    {
        $result = file_get_contents(__DIR__ . "/../data/pokemons.json");
        $fichierDecode = json_decode($result, true);

        foreach ($fichierDecode as $pokemon) {
            if ($pokemon['id'] == $id) {
                return $pokemon;
            }
        }
    }
}
?>