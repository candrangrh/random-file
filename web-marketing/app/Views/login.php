<section class="h-100vh">
  <div class="row mx-0 h-100vh">
    <div class="col-md-5 order-md-1 order-2 text-center px-5 my-auto">
      <div class="head">
        <div class="underline">
          <div class="content">
          </div>
        </div>
        <h1 class="head"><b>Login</b></h1>
      </div>
      <div style="height:20vh"></div>

      <?php if (session()->getFlashdata('pesan')): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif; ?>

      <form action="/Login/AksiLogin" method="post" class="text-left px-md-5">
        <div class="form-group mb-5">
          <label>Username</label>
          <input type="text" name="username" class="form-control form-control-sm">

        </div>
        <div class="form-group mb-5">
          <label>Password</label>
          <input type="password" name="password" class="form-control form-control-sm" placeholder="Min. 8 karakter dengan 1 huruf kapital (A-Z) dan angka (0-9)">
          <small class="form-text text-muted"></small>
          <small class="form-text text-right"><a href="#">Lupa password?</a></small>
        </div>
        <button type="submit" class="btn btn-main w-100">Login</button>
        <small class="form-text text-muted text-center">Belum punya akun? <a href="#"><b>Register</b></a></small>
      </form>
    </div>
    <div class="col-md-7 order-md-2 order-1 p-md-5 h-100vh" style="background-color:#F3FFFC">
      <div style="height:5vh"></div>
      <div class="position-relative" style="width:70%;left:15%">
        <img class="w-100" src="<?php echo base_url('/images/logo.png') ?>" alt="" srcset="">
        <div style="height:10vh"></div>
        <img class="w-100" src="<?php echo base_url('/images/ilustrasi1.png') ?>" alt="" srcset="">
      </div>
      <div style="height:5vh"></div>
    </div>
  </div>
</section>
