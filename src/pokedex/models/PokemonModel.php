<?php
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

        foreach ($fichierDecode as $pokemonGeneral) {
            foreach ($pokemonGeneral as $key => $value) {
                if ($key == "id" && $value == $id) {
                    return $pokemonGeneral;
                }
            }
        }
    }
}
?>