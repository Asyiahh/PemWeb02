<?php
include './top.php';
include './menu.php';
?>

<!-- Tambahkan Font Awesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Page content wrapper -->
<div id="page-content-wrapper">
    <?php include './navbar.php'; ?>

    <!-- Background Gradien -->
    <div class="container-fluid d-flex align-items-center justify-content-center" style="
        background: linear-gradient(135deg, #e8d9ed, lightpink, white);
        min-height: 100vh;
        padding: 50px 0;">

        <div class="container text-center">
            <h1 class="text-white display-4 fw-bold animate_animated animate_fadeInDown">Hubungi Saya</h1>
            <p class="text-white lead animate_animated animatefadeInUp animate_delay-1s">Mari terhubung dan berbagi cerita!</p>

            <?php
                // Data kontak dan media sosial
                $nama = "SITI ASYIAH";
                $email = "asyiaahh123@gmail.com";
                $telepon = "+62 856-9754-5750";
                $alamat = "Jagakarsa, Jakarta Selatan";
                $media_sosial = [
                    "Instagram" => ["link" => "https://www.instagram.com/6110jpeg", "icon" => "fab fa-instagram", "color" => "#E4405F"],
                    "GitHub" => ["link" => "https://github.com/", "icon" => "fab fa-github", "color" => "#333"],
                    "Twitter" => ["link" => "", "icon" => "fab fa-twitter", "color" => "#1DA1F2"],
                    "LinkedIn" => ["link" => "", "icon" => "fab fa-linkedin", "color" => "#0077B5"]
                ];
            ?>

            <!-- Kartu Informasi Kontak -->
            <div class="card mx-auto mt-5 shadow-lg" style="max-width: 500px; background: rgba(255, 255, 255, 0.95); border-radius: 20px;">
                <div class="card-body">
                    <h2 class="card-title text-dark fw-bold"><?php echo $nama; ?></h2>
                    <p class="text-muted"><i class="fas fa-envelope"></i> <?php echo $email; ?></p>
                    <p class="text-muted"><i class="fas fa-phone"></i> <?php echo $telepon; ?></p>
                    <p class="text-muted"><i class="fas fa-map-marker-alt"></i> <?php echo $alamat; ?></p>

                    <hr>

                    <!-- Ikon Media Sosial -->
                    <h5 class="text-dark mb-3">Temukan Saya di:</h5>
                    <div class="d-flex justify-content-center gap-4">
                        <?php foreach ($media_sosial as $platform => $data) : ?>
                            <a href="<?php echo $data['link']; ?>" target="_blank" style="font-size: 32px; color: <?php echo $data['color']; ?>; transition: transform 0.3s;"
                               onmouseover="this.style.transform='scale(1.3)';" onmouseout="this.style.transform='scale(1)';">
                                <i class="<?php echo $data['icon']; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Formulir Kontak Sederhana -->
            <div class="mt-5 text-white">
                <h3 class="fw-bold">Kirimkan Pesan</h3>
                <form action="proses_kontak.php" method="POST" style="max-width: 600px; margin: auto;">
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="pesan" class="form-control" rows="4" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-light btn-lg fw-bold">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include './bottom.php'; ?>