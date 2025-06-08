<?php

var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nim = $_POST["nim"] ?? "";
    $nama = $_POST["nama"] ?? "";
    $gender = $_POST["gender"] ?? "";
    $prodi = $_POST["prodi"] ?? "";
    $skills = $_POST["skill"] ?? [];
    $domisili = $_POST["tempat_domisili"] ?? "";
    $email = $_POST["email"] ?? "";

    // Menghitung skor skill (opsional)
    $skill_list = [
        "HTML" => 10, "CSS" => 10, "JavaScript" => 20, 
        "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50
    ];
    $total_skill_score = 0;
    foreach ($skills as $skill) {
        $total_skill_score += $skill_list[$skill] ?? 0;
    }

    // Menentukan kategori skill berdasarkan skor
    $kategori_skill = "Pemula";
    if ($total_skill_score >= 100) {
        $kategori_skill = "Expert";
    } elseif ($total_skill_score >= 60) {
        $kategori_skill = "Advanced";
    } elseif ($total_skill_score >= 40) {
        $kategori_skill = "Intermediate";
    }

    // Menampilkan data yang telah diisi
    echo "<b>NIM:</b> $nim <br>";
    echo "<b>Nama Lengkap:</b> $nama <br>";
    echo "<b>Jenis Kelamin:</b> $gender <br>";
    echo "<b>Program Studi:</b> $prodi <br>";
    echo "<b>Skill Web & Programming:</b> " . implode(", ", $skills) . " <br>";
    echo "<b>Total Skor Skill:</b> $total_skill_score <br>";
    echo "<b>Kategori Skill:</b> $kategori_skill <br>";
    echo "<b>Tempat Domisili:</b> $domisili <br>";
    echo "<b>Email:</b> $email <br>";
} else {
    echo "<h3>Silakan isi form terlebih dahulu!</h3>";
}
?>