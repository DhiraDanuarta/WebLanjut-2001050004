<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH KELAS</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/dist/css/bootstrap.css") ?>">
</head>

<body>
    <div class="container mt-4 ">
        <div class="alert alert-warning" role="alert">
            <h3 class="text-center">Halaman Tambah Kelas</h3>
        </div>
        <div class="card shadow-sm mb-4">
            <div class="card-header text-center">
                Form Kelas
            </div>
            <div class="card-body">
                <form method="POST" action="<?= site_url('KelasController/simpantambah') ?>">
                    <div class="mb-3">
                        <label for="fakultas" class="form-label">Fakultas</label>
                        <input type="text" class="form-control" id="fakultas" name="fakultas">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <input type="number" class="form-control" id="isi" name="isi">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a class="btn btn-warning" href="<?= site_url('KelasController/index') ?>">Kembali</a>
                </form>
            </div>
        </div>

    </div>
</body>

</html>