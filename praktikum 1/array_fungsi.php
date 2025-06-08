<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Mengurutkan elemen-elemen dalam array -->
    <?php
    $ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];
    echo '<ol>';
    foreach ($ar_buah as $k => $v) {
        echo '<li>' . $k . ' - ' . $v . '</li>';
    }
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach ($ar_buah as $k => $v) {
        echo '<li>' . $k . ' - ' . $v . '</li>';
    }
    echo '</ol>';
    ?>

    <!-- Menghapus elemen terakhir dari sebuah array -->
    <?php
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_pop($tims);
    foreach ($tims as $person) {
        echo $person . '<br/>';
    }
    ?>

    <!-- Menambahkan elemen baru ke akhir array dan mengembalikan jumlah total elemen dalam array -->
    <?php
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_push($tims, "wati");
    foreach ($tims as $person) {
        echo $person . '<br/>';
    }
    ?>

    <!-- Menghapus elemen pertama dari array -->
    <?php
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_shift($tims);
    foreach ($tims as $person) {
        echo $person . '<br/>';
    }
    ?>
    
    <!-- Menambahkan elemen ke awal array -->
     <?php
     $tims = ["erwin", "heru", "ali", "zaki"];
     array_unshift($tims, "joko", "wati");
     foreach ($tims as $person) {
        echo $person . ' ';
    }
    ?>

</body>

</html>