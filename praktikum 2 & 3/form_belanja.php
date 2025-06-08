<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja Online</title>
</head>
<bod>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Belanja Online</h5>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">


            <!-- Kolom Kiri: Form Belanja -->

            <form method="post">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="customer" name="customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Pilih_Produk" id="pilih produk_0" type="radio" class="custom-control-input" value="TV">
                            <label for="pilih produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Pilih_Produk" id="pilih produk_1" type="radio" class="custom-control-input" value="Kulkas">
                            <label for="pilih produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="Pilih_Produk" id="pilih produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                            <label for="pilih produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="jumlah">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>


            <!-- Kolom Kanan: Daftar Harga -->
            <div class="col-md-5">
                <div class="card bg-primary text-white">
                    <div class="card-header text-center">
                        <h5>Daftar Harga</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="list-group">
                            <li class="list-group-item text-dark">TV: Rp. 4.200.000</li>
                            <li class="list-group-item text-dark">Kulkas: Rp. 3.100.000</li>
                            <li class="list-group-item text-dark">Mesin Cuci: Rp. 3.800.000</li>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-white">Harga dapat berubah setiap saat</small>
                    </div>
                </div>
            </div>
        </div>

        <?php
        // Data harga produk
        $harga_produk = [
            "TV" => 4200000,
            "Kulkas" => 3100000,
            "Mesin Cuci" => 3800000
        ];

        // Proses jika form dikirim
        if (isset($_POST['submit'])) {
            $customer = $_POST['customer'];
            $Pilih_Produk = $_POST['Pilih_Produk'];
            $jumlah = $_POST['jumlah'];

            $harga = $harga_produk[$Pilih_Produk]; // Ambil harga berdasarkan produk
            $total = $harga * $jumlah;

            echo "<hr>";
            echo "Nama Customer: <b>$customer</b><br>";
            echo "Produk Pilihan: <b>$Pilih_Produk</b><br>";
            echo "Jumlah Beli: <b>$jumlah</b><br>";
            echo "Total Belanja: <b>Rp. " . number_format($total, 0, ',', '.') . "</b><br>";
        }
        ?>

    </div>
    </body>

</html>