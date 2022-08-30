<div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-3 p-5 m-5 justify-content-center">
        <?php

        $pokemons = pokemons();
        echo print_r($pokemons);
        exit();

        foreach ($pokemons as $key => $pokemon) { ?>
            <div class='col my-2'>
                <div class='card border-1'>
                    <img src='<?= $pokemon['img'] ?>' class='img-fluid card-img-top' alt=''>
                    <div class='card-body text-center p-3'>
                        <p class='card-text'>#<?= $key ?></p>
                        <p class='card-text'><?= $pokemon['name'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>