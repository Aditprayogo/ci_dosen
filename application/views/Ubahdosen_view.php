<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Dosen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="<?= site_url('Dosen'); ?>" class="btn btn-success">Lihat Data Dosen</a>

        <div class="row">
            
            <span style="color:red"><?= validation_errors(); ?></span>

            <?= form_open('Dosen/prosesubah');  ?>

                NIK : <input type="text" name="nik" id="nik" readyonly value="<?= $dosen['nik'] ?>">

                <br><br>

                Nama : <?php

                $data = [
                    'name' => 'nama',
                    'id' => 'nama',
                    'required' => 'required',
                    'value' => $dosen['nama']
                ];

                echo form_input($data);
                ?>
                <br><br>

                Alamat : <input type="text" name="alamat" id="alamat" value="<?= $dosen['alamat'] ?>">

                <br><br>

                No Tlp : <input type="text" name="notlp" id="notlp" value="<?= $dosen['notlp'] ?>">

                <br><br>

                Jenis Kelamin : <?php echo form_dropdown('jenkel', $jenkel, $dosen['jenkel']); ?>

                <br><br>

                <input type="submit" name="tblsimpan" value="Simpan">

            <?= form_close() ?>
        </div>
    </div>
    
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>