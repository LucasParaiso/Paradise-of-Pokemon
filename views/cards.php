<div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-5 m-0 mt-5 p-0 justify-content-center">
        <?php

        $pokemons = pokemons();

        foreach ($pokemons as $key => $pokemon) { ?>
            <form class='col my-2' method="post" action="pokemon.php">
                <input type="text" name="pokemonId" id="pokemonId" value="<?= $key ?>" hidden>
                <button type="submit" class="border border-0">
                    <div class='card border-1'>
                        <img src='<?= $pokemon->img ?>' class='img-fluid card-img-top' alt=''>
                        <div class='card-body text-center p-3'>
                            <p class='card-text'>#<?= $key ?></p>
                            <p class='card-text'><?= $pokemon->name ?></p>
                        </div>
                    </div>
                </button>
            </form>
        <?php } ?>
    </div>
</div>