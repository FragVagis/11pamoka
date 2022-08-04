<h1>Labas</h1>

<?php

$r = rand(1,6);

echo "<h$r>$r<h$r>";
/*
$_1 = rand(0,2);
$_2 = rand(0,2);
$_3 = rand(0,2);
$_4 = rand(0,2);

$two = 0;

if ($_1 == 2) {
    $two++;
} 
if ($_2 == 2) {$two++;}
if ($_3 == 2) {$two++;}
if ($_4 == 2) {$two++;}

$suma = $_1 + $_2 + $_3 + $_4;

$one = $suma - (2 * $two);

$zero = 4 - $one -$two;

echo "$_1 $_2 $_3 $_4 ---- $zero:$one:0$two";

echo '<br>';

var_dump(false == null);

echo '<br>';


$drambliai = 3;
$raganosiai = 2;
$begemotai = 6;
if ($begemotai > $raganosiai && $begemotai > $drambliai) {
    echo 'begemotu yra daugiausiai';
}

// 6 > 2 && 6 > 3
// true && true
//true
echo '<br>';echo '<br>';

$a = true ? 'Jo' : 'Gal';

echo $a;

echo '<br>';echo '<br>';

//$i = null;
//var_dump(isset($i));
echo '<br>';


// $i=1
// isset($i); // gra=ina TRUE
// $i=null;
// isset($i); // gra=ina FALSE

//$vienas = 77

$vienas = $vienas ?? 8;

echo '<br>';

var_dump($vienas);

echo '<br>';



$p = ['S', 'M', 'L', 'XL'][rand(0,3)];

echo 'Senukas atnese: ' . $p;

//if ($p == 'S'){
//    echo '<br>Tikrinam S';
//}
//if ($p == 'S' || $p == 'M'){
//    echo '<br>Tikrinam M';
//}
//if ($p == 'S' || $p == 'M' || $p == 'L'){
//    echo '<br>Tikrinam L';
//}
//if ($p == 'S' || $p == 'M' || $p == 'L' || $p == 'XL'){
//    echo '<br>Tikrinam XL';
//}

switch($p) {
    case 'S': echo '<br>Tikrinam S';
    case 'M': echo '<br>Tikrinam M';
    case 'L': echo '<br>Tikrinam L';
    case 'XL': echo '<br>Tikrinam XL';
}

echo '<br>';

echo sprintf('%02d:%02d:%02d', 4,32,7);

echo '<br>';
*/

echo '<br>-------1------<br>';

$vardas = 'Dmitrij';
$pavarde = 'Safarevic';
$gimimoMetai = 2002;
$sieMetai = 2022;
$metai = $sieMetai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $metai metai(ų)";


/*echo '<br>-------2------<br>';


$randSkaicius = rand(0,4);
$randSkaicius1 = rand(0,4);

if ($randSkaicius > $randSkaicius1) echo $randSkaicius / $randSkaicius1; 
else echo $randSkaicius1 / $randSkaicius;
*/

/*echo '<br>-------3------<br>';

$a = rand(0,25);
$b = rand(0,25);
$c = rand(0,25);

if( $b>$a && $a>$c || $c>$a && $a>$b )
{
echo ("$a is middle number");
}
//Checking for b is middle number or not
if( $a>$b && $b>$c || $c>$b && $b>$a )
{
echo("$b is middle number");
}
//Checking for c is middle number or not
if( $a>$c && $c>$b || $b>$c && $c>$a )
{
echo("$c is middle number");
}
echo '<br>';
echo "<br>A=$a<br>";
echo "<br>B=$b<br>";
echo "<br>C=$c<br>";
*/
echo '<br>-------4------<br>';

$a1 = rand(1,10);
$b1 = rand(1,10);
$c1 = rand(1,10);

if ($a1 + $b1 > $c1 && $b1 + $c1 > $a1 && $a1 + $c1 > $b1) {
    echo 'veikia';
    } else {
        echo 'neveikia';
    }

    echo '<br>';
    echo "<br>A=$a1<br>";
    echo "<br>B=$b1<br>";
    echo "<br>C=$c1<br>";
    
    echo '<br>-------5------<br>';
    
    $a2 = rand(0,2);
    $b2 = rand(0,2);
    $c2 = rand(0,2);
    $d2 = rand(0,2);




    echo '<br>-------6------<br>';

    $a3 = rand(1,6);
    if ($a3 == 3) {
        "<h2>$a3<h2>";
    }

    echo $a3;