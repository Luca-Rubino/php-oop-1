<?php

require_once __DIR__ . '/models/movie.php';

$moviesList = [
    new Movie ( "Confidenza", "Drammatico", "http://localhost/php-oop-1/src/img/Confidenza-locandina.jpg" , "7/10"),
    new Movie ( "INSIDE OUT 2", "Animazione", "http://localhost/php-oop-1/src/img/INSIDE_OUT 2-locandina.jpg" , "8/10"),
    new Movie ( "ANIMALI RANDAGI", "Drammatico", "http://localhost/php-oop-1/src/img/Animali_Randagi-locandina.jpg" , "7/10"),
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-oop-1</title>
</head>
<body>
    <h1>Lista film</h1>
    <section>
    <?php foreach ($moviesList as $movieList) { ?>
        <ul>
            <li>
                <h2> <?php echo $movieList -> getTitle() ?> </h2>
                <div>
                    <img src="<?php echo $movieList -> getImgPoster() ?>" alt="<?php echo $movieList -> getTitle() ?>">
                </div>
            </li>
            <li>
                <p>Genere: <?php echo $movieList -> getGenere() ?></p>
                <p>Voto: <?php echo $movieList -> getVote() ?></p>
            </li>
        </ul>
    <?php } ?>
    </section>
</body>
</html>