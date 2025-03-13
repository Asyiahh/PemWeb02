<?php
include './top.php';
include './menu.php';
?>

<!-- Page content wrapper -->
<div id="page-content-wrapper">
    <?php include './navbar.php'; ?>

    <!-- Hero Section (Header Utama) -->
    <div class="container-fluid text-white d-flex align-items-center justify-content-center" style="
        background: linear-gradient(135deg, #e8d9ed, lightpink, white);
        min-height: 80vh;
        text-align: center;">
        
        <div>
            <h1 class="display-2 fw-bold animate_animated animate_fadeInDown">Selamat Datang di Dunia Scrapbook Ciaaw!</h1>
            <p class="lead animate_animated animatefadeInUp animate_delay-1s">Setiap halaman menyimpan cerita, kenangan, dan cinta.</p>
            <a href="koleksi.php" class="btn btn-light btn-lg mt-4 animate_animated animatefadeInUp animate_delay-2s">Jelajahi Ceritaku</a>
        </div>
    </div>

    <!-- Tentang Saya -->
    <div id="about" class="container my-5">
        <h2 class="text-center mb-4 fw-bold">Tentang Saya</h2>
        <p class="text-center fs-6">
            Halo! Saya seorang pecinta kenangan yang mengekspresikan momen berharga dalam bentuk scrapbook.  
            Setiap halaman adalah perjalanan waktu yang membawaku kembali ke saat-saat paling berharga.
        </p>
        <p class="text-center fs-6">
            Melalui web ini, saya ingin berbagi cerita, kreativitas, dan inspirasi yang tertuang dalam karya-karya scrapbook saya.
        </p>
    </div>

    <!-- Filosofi Scrapbook -->
    <div class="container-fluid py-5" style="background: #f8f9fa;">
        <div class="container text-center">
            <h2 class="mb-4 fw-bold">Filosofi di Balik Scrapbook</h2>
            <div class="row">
                <div class="col-md-4 mb-4" >
                    <h3 class="text-primary">Kenangan Abadi</h3>
                    <p>Mengabadikan momen berharga agar tidak terlupakan sepanjang masa.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h3 class="text-primary">Ekspresi Diri</h3>
                    <p>Setiap halaman adalah ruang untuk mengekspresikan perasaan dan cerita.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h3 class="text-primary">Kreativitas Tanpa Batas</h3>
                    <p>Scrapbook membuka peluang eksplorasi artistik tanpa batas.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; <?php echo date('Y'); ?> Koleksi Scrapbook Pribadi.</p>
    </footer>

</div>

<?php include './bottom.php'; ?>