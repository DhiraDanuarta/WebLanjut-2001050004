<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TES FORM</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/dist/css/bootstrap.css") ?>">
</head>

<body>
    <nav class=" navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WebLanjut</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>index.php/mahasiswa/index">Mahasiswa</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>index.php/home/form">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="text-center">Form Data Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM:</label>
                                <input type="number" class="form-control" id="nim" name="nim">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat:</label>
                                <input type="text" class="form-control" id="alamat">
                            </div>
                            <div class="d-grid gap-2">
                                <input type="submit" class="btn btn-primary" value="Simpan"></input>
                                <input type="reset" class="btn btn-outline-secondary" value="Reset"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/bootstrap/dist/js/bootstrap.js') ?>"></script>
</body>

</html>