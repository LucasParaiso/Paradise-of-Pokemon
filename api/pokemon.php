<?php

if (isset($_GET['id'])) {
    $pokeNumber = $_GET['id'];
    $url = 'https://pokeapi.co/api/v2/pokemon/' . $pokeNumber;

    $pokemonInfo = new stdClass();
    $pokemonInfo->error = true;
    $pokemonInfo->id = null;
    $pokemonInfo->name = null;
    $pokemonInfo->img = null;

    if ($pokeNumber <= 150) {
        $pokemon = json_decode(file_get_contents($url));

        $pokeName = $pokemon->name;
        $pokeImage = 'https://img.pokemondb.net/artwork/large/' . $pokeName . '.jpg';

        $pokemonInfo->error = false;
        $pokemonInfo->id = $pokeNumber;
        $pokemonInfo->name = $pokeName;
        $pokemonInfo->img = $pokeImage;
    }
} else {
    $url = 'https://pokeapi.co/api/v2/pokemon?limit=150';
    $pokemonInfo = new stdClass();

    if ($conteudo = file_get_contents($url)) {
        $pokemons = json_decode($conteudo);

        foreach ($pokemons->results as $key => $pokemon) {
            $pokeNumber = $key + 1;
            $pokeName = $pokemon->name;
            $pokeImage = 'https://img.pokemondb.net/artwork/large/' . $pokeName . '.jpg';

            $pokemonInfo->$pokeNumber = [
                'name' => $pokeName,
                'img' => $pokeImage
            ];
        }
    }
}

echo json_encode($pokemonInfo);