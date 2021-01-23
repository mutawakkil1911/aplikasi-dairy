<?= $this->extend('user/template'); ?>
<?= $this->section('konten'); ?>

<main class="form-signin">
     <div class="swal" data-swal="<?= (session()->getFlashdata('notifikasi')); ?>"></div>
     <div class="gagal" data-gagal="<?= (session()->getFlashdata('gagal')); ?>"></div>
     <form action="/User/login" method="post">
          <i class="fab fa-dailymotion fa-7x"></i>
          <h3 class="card-title namaAplikasi mt-3">Dairy Apps</h3>
          <p class="card-text">Silahkan login.</p>
          <label for="inputEmail" class="visually-hidden">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="username" autocomplete="off" required autofocus>
          <label for="inputPassword" class="visually-hidden">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required id="password" name="password" autocomplete="off">
          <button class="w-100 btn btn-lg btn-dark rounded-pill" type="submit"><i class="fas fa-sign-in-alt me-3"></i>Login</button>
          <p class="mt-5 mb-3 text-muted">Mutawakkil Alallah <br> &copy 2020 All Right Reserverd</p>
     </form>
</main>

<?= $this->endSection(); ?>