<?php
if (isset($_POST['submit'])) {
    $Nama = $_POST['Nama'];
    $matkul = $_POST['matkul'];
    $nilai_UTS = $_POST['nilai_UTS'];
    $nilai_UAS = $_POST['nilai_UAS'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo "<p>Nama : $Nama</p>";
    echo "<p>Mata Kuliah : $matkul</p>";
    echo "<p>Nilai UTS : $nilai_UTS</p>";
    echo "<p>Nilai UAS : $nilai_UAS</p>";
    echo "<p>Nilai Tugas/Praktikum : $nilai_tugas</p>";

    // Status Kelulusan
    $nilai_total = ($nilai_UTS * 0.3) + ($nilai_UAS * 0.35) + ($nilai_tugas * 0.35);

    // Check nilai total
    if ($nilai_total > 55) {
        echo "<h1> Status : Lulus!</h1>";
    } else {
        echo "<p> Status : Tidak Lulus.</p>";
    }

    switch ($nilai_total) {
        case $nilai_total >= 90 && $nilai_total <= 100:
            echo "<p>Grade : A</p>";
            break;
        case $nilai_total >= 80 && $nilai_total < 90:
            echo "<p>Grade : B</p>";
            break;
        case $nilai_total >= 70 && $nilai_total < 80:
            echo "<p>Grade : C</p>";
            break;
        case $nilai_total >= 60 && $nilai_total < 70:
            echo "<p>Grade : D</p>";
            break;
        case $nilai_total >= 55 && $nilai_total < 60:
            echo "<p>Grade : E</p>";
            break;
    }

}
?>
