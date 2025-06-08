<?php

$nama_lengkap = "siti asyiah";
$nama_panggilan = "ciaa";
$umur = 15;
$tb = 142.5;

echo $nama_lengkap;
echo "<br>nama saya $nama_lengkap"." "."bisa dipanggil $nama_panggilan"." "."dan saya berumur $umur"." "."tahun dan tinggi badan saya $tb"." "."cm";

echo "<br /><br />";

//variable system
echo 'Dokumen Root'.$_SERVER["DOCUMENT_ROOT"];
echo "<br /><br />";

//variable constant
define('PHI', 3.14);
$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari-jari {$r}cm memiliki luas {$luas}";

?>