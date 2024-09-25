<?php

// soal 1
$hello = "Hello World!";
$a_number = 4;
$anotherNumber = 8.9;
$bool = true;

// soal 2
echo "<h1>Variabel</h1></br>";
$angka = 99;
echo "Ini adalah angka = $angka </br>";
$angka_2 = $angka + 1;
echo "Ini adalah hasilnya = $angka_2 </br>";

echo "</br>";

// soal 3
$addition = 2 + 4;
$subtraction = 6 - 2;
$multiplication = 5 * 3;
$division = 15 / 3;
$modulus = 5 % 2;
echo "Penambahan: 2 + 4 = $addition </br>";
echo "Pengurangan: 6 - 2 = $subtraction </br>";
echo "Perkalian: 5 * 3 = $multiplication </br>";
echo "Pembagian: 15 / 3 = $division </br>";
echo "Pembagian sisa: 5 % 2 = $modulus";

echo "</br>";
echo "</br>";

// soal 4
$x = 4;
$x += 3;
echo "Hasil dari operasi tersebut adalah = $x";
echo "</br>";
$x1 = 4;
$x1 -= 3;
echo "Hasil dari operasi tersebut adalah = $x1";
echo "</br>";
$x2 = 4;
$x2 *= 3;
echo "Hasil dari operasi tersebut adalah = $x2";
echo "</br>";
$x3 = 4;
$x3 /= 3;
echo "Hasil dari operasi tersebut adalah = $x3";
echo "</br>";
$x4 = 4;
$x4 %= 3;
echo "Hasil dari operasi tersebut adalah = $x4";
echo "</br>";
$x5 = 4;
$x5 .= 3;
echo "Hasil dari operasi tersebut adalah = $x5";

echo "</br>";
echo "</br>";

// soal 5
$my_name = "someguy";
// $my_name = "anotherguy";
if ($my_name == "someguy") {
    echo "Your name is someguy!</br>";
}
echo "Welcome to my homepage!";

echo "</br>";
echo "</br>";

// soal 6
$destination = "Amsterdam";
// $destination = "Tokyo";
echo "Traveling to $destination</br>";
switch ($destination){
case "Las Vegas":
echo "Bring an extra $500";
break;
case "Amsterdam":
echo "Bring an open mind";
break;
case "Egypt":
echo "Bring 15 bottles of SPF 50 Sunscreen";
break;
case "Tokyo":
echo "Bring lots of money";
break;
case "Caribbean Islands":
echo "Bring a swimsuit";
break;
}

echo "</br>";
echo "</br>";

// soal 7
$brush_price = 5;
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
for ( $counter = 10; $counter <= 100; $counter += 5) {
echo "<tr><td>";
echo $counter;
echo "</td><td>";
echo $brush_price * $counter;
echo "</td></tr>";
}
echo "</table>";

echo "</br>";
echo "</br>";

$brush_price = 5;
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
$counter = 10;
while ( $counter <= 100) {
echo "<tr><td>";
echo $counter;
echo "</td><td>";
echo $brush_price * $counter;
echo "</td></tr>";
$counter += 5;
}
echo "</table>";

echo "</br>";
echo "</br>";

$brush_price = 5;
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
$counter = 10;
do{
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
    $counter += 5;
}
while ( $counter <= 100);
echo "</table>";