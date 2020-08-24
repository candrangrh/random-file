<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Daftar Laptop</h1>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/img/<?php echo $detail['gambar']; ?>" class="card-img" width="00" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $detail['nama']; ?></h5>
              <a href="/laptop/edit/<?= $detail['slug']; ?>" class="btn btn-primary">Edit</a>

              <form class="d-inline" action="/laptop/delete/<?= $detail['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="delete">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');">Delete</button>
              </form>


              <br><br>
              <a href="/laptop">Back to List Laptop</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php echo $this->endSection(); ?>
