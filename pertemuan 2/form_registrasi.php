<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Registrasi IT Club Data Science</h5>
                <form method="post" action="./proses_registrasi.php">
                    <div class="form-group row">
                        <label for="NIM" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-circle"></i>
                                    </div>
                                </div>
                                <input id="nim" name="nim" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="laki_laki">
                                <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="perempuan">
                                <label for="gender_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                        <div class="col-8">
                            <select id="prodi" name="prodi" class="custom-select">
                                <option value="SI">Sistem Informasi</option>
                                <option value="TI">teknik Informatika</option>
                                <option value="BD">Bisnis Digital</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Skill Web & Programming</label>
                        <div class="col-8">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill" id="skill_0" type="checkbox" class="custom-control-input" value="HTML">
                                <label for="skill_0" class="custom-control-label">HTML</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill" id="skill_1" type="checkbox" class="custom-control-input" value="CSS">
                                <label for="skill_1" class="custom-control-label">CSS</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill" id="skill_2" type="checkbox" class="custom-control-input" value="JavaScript">
                                <label for="skill_2" class="custom-control-label">JavaScript</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill" id="skill_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                                <label for="skill_3" class="custom-control-label">RWD Bootstrap</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill" id="skill_4" type="checkbox" class="custom-control-input" value="PHP">
                                <label for="skill_4" class="custom-control-label">PHP</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill" id="skill_5" type="checkbox" class="custom-control-input" value="Python">
                                <label for="skill_5" class="custom-control-label">Python</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill" id="skill_6" type="checkbox" class="custom-control-input" value="Java">
                                <label for="skill_6" class="custom-control-label">Java</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_domisili" class="col-4 col-form-label">Tempat Domisili</label>
                        <div class="col-8">
                            <select id="tempat_domisili" name="tempat_domisili" class="custom-select">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Depok">Depok</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Tanggerang">Tanggerang</option>
                                <option value="Bekasi">Bekasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                                <input id="email" name="email" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
</body>

</html>