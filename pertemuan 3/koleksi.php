<?php
include './top.php';
include './menu.php';
?>

<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <?php include './navbar.php'; ?>

    <!-- Page content dengan background foto -->
    <div class="container-fluid" style="
        background: url('bgb.jpg') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        align-items: top;
        justify-content: center;
        padding: 50px 0;">

        <!-- Page content-->
        <div class="container">
            <h1 class="mt-4 text-center">Koleksi Template Scrapbook</h1>

            <?php
            // Data koleksi scrapbook
            $scrapbooks = [
                [
                    "judul" => "result",
                    "deskripsi" => "Foto-foto dan catatan dari perjalanan ke Bali.",
                    "gambar" => "scrapbook0.jpg"
                ],
                [
                    "judul" => "take a pict",
                    "deskripsi" => "Kumpulan foto keluarga dari berbagai acara spesial.",
                    "gambar" => "scrapbook1.jpg"
                ],
                [
                    "judul" => "take a pict",
                    "deskripsi" => "Kenangan bersama teman-teman terbaik sepanjang masa.",
                    "gambar" => "scrapbook3.jpg"
                ],
                [
                    "judul" => "take a pict",
                    "deskripsi" => "Sketsa, lukisan, dan karya seni favorit dalam satu tempat.",
                    "gambar" => "scrapbook2.jpg"
                ],
                [
                    "judul" => "take a pict",
                    "deskripsi" => "Sketsa, lukisan, dan karya seni favorit dalam satu tempat.",
                    "gambar" => "scrapbook4.jpg"
                ]
            ];
            ?>

            <div class="row mt-4">
                <?php foreach ($scrapbooks as $scrapbook) : ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card shadow">
                            <img src="<?php echo $scrapbook['gambar']; ?>" class="card-img-top" alt="<?php echo $scrapbook['judul']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $scrapbook['judul']; ?></h5>
                                <p class="card-text"><?php echo $scrapbook['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php include './bottom.php'; ?>