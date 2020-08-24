<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">

      <h1>Daftar Laptop</h1>

      <?php
      $session = session();
       if ($session->getFlashdata('alert')): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $session->getFlashdata('alert');  ?>
        </div>
      <?php endif; ?>
      
      <a href="/laptop/create" class="btn btn-success mt-2">Tambah Laptop Baru</a>
      <table class="table mt-2">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Laptop</th>
            <th scope="col">Merk</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php $no = 1 ?>
          <?php foreach ($laptop as $l): ?>


            <tr>
              <th scope="row"><?php echo $no++; ?></th>
              <td> <img src="/img/<?php echo $l['gambar']; ?>" width="150" alt=""></td>
              <td><?php echo $l['nama']; ?></td>
              <td> <a href="/laptop/<?php echo $l['slug']; ?>" type="button" class="btn btn-warning">Detail</a> </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<?php echo $this->endSection(); ?>
