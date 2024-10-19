<?php

# Inicializar una nueva sesion de cURL; ch = cURL handle

$API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init($API_URL);

// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla.

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* ejecutar la peticion 
y guardamos el resultado
*/

$result = curl_exec($ch);

// Un alternativa seria utilizar file_get_contents
// $result = file_get_contents($API_URL) // si solo es GET a una API
$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <title>La proxima pelicula de Marvel</title>
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>


<main>
    <!-- <pre style="font-size: 12px; overflow: scroll; height: 350px">
        <?php var_dump($data); ?>
    </pre> -->
    <h1>What is the next Marvel movie?</h1>
    <section class="card">
        <img src="<?= $data["poster_url"] ?>" width="300" alt="<?php $data["title"] ?>">
        <h2><?= $data["title"] ?></h2>
        <div class="date_container">
            <p><?= $data["release_date"] ?></p>
            <span><?= $data["days_until"] ?> Days left</span>
        </div>
        <p class="next_movie">The next movie: <b> <?= $data["following_production"]["title"]?></b></p>

    </section>

    <footer>
        <p>Made with ❤️ by John.</p>
    </footer>

    
</main>

<style>

    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    main h1 {
        text-align: center;
    }

    .card {
        width: 300px;
        margin-top: 50px;
    }

    .card h2 {
        font-size: 18px;
    }

    .card p{
        color: #FFFFFF;
    }

    .next_movie {
        font-size: 17px;
    }


    .date_container {
        display: flex;
        justify-content: space-between;
    }


    footer p {
        margin-top: 40px;
        font-size: 12px;
    }



</style>