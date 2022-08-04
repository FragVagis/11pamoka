<?php

echo '<pre>';

/*mas = ['balta', 9 => 'juoda', 'raudona'];

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
*/

//print_r($colors);

$colors = [
    ['red', 'green', 'blue', 'yellow'],
    'labas',
    ['dramblys', 'bebras', 'briedis', 'barsukas', 'traktorius'],
    [77, 12]
];

echo $colors[1][0];

foreach ($colors as $stalcius) {
    if (is_array($stalcius)) {
        foreach ($stalcius as $daiktas) {
            echo "$daiktas\n";
        }
    } else {
        echo "$stalcius\n";
    }
}

for($i = 0; $i < 3; $i++) {

    $masyvas = [];
    for($b = 0; $b < 3; $b++) {
        $masyvas[] = ++$count;
    }
    $masSyvas[] = $masyvas;
}

print_r($masSyvas);