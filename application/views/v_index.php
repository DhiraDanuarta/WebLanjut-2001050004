<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/dist/css/bootstrap.css") ?>">
</head>

<body>
    <div class="container">
        <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tugas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tambah Data</a>
                        </li>
                    </ul>
                    <a class="nav-link" href="#">I Komang Dhira Danuarta</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->


        <div class="alert alert-info mt-3" role="alert">
            <h3 class="text-center">I Komang Dhira Danuarta / 2001050004</h3>
        </div>

        <div class="card">
            <div class="card-header">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dhira</td>
                            <td>2001050004</td>
                            <td>Mataram</td>
                            <td>
                                <a class="btn btn-warning" href="">Edit</a>
                                <a class="btn btn-danger" href="">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Danuarta</td>
                            <td>14821489</td>
                            <td>California</td>
                            <td>
                                <a class="btn btn-warning" href="">Edit</a>
                                <a class="btn btn-danger" href="">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/bootstrap/dist/js/bootstrap.js') ?>"></script>
</body>

</html>