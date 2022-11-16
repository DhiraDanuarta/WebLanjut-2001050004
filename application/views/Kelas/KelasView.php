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
    <div class="container mt-4">
        <div class="alert alert-primary text-center" role="alert">
            <h3>Tugas Menambahkan Data Menggunakan Framework CodeIgniter</h3>
        </div>
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="text-center">Kelas I Komang Dhira Danuarta</h5>
            </div>
            <div class="card-body">
                <a class="btn btn-success mb-4" href="<?= site_url('KelasController/tambah') ?>">Tambah</a>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Isi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($isi as $items) :
                        ?>
                            <tr>
                                <td><?= $items->id; ?></td>
                                <td><?= $items->fakultas; ?></td>
                                <td><?= $items->prodi; ?></td>
                                <td><?= $items->kelas; ?></td>
                                <td><?= $items->isi; ?></td>
                            </tr>
                        <?php
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>