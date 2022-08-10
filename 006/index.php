<?php

echo '<pre>';

/*$max = [];

foreach(range(1,30) as $_) {
    $mas[] = rand(5,25);
}

print_r($mas);

$max = $mas[0];
$indexes = [0];

foreach($mas as $index => $value) {
    if ($value > $max) {
        $max = $value;
        $indexes= [];
        $indexes[] = $index;
    } else if ($max == $value) {
        $indexes[] = $index;
    }
}

print_r($max);
echo "\n";
print_r($indexes);


$max2 = [];
foreach(range(1,50) as $_) {
    $mas2[] = range('A', 'D')[rand(0,3)];
}
   //print_r($mas2);


function fun(string $s = 'bevardi', array|string $v = 'Bla bla') : string {
    return "$s $v, ka tu? \n";
}

$ss = 'labukas';

$kibiras = fun($ss, 'Jonai');

echo ($kibiras);

$kibiras = fun('Sveikute', 'Teta Zose');

echo ($kibiras);
*/
$moreFun = function($b) {

    $notFun = function($a) {
        print_r('Labukas!'.$a);
    };

    return $notFun($b);

};

$moreFun('aaaavvvss');
//$a = $moreFun();

//$a();


/*
// CallBack'as
$abc = function($str) {
    echo $str;
};

function doPrint($fun, $ka) {
    $fun($ka);
}

doPrint($abc, 'GRYBAS');
*/

/*
function doPrint($fun, $ka) {
    $fun($ka);
}

doPrint(function($str) {
    echo $str;
}
,
'GRYBAS33');
*/

//$burbulas = ' Baravykas';

//$c = doPrint(
//    fn($str) => $str . $burbulas
//    ,
//    'GRYBAS101');
//
//echo $c;

$mas = [5,9,11,0,54,7];

usort($mas, fn($a,$b) => $a%2 || $b);

print_r($mas);
