<?php

$text = $_GET['text'];

$text_length = strlen($text)


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

    
</body>
</html>