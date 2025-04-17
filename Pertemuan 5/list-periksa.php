<?php
require './dbkoneksi.php';

// Ambil data pasien dari database
$query_pasien = $dbh->query("SELECT * FROM pasien");

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
            <h1 class="h3 mb-4 text-gray-800">Tambah Pemeriksaan Pasien</h1>

            <!-- Form untuk menambah data pemeriksaan -->
            <form action="proses-periksa.php" method="POST">
                <div class="form-group row">
                    <label for="pasien_id" class="col-4 col-form-label">Pasien</label>
                    <div class="col-8">
                        <select id="pasien_id" name="pasien_id" class="custom-select" required="required">
                            <!-- Ambil data pasien dari database -->
                            <?php
                            $queryPasien = $dbh->query("SELECT * FROM pasien");
                            foreach ($queryPasien as $pasien) :
                            ?>
                                <option value="<?= $pasien['id'] ?>"><?= $pasien['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                    <div class="col-8">
                        <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berat" class="col-4 col-form-label">Berat</label>
                    <div class="col-8">
                        <input id="berat" name="berat" type="number" step="0.1" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi" class="col-4 col-form-label">Tinggi</label>
                    <div class="col-8">
                        <input id="tinggi" name="tinggi" type="number" step="0.1" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tensi" class="col-4 col-form-label">Tensi</label>
                    <div class="col-8">
                        <input id="tensi" name="tensi" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                    <div class="col-8">
                        <textarea id="keterangan" name="keterangan" class="form-control" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dokter" class="col-4 col-form-label">Nama Dokter</label>
                    <div class="col-8">
                        <input id="dokter" name="dokter" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <input name="submit" type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </div>
            </form>



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php require_once './template/footer.php'; ?>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

<?php
require_once './template/bottom.php';
?>