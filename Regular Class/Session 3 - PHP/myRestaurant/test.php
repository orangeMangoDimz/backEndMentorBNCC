<?php
$nama = "Dimas";
$x = 2;
$y = 3;
// echo $nama;
// echo "<br>";
// echo $x + $y;
echo $nama . "<br>" . $x . "<br>";

define("phi", 3.14);
echo phi . "<br>";

var_dump($nama);
echo "<br>";

$arr = ["dimas", 20 ];
foreach ($arr as $a){
    echo $a;
}
echo $arr[0];
echo $arr[1];
echo "<br>";
$arr = [
    "nama" => "dimas",
    "age" => 20
];
echo $arr["nama"];
echo "<br>";
echo $arr["age"];