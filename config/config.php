<?php

function pokemons()
{
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

    return $pokemonInfo;
}

function pokemon($pokeNumber)
{
    $baseUrl = "http://localhost:8000/api/pokemon.php/";

    $url = $baseUrl . '?id=' . $pokeNumber;

    return json_decode(file_get_contents($url));
}