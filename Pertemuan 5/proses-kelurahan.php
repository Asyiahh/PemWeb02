<?php
require './dbkoneksi.php';

if (isset($_POST['submit'])) {
    // tangkap data dari form
    if ($_POST['submit']) {
    $nama = $_POST['nama'];
    $kec_id = $_POST['kec_id']; 
}
    switch ($_POST['submit']) {
        case 'Simpan':
            // Proses insert ke database
            try {
                $sql = "INSERT INTO Kelurahan (nama, kec_id) VALUES (?, ?)";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$nama, $kec_id]);

                // Redirect ke halaman list
                header("Location: list-kelurahan.php");
            } catch (\Throwable $e) {
                echo "Error while insert data kelurahan<br>";
                echo $e;
            }
            break;

        case 'Ubah':
            // Proses Update data
            $id = $_POST['id'];
            try {
                $sql = "UPDATE kelurahan SET nama=?, kec_id=? WHERE id=?";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$nama, $kec_id, $id]);
            } catch (\Throwable $e) {
                echo "Error while update data kelurahan<br>";
                echo $e;
            }
            break;

        default:
        $id = $_POST['id'];
        try {
            $sql = "DELETE FROM kelurahan WHERE id=?";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$id]);
        } catch (\Throwable $e) {
            echo "Error while delete data kelurahan<br>";
            echo $e;
        }
            break;
    }
}
