<h3>PHP + FORMULARZ</h3>

<form action="index.php" method="post">
    Pierwsza liczba przedziału:<br />

    <input name="pierwsza" /><br />

    Druga liczba przedziału:<br />

    <input name="druga" /><br /><br />
	
	<input type="checkbox" name="suma" />Suma liczb<br />
	<input type="checkbox" name="iloczyn" />Iloczyn liczb<br />	
	<input type="checkbox" name="kwadraty" />Kwadraty liczb<br />
	<input type="checkbox" name="szesciany" />Sześciany liczb<br />
	<input type="checkbox" name="sumask" />Suma sześcianów i kwadratów<br /><br />
	
	<input type="submit" value="Licz!" name="submit"/>

<?php

error_reporting(E_ALL ^ E_NOTICE);

$a = $_POST["pierwsza"];
$b = $_POST["druga"];
$tablica = [];
for($i = $a; $i <= $b; $i++) {
if($i % 2 !== 0 ) {
$tablica[] = $i;
}
}
echo '<pre>';
print_r($tablica);
echo '</pre>';

/* jezeli masz kilka checkbox to musisz dla kazdego osobnego ifa zrobić i osobno wartość pobierać. 
 * bardzej do czegos takiego jak tu masz nada sie pole select 
 */
if($_POST["suma"]) {
    echo 'suma liczb: ' . array_sum($tablica);
}

$iloczyn = 1;
foreach($tablica as $item) {
    $iloczyn = $iloczyn * $item;
}
if($_POST["iloczyn"]) {
echo '<br> iloczyn: ' . $iloczyn;
}
$kwadraty = 0;
foreach($tablica as $item) {
    $kwadraty += $item ** 2;
}
if($_POST["kwadraty"]) {
echo '<br> kwadraty: ' . $kwadraty;
}
$szeciany = 0;
foreach($tablica as $item) {
    $szeciany += $item ** 3;
}
if($_POST["szesciany"]) {
echo '<br> szeciany: ' . $szeciany;
}
$wynik = $szeciany + $kwadraty;
if($_POST["sumask"]) {
echo '<br> suma szescianow i kwadratow: '. $wynik;
}
?>
