<?php
require './dbkoneksi.php';

// Query untuk ambil data pemeriksaan dengan join tabel periksa dan pasien
$query = $dbh->query("
    SELECT periksa.*, pasien.nama AS nama_pasien
    FROM periksa
    JOIN pasien ON periksa.pasien_id = pasien.id
");

require_once './template/top.php';
?>

<!-- Sidebar -->
<?php
require_once './template/sidebar.php';
?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php
        require_once './template/topbar.php';
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Daftar Pemeriksaan Pasien</h1>

            <!-- Card daftar pemeriksaan -->
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Pasien</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Tinggi</th>
                                <th scope="col">Tensi</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $periksa) : ?>
                                <tr>
                                    <td><?= $periksa['tanggal'] ?></td>
                                    <td><?= $periksa['nama_pasien'] ?></td>
                                    <td><?= $periksa['berat'] ?></td>
                                    <td><?= $periksa['tinggi'] ?></td>
                                    <td><?= $periksa['tensi'] ?></td>
                                    <td><?= $periksa['keterangan'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php require_once './template/footer.php'; ?>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

<?php require_once './template/bottom.php'; ?>
