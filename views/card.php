<h1 class="m-5 mb-0">#<?= $_POST['pokemonId']?> pokemon in pokedex:</h1>

<div class="container text-center">
    <div class="row row-cols-1 row-cols-sm-3 p-5 m-5 mt-0   justify-content-center">
        <?php
        $pokemon = pokemon($_POST['pokemonId']);
        ?>
        <div class='col my-2'>
            <div class='card border-1'>
                <img src='<?= $pokemon->img ?>' class='card-img-top' alt='<?= $pokemon->name ?>'>
                <div class='card-body text-center p-3'>
                    <p class='card-text'><?= $pokemon->name ?></p>
                </div>
            </div>
        </div>
    </div>
</div>