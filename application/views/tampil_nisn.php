<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Login</title>
    </head>
  <body>
<div class="row" style="margin-top: 40px;">
    <div class="row-md-4 col-md-4 offset-md-4 ">
        <div class="card card-primary">
            <div class="card-header">
                Data siswa
            </div>
    <section class="content">
        <?php foreach ($siswa as $row) {?>
            
        <div class="form-group">
                <label>Nisn</label>
                <input type="text" name="nisn" class="form-control" value="<?php echo $row->nisn ?>">
            </div><div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $row->nama ?>">
            </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $row->jenis_kelamin?>">
            </div>
            <div class="form-group">
                <label>Asal Seklolah</label>
                <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $row->asal_sekolah?>">
            </div>
            <div class="form-group">
                <label>Nilai Matematika</label>
                <input type="text" name="n_matematika" class="form-control" value="<?php echo $row->n_matematika?>">
            </div>
            <div class="form-group">
                <label>Nilai Bahasa Inggris</label>
                <input type="text" name="n_inggris" class="form-control" value="<?php echo $row->n_inggris?>">
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control" value="<?php echo $row->status?>">
            </div>
 
            
    <?php } ?>

    </section>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>