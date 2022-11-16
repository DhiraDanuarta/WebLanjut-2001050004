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
        <div class="alert alert-info text-center" role="alert">
            <h3>Tugas Menampilkan Data Menggunakan Framework CodeIgniter</h3>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Isi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($isi as $items) :
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $items->id; ?></td>
                        <td><?= $items->fakultas; ?></td>
                        <td><?= $items->prodi; ?></td>
                        <td><?= $items->kelas; ?></td>
                        <td><?= $items->isi; ?></td>
                    </tr>
                <?php
                    $no++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>