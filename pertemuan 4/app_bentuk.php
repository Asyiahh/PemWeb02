<?php
require_once 'lingkaran.php';

/* lingkaran 1 dan 2(object)    */
$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(20);
echo "Jari-jari lingkaran 1 = " . $lingkaran1->jari;
echo "<br>Nilai PHI = " . Lingkaran::PHI;
echo "<br>Luas lingkaran 1 = " . $lingkaran1->getLuas();
echo "<br>Keliling lingkaran = " . $lingkaran1->getKeliling();
echo "<hr>";
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();

?>