<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Informasi Data Siswa
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Informasi Data Siswa</li>
      </ol>
    </section>

    <section class="content">
        <table class="table">
            <tr>
            <th>NO</th>
             <th>NISN</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>ASAL SEKOLAH</th>
                <th>NILAI MATEMATIKA</th>
                <th>NILAI BAHASA INGGRIS</th>
                <th>STATUS</th>
                <th colspan="2">AKSI</th>
            </tr>
    <?php
  $count = 0;
  foreach ($siswa as $row) {
      $count = $count +1;
    ?>
              <tr>
                <td><?php echo $count?></td>
                <td><?php echo $row ->nisn?></td>
                <td><?php echo $row ->nama?></td>
                <td><?php echo $row ->jenis_kelamin?></td>
                <td><?php echo $row ->asal_sekolah?></td>
                <td><?php echo $row ->n_matematika?></td>
                <td><?php echo $row ->n_inggris?></td>
                <td><?php echo $row ->status?></td>
                <td><?php echo anchor('c_beranda_admin/edit/'.$row->nisn,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>

            </tr>
        <?php } ?>
        </table>

    </section>

</div>