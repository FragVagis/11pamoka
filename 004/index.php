<?php

echo '<pre>';

$mas = ['balta', 9 => 'juoda', 'raudona'];

$mas['super'] = 'Super Kate';

$mas[] = 'Kate';

$mas[7] = 'Sunius';

$mas['0.87'] = 'Dramblys';

$mas[] = 'Kate';



print_r($mas);

$colors = ['red', 'green', 'blue', 'yellow'];

foreach($colors as $index => $value) {
    echo 'Indeksas: ' . $index . ' Reiksme: ' . $value . '<br>';
}