LABAS

<?php
echo '<pre>';

// MASYVAI

// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
echo '<br>-------1------<br>';

$Array = range(0, 29);

foreach ($Array as &$value) {
    $value = rand(5, 25);
}
unset($value);
print_r($Array);


echo '<br>-------------<br>';

// 2. Naudodamiesi 1 uždavinio masyvu:
// 2. a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
echo '<br>-------2A------<br>';

$DaugiauUz10 = 0;
foreach ($Array as $value) {
    if ($value > 10) {
        $DaugiauUz10++;
    }
}
echo $DaugiauUz10;

echo '<br>-------2B------<br>';
// 2. b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;

$maxValueIndex = array_search(max($Array), $Array);
$maxValue = max($Array);
echo "Index: $maxValueIndex, value: $maxValue";


echo '<br>-------2C------<br>';
// 2. c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
$sum = 0;
foreach ($Array as $index => $value) {
 if ($index % 2 === 0 ){
    $sum +=$value; 
 }

}
 echo $sum;

 echo '<br>-------2D------<br>';
 // 2. d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;