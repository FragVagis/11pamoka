<h1>Funkcijos</h1>

<?php

echo '<pre>';

echo '<br>-------1------<br>';
// 1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function echoText($text = 'Meow') {
    return '<h1>'. $text .'</h1>';
}

$text2 = echoText('Meow');
echo $text2;

echo '<br>-------2------<br>';
// 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;




echo '<br>-------3------<br>';
// 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();

$str = md5(time());
echo "\n\n\n\n";
echo $str;

$n = preg_replace_callback('/[0-9]+/', function($m){
    echo "\n";
    print_r($m);
    echo"\n";
    return '<h1 style="display: inline">' .$m[0]. '</h1>';
},$str);

echo "\n\n";
echo $n;

echo '<br>-------4------<br>';
// 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

function sveikiSkaiciai(int $integer) {
    $sveikiSkaiciai = [];
}

echo '<br>-------5------<br>';
// 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.


$Array = [];
foreach(range(1, 100) as $_) {
    $Array[] = rand(33, 77);
}



