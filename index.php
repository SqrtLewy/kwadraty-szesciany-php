<?php

$a = 1;
$b = 10;

$tablica = [];

for($i = $a; $i <= $b; $i++) {

if($i % 2 !== 0 ) {
$tablica[] = $i;
}

}

echo '<pre>';
print_r($tablica);
echo '</pre>';

echo 'suma liczb: ' . array_sum($tablica);

$iloczyn = 1;

foreach($tablica as $item) {
    $iloczyn = $iloczyn * $item;
}

echo '<br> iloczyn: ' . $iloczyn;

$kwadraty = 0;

foreach($tablica as $item) {
    $kwadraty += $item ** 2;
}

echo '<br> kwadraty: ' . $kwadraty;

$szeciany = 0;

foreach($tablica as $item) {
    $szeciany += $item ** 3;
}

echo '<br> szeciany: ' . $szeciany;

$wynik = $szeciany + $kwadraty;
echo '<br> suma szescianow i kwadratow: '. $wynik;
?>