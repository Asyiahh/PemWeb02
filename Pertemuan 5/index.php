<?php
$title = "Home - Yulfa";

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
            <!-- Welcome Section dengan Gradasi dan Tengah -->
            <div class="d-flex justify-content-center align-items-center" style="background: linear-gradient(to right, #4e73df,rgb(217, 154, 236)); color: white; height: 100vh;">
                <div class="text-center">
                    <h1 class="display-4 font-weight-bold">👋 Welcome to My Web</h1>
                    <p class="lead mb-0">Sistem Informasi Data | Yulfa Nuha Pratini | 0110124204</p>
                </div>
            </div>


            <!-- Profil Section dengan Flexbox -->
            <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <img src="./img/riki.jpeg" class="img-fluid rounded-circle" alt="Profil" style="max-width: 200px;">
                    </div>
                    <div class="col-md-8 mb-4">
                        <h3 class="font-weight-bold">Yulfa</h3>
                        <p class="text-muted">Web Developer | Selamat Datang Di tugas PemWeb 2 saya.</p>
                        <a href="profile.php" class="btn btn-outline-primary btn-sm">Lihat Profil</a>
                    </div>
                </div>
            </div>

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