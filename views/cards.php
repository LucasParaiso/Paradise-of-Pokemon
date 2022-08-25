<div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-3 p-5 m-5 justify-content-center">
        <?php

        $offset = (isset($_GET['offset']) ? $_GET['offset'] * 15 : 0);
        $pokemons = resourceList('pokemon', $offset, '15');

        foreach ($pokemons->results as $pokemon) {
            $pokemonDetail = json_decode(file_get_contents($pokemon->url));

            echo "
                <div class='col my-2'>
                    <div class='card border-1'>
                        <img src='".$pokemonDetail->sprites->front_default."' class='card-img-top' alt=".ucfirst($pokemon->name).">
                        <div class='card-body text-center p-3'>
                            <p class='card-text'>".ucfirst($pokemon->name)."</p>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>
</div>