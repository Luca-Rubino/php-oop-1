<?php

include __DIR__ . '/src/models/movie.php';

$mConfidenza = new Movie ( "Confidenza", "Drammatico", "Confidenza-locandina" , "7/10");

$mInsideOut2 = new Movie ( "INSIDE OUT 2", "Animazione", "/src/img/INSIDE_OUT 2-locandina.jpg" , "8/10");

$mAnimaliRandagi = new Movie ( "ANIMALI RANDAGI", "Drammatico", "/src/img/Animali_Randagi-locandina.jpg" , "7/10");

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
    <h1>hi!</h1>
    <script src="./js/script.js"></script>
</body>
</html>