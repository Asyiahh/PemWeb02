<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Nilai Mahasiswa</h5>
            <form method="post" action="./nilai_siswa.php">
                <div class="form-group row">
                    <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="Nama" name="Nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="DDP">Dasar Dasar Pemograman</option>
                            <option value="PW2">Pemograman Web</option>
                            <option value="PW2">Pemograman Web 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_UTS" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-8">
                        <input id="nilai_UTS" name="nilai_UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_UAS" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-8">
                        <input id="nilai_UAS" name="nilai_UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">NIlai Tugas/Praktikum</label>
                    <div class="col-8">
                        <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>