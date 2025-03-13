<?php
function salam($nama = "Nurul Fikri")
{
    echo "Assalamualaikum Apa Kabar Teman! " . $nama;
}
?>

<h1>Selamat Datang di STT-NF</h1>
<p>
    <?php
    salam("Dewi Silva");
    echo "<br>";
    salam();
    ?>
</p>