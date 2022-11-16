<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASET</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/dist/css/bootstrap.css") ?>">
</head>

<body>
    <div class="container mt-4 ">
        <div class="alert alert-warning" role="alert">
            <h3 class="text-center">Halaman Aset</h3>
        </div>
        <div class="card shadow-sm mb-4">
            <div class="card-header text-center">
                Tambah Aset
            </div>
            <div class="card-body">
                <a href="<?= site_url('aset/tambah') ?>" class="btn btn-success">Tambah Data</a>

            </div>
        </div>
        <div class="card shadow-sm ">
            <div class="card-header text-center">
                Aset <strong>I Komang Dhira Danuarta</strong>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Aset</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($isi as $items) :
                        ?>
                            <tr>
                                <td><?= $items->Id; ?></td>
                                <td><?= $items->nama_aset; ?></td>
                                <td><?= $items->jenis; ?></td>
                                <td><?= $items->lokasi; ?></td>
                                <td><?= $items->jumlah; ?></td>
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