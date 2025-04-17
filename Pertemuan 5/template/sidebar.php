<?php
$menu = [
    [
        "icon" => "building",
        "label" => "Kelurahan",
        "items" => [
            [
                "link" => "list-kelurahan.php",
                "label" => "List Kelurahan"
            ],
            [
                "link" => "form-kelurahan.php",
                "label" => "Tambah"
            ],
        ]
    ],
    [
        "icon" => "user",
        "label" => "Pasien",
        "items" => [
            [
                "link" => "list-pasien.php",
                "label" => "List Pasien"
            ],
            [
                "link" => "Tambah-Pasien.php",
                "label" => "Tambah"
            ],
        ]
    ],
    [
        "icon" => "user-md",
        "label" => "Paramedik",
        "items" => [
            [
                "link" => "list-paramedik.php",
                "label" => "List Paramedik"
            ],
            [
                "link" => "form-paramedik.php",
                "label" => "Tambah"
            ],
        ]
    ],
    [
        "icon" => "stethoscope",
        "label" => "Paramedik",
        "items" => [
            [
                "link" => "data-periksa.php",
                "label" => "Data pemeriksaan"
            ],
            [
                "link" => "list-periksa.php",
                "label" => "List Pemeriksaan"
            ],
            [
                "link" => "Tambah-Paramedik.php",
                "label" => "Tambah"
            ],
        ]
    ]
]
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PemWeb 2</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Collapse Menu -->
    <?php
    foreach ($menu as $menu) :
    ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#<?= $menu['label'] ?>"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-<?= $menu['icon'] ?>"></i>
                <span><?= $menu['label'] ?></span>
            </a>
            <div id="<?= $menu['label'] ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <?php
                    foreach ($menu['items'] as $item) :
                    ?>
                        <a class="collapse-item" href="<?= $item['link'] ?>"><?= $item['label'] ?></a>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </li>
    <?php
    endforeach;
    ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>