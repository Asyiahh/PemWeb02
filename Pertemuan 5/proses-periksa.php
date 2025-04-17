<?php
require './dbkoneksi.php';

if (isset($_POST['submit'])) {
    $pasien_id = $_POST['pasien_id'];
    $tanggal = $_POST['tanggal'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $tensi = $_POST['tensi'];
    $keterangan = $_POST['keterangan'];

    // Query untuk insert data pemeriksaan
    $sql = "INSERT INTO periksa (pasien_id, tanggal, berat, tinggi, tensi, keterangan) 
            VALUES (:pasien_id, :tanggal, :berat, :tinggi, :tensi, :keterangan)";
    
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':pasien_id', $pasien_id);
    $stmt->bindParam(':tanggal', $tanggal);
    $stmt->bindParam(':berat', $berat);
    $stmt->bindParam(':tinggi', $tinggi);
    $stmt->bindParam(':tensi', $tensi);
    $stmt->bindParam(':keterangan', $keterangan);

    // Execute query
    if ($stmt->execute()) {
        // Redirect ke halaman data-periksa.php setelah berhasil menyimpan data
        header("Location: data-periksa.php");
        exit();  // Pastikan eksekusi berhenti setelah redirect
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>
