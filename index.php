<?php

include_once __DIR__ . '/models/movie.php';

$LordOfTheRings2 = new Movie('Il Signore degli Anelli - Le due torri', '10$', '16/01/2003', '179min', '8.5');

$Interstellar = new Movie('Interstellar', '15$', '26/10/2014', '169min', '8');

?>

<div class="containe">
    <div id="lordoftherings2">
        <img src="https://pad.mymovies.it/filmclub/2003/01/012/locandina.jpg" alt="">
        <h1>
            <?php
            echo $LordOfTheRings2->name
                ?>
        </h1>
        <h2>
            <?php
            echo $LordOfTheRings2->price
                ?>
        </h2>
        <h2>
            <?php
            echo "Data uscita: $LordOfTheRings2->dataUscita"
                ?>
        </h2>
        <h3>
            <?php
            echo "Durata: $LordOfTheRings2->durata"
                ?>
        </h3>
        <h3>
            <?php
            echo "Voto: $LordOfTheRings2->votoStella"
                ?>
        </h3>
    </div>
    <div id="intestellar">
        <img src="https://edu.inaf.it/wp-content/uploads/2021/02/interstellar-poster.jpg" alt="">
        <h1>
            <?php
            echo $Interstellar->name
                ?>
        </h1>
        <h2>
            <?php
            echo $Interstellar->price
                ?>
        </h2>
        <h2>
            <?php
            echo "Data uscita: $Interstellar->dataUscita"
                ?>
        </h2>
        <h3>
            <?php
            echo "Durata: $Interstellar->durata"
                ?>
        </h3>
        <h3>
            <?php
            echo "Voto: $Interstellar->votoStella"
                ?>
        </h3>
    </div>
</div>
<style>
    .containe {
        display: flex;
        justify-content: space-between;
        width: 1170px;
        height: 100vh;
        margin: 5rem auto;
    }

    img {
        width: 200px;
    }
</style>

<!-- &#9733 -->