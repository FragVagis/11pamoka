<?php
if ('GET' === $_SERVER['REQUEST_METHOD']) {

    $color = $_GET['color'] ?? 2;

    if ($color == 1) {
        $bgColor = 'red';
    } else {
        $bgColor = 'black';
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
    <h2 class='title'>1 Uzduotis</h2>
    <div>
        <a href="http://localhost/11pamoka/homework/" class="link">Link Black</a>
        <a href="http://localhost/11pamoka/homework/?color=1" class="link" method='get'>Link Red</a>
    </div>
    
</body>

</html>