<?php
include './top.php';
include './menu.php';
?>

<!-- CSS Khusus untuk Tampilan Menarik -->
<style>
    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #A1C4FD, #C2E9FB);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 50px 20px;
    }

    /* Kartu Profil */
    .profil-card {
        max-width: 850px;
        background: #ffffff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        animation: fadeInUp 1s ease;
    }

    /* Foto Profil (Dengan Efek Hover) */
    .profil-img {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .profil-img:hover {
        transform: scale(1.1);
    }

    /* Nama & Profesi */
    .profil-name {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
    }

    .profil-profesi {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 20px;
    }

    /* Informasi Umum */
    .profil-info {
        text-align: left;
        margin-top: 20px;
    }

    .profil-info p {
        margin: 10px 0;
        color: #444;
    }

    /* Hobi (Badge Style) */
    .hobi-badge {
        display: inline-block;
        background: #87CEEB;
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        margin: 5px;
        font-size: 0.9rem;
    }

    /* Animasi Masuk */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsif */
    @media (max-width: 768px) {
        .profil-name {
            font-size: 1.8rem;
        }
        .profil-img {
            width: 150px;
            height: 150px;
        }
    }
</style>

<!-- Page content wrapper -->
<div id="page-content-wrapper">
    <?php include './navbar.php'; ?>

    <div class="hero-section">
        <div class="profil-card">
            <?php
                // Data profil
                $nama = "SITI ASYIAH";
                $profesi = "Web Developer & Designer";
                $umur = 19;
                $alamat = "Jagakarsa, Jakarta Selatan";
                $email = "asyiaahh123@gmail.com";
                $hobi = ["Ngoding", "Desain Grafis", "Nonton Podcast", "Makan Enak"];
                $foto_profil = "profil.jpg";
            ?>

            <!-- Foto Profil -->
            <img src="<?php echo $foto_profil; ?>" class="profil-img" alt="Foto Profil">

            <!-- Nama dan Profesi -->
            <h1 class="profil-name"><?php echo $nama; ?></h1>
            <p class="profil-profesi"><?php echo $profesi; ?></p>

            <!-- Informasi Detail -->
            <div class="profil-info">
                <p><strong>🗓 Umur:</strong> <?php echo $umur; ?> tahun</p>
                <p><strong>📍 Alamat:</strong> <?php echo $alamat; ?></p>
                <p><strong>📧 Email:</strong> <?php echo $email; ?></p>

                <p><strong>🎯 Hobi:</strong><br>
                    <?php foreach ($hobi as $item) : ?>
                        <span class="hobi-badge"><?php echo $item; ?></span>
                    <?php endforeach; ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include './bottom.php'; ?>