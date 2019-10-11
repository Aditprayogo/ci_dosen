<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management dosen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row mt-3">

        <a href="<?= site_url('Dosen/tambah'); ?>" class="btn btn-primary">Tambah Dosen</a>

        <?php

            if (is_array($dosen)) {
                # code... 
        ?>

        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Nik</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No tlp</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($dosen as $key => $value) {
            # code...
         ?>
            <tr>
            <th scope="row"><?= $value['nik'] ?></th>
            <td><?= $value['nama'] ?></td>
            <td><?= $value['alamat'] ?></td>
            <td><?= $value['notlp'] ?></td>
            <td><?= $value['ketjenkel'] ?></td>
            <td>
                <a href="<?= site_url('Dosen/ubah/'. $value['nik']); ?>" class="btn btn-warning">Ubah</a>
                <a href="<?= site_url('Dosen/hapus/'. $value['nik']); ?>" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    <?php } ?>
    </div>
</div>

    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>