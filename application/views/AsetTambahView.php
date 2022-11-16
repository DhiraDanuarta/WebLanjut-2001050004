<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH ASET</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/dist/css/bootstrap.css") ?>">
</head>

<body>
    <div class="container mt-4 ">
        <div class="alert alert-warning" role="alert">
            <h3 class="text-center">Halaman Tambah Aset</h3>
        </div>
        <div class="card shadow-sm mb-4">
            <div class="card-header text-center">
                Form Aset
            </div>
            <div class="card-body">
                <form method="POST" action="<?= site_url('aset/simpanTambah') ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <input type="text" class="form-control" id="jenis">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a class="btn btn-warning" href="<?= site_url('aset/index') ?>">Kembali</a>
                </form>
            </div>
        </div>

    </div>
</body>

</html>