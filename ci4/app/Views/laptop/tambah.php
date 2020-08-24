<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Tambah Laptop</h1>

      <form action="/laptop/save" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Laptop</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?php echo ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="inputPassword" name="nama"
            value="<?php echo old('nama'); ?>">
            <div class="invalid-feedback">
            <?php echo $validation->getError('nama'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputPassword" name="gambar" value="<?php echo old('gambar'); ?>">
          </div>
        </div>
        <input type="submit" name="" class="btn btn-success" value="Submit">
      </form>


    </div>
  </div>
  <?php echo $this->endSection(); ?>
