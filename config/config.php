<?php

function resourceList($endpoint, $offset = null, $limit = null)
{
    $baseUrl = "https://pokeapi.co/api/v2/";

    $url = $baseUrl . $endpoint . '/?limit=' . $limit . '&offset=' . $offset;

    return json_decode(file_get_contents($url));
}

function pokemon($id) {
    $url = "https://pokeapi.co/api/v2/pokemon/" . $id;
    $pokemon = json_decode(file_get_contents($url));

    $pokemonInfo = new stdClass();
    $pokemonInfo->name = $pokemon->name;
    $pokemonInfo->img = $pokemon->sprites->front_default;

    return $pokemonInfo;
}

?>