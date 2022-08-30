<?php

function pokemons()
{
    $url = "http://localhost:8000/api/pokemon.php/";

    return json_decode(file_get_contents($url));
}

function pokemon($pokeNumber)
{
    $baseUrl = "http://localhost:8000/api/pokemon.php/";

    $url = $baseUrl . '?id=' . $pokeNumber;

    return json_decode(file_get_contents($url));
}