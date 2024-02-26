<?php

$text = $_GET['text'];

$censured = $_GET['censured'];

$text_length = strlen($text);

$text_censured = str_replace($censured, '***', $text);

$text_censured_length = strlen($text_censured);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>

        <span>testo: <?= $text ?></span>

    </div>

    <div>

        <span>lunghezza: <?= $text_length ?></span>

    </div>

    <div>

        <span>testo censurato: <?= $text_censured ?></span>

    </div>

    <div>

        <span>lunghezza testo censurato: <?= $text_censured_length ?></span>

    </div>

    
</body>
</html>