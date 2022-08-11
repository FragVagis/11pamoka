<?php
if ('GET' === $_SERVER['REQUEST_METHOD']) {

    $color = $_GET['color'] ?? 2;

    if ($color == 2) {
        $bgColor = 'green';
    } else {
        $bgColor = $color;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB mechanika (background edition)</title>
</head>
<body style="background-color: <?=$bgColor?>">
    <h2 class='title'>2 Uzduotis</h2>
    <div class="container">
        <a href="http://localhost/11pamoka/homework2/?color=1" method="get">Spalva</a>
    </div>
</body>
</html>