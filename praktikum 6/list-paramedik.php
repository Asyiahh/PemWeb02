<?php
require './dbkoneksi.php';

// querry database
$query = $dbh->query("SELECT * FROM kelurahan");

$title = "Daftar Data Kelurahan ";
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
            <h1 class="h3 mb-4 text-gray-800">Halaman list paramedik</h1>

            <?php
            require_once "./dbkoneksi.php";

            // query mengambil data pasien
            $list_pasien = $dbh->query("SELECT * FROM pasien");

            ?>

            <!-- Styling tabel agar lebih rapi -->
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }

                th,
                td {
                    padding: 8px;
                    text-align: left;
                    border: 1px solid #ddd;
                }

                th {
                    background-color: #f2f2f2;
                }
            </style>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Tempat Lahir</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_pasien as $idx => $pasien) { ?>
                        <tr>
                            <td><?= $idx + 1 ?></td>
                            <td><?= $pasien['kode'] ?></td>
                            <td><?= $pasien['nama'] ?></td>
                            <td><?= $pasien['gender'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                            <td><?= $pasien['tmp_lahir'] ?></td>
                            <td>
                                <?php
                                // Menentukan kategori manual berdasarkan data pasien
                                if ($pasien['kode'] == 'P001') {
                                    echo "Dokter";
                                } else {
                                    echo "Perawat"; // Asumsikan selain kode 'P001' adalah perawat
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php
        require_once './template/footer.php';
        ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    <?php
    require_once './template/bottom.php';
    ?>