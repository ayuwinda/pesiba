<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Edit Data Mahasiswa
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mahasiswa</li>
      </ol>
    </section>
    <section class="content">
        <?php foreach ($siswa as $row) {?>

        <form action="<?php echo base_url().'index.php/c_beranda_admin/update_data';?>" method="post">
            <div class="form-group">
                 <label>Nisn</label>
                <input type="text" name="nisn" class="form-control" value="<?php echo $row->nisn?>">
            </div>
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
            <label>STATUS</label>
            <select name='status'>
            <option value='Diterima' class='form-control'>Diterima</option>
            <option value='Menunggu Proses' class='form-control'>Menunggu Proses</option>
            <option value='Diterima' class='form-control'>Diterima</option>
            </select>

            </div>
                

            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    <?php } ?>

    </section>
</div>