<?php
require './dbkoneksi.php';

if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan_id = $_POST['kelurahan_id'];
    


    try {
        $sql = "INSERT INTO Pasien (nama, kode, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nama, $kode, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan_id]);

        header("Location: list-pasien.php");
    } catch (\Throwable $e) {
        echo "Error while insert data pasien<br>";
        echo $e;
    }
}
