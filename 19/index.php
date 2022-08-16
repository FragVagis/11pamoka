<?php

// echo 'Welcome';

define('INSTALL', '/11pamoka/19/');

router();


// Kuriami puslapiai kitaip URL
function router() {
    echo '<pre>';

    $url = $_SERVER['REQUEST_URI'];

    $url = str_replace(INSTALL, '', $url);

    $url = explode('/', $url);

    // print_r($url);



    if($url[0] == 'add-money') {
        require __DIR__ . '/inc/add.php';
    } 
    else if (count($url) == 2 && $url[0] == 'remove-money') {
        require __DIR__ . '/inc/rem.php';
    }
    else {
        echo '<h1>404</1>';
    }

}
?>