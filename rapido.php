<?php

$url = "https://paradisepokemon.herokuapp.com/pokemonapi.php/?id=5";

$pokemons = json_decode(file_get_contents($url));
print_r($pokemons);
