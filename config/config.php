<?php

function pokemons()
{
    $url = "https://" . $_SERVER['SERVER_NAME'] . "/api/pokemon.php/";

    return json_decode(file_get_contents($url));
}

function pokemon($pokeNumber)
{
    $baseUrl = "https://" . $_SERVER['SERVER_NAME'] . "/api/pokemon.php/";

    $url = $baseUrl . '?id=' . $pokeNumber;

    return json_decode(file_get_contents($url));
}
