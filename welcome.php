<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <h3>Selamat Belajar webku</h3>
    <?php
    // komentar satu baris //
    $_nama = "Budi Darmawan";
    $_umur = 20;
    $_kampus = "STT TERPADU NURUL FIKRI";
    $_berat = 60.5;
    $_prodi = "Sistem Informasi";
    echo "Nama Saya $_nama, umur saya $_umur tahun";
    echo "<br>";

    ?>
    <hr />
    <?php
    echo "Berat badan saya $_berat kg";
    echo "<br>";
    echo "Saya kuliah di prodi $_prodi";
    ?>
    <br>Saya kuliah di kampus <strong><?= $_kampus ?> </strong> <br>
</body>

</html>