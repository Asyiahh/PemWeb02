<?php
// Mendefinisikan sebuah array
$list_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

/**
 * Nilai didalam array masing-masing memiliki sebuah kunci yang disebut dengan index
 * 
 * index dimulai daro 0
 */
echo $list_buah[2];
echo "<br>List berisi ".count($list_buah)." buah";

// Mencetak seluruh nilai
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Menambahkan nilai array
array_push($list_buah, "Durian");
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Menghapus nilai array berdasarkan indexnya
unset($list_buah[1]);
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Mengganti nilai array berdasarkan indexnya
$list_buah[0] = "Manggis";
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Mencetal seluruh nilai array beserta indexnya
echo "<ul>";
foreach ($list_buah as $index => $buah) {
    echo "<li>Buah dengan index $index adalah $buah</li>";
}
echo "</ul>";


?>