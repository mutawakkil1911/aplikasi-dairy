<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>

<div class="container mt-5">
     <div class="swal" data-swal="<?= (session()->getFlashdata('notifikasi')); ?>"></div>
     <div class="row mt-5">
          <div class="col-sm-6">
               <div class="card idUser">
                    <div class="card-body d-flex aligin-items-center">
                         <div class="me-5 mt-1">
                              <img src="<?= base_url(); ?>/img/user/<?= session()->gambar; ?>" class="rounded-circle" width="150px">
                         </div>
                         <div class="mt-3">
                              <h5 class="card-title"><?= session()->nama; ?></h5>
                              <p class="card-text text-muted">User ID : <?= session()->userid; ?></p>
                              <hr class="garisSatu">
                              <a href="/User/Logout" class="btn tombolSatu rounded-pill  tombolLogout"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <form action="/Chat" method="post" class="mt-3">
          <input type="hidden" name="user" value="<?= session()->nama; ?>">
          <button type="submit" name="submit" class="btn btn-dark rounded-pill"><i class="fas fa-comments me-2"></i>Message</button>
     </form>
     <div class="row mt-3">
          <div class="col-sm-6">
               <h3>Cerita Hari ini...</h3>
               <small class="text-muted">Apa yang terjadi hari ini ? Tulis semua apa yang bisa anda kenang di masa depan !</small>
          </div>
     </div>
     <div class="row mt-3">
          <div class="col-sm-6">
               <form action="/Dairy/simpan" method="post">
                    <div class="row mb-3">
                         <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                         <div class="col-sm-10">
                              <select class="form-select" aria-label="Default select example" id="penulis" name="penulis">
                                   <option><?= (old('penulis') ? old('penulis') : '--Pilih Penulis--'); ?></option>
                                   <option>Alfi Nurindiana</option>
                                   <option>Mutawakkil Alallah</option>
                              </select>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control <?= ($validation->hasError('judul') ? 'is-invalid' : ''); ?>" id="judul" name="judul" placeholder="Ada apa hari ini ?" autocomplete="off" value="<?= old('judul'); ?>">
                              <div class="invalid-feedback">
                                   <?= $validation->getError('judul'); ?>
                              </div>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="keterangan" class="col-sm-2 col-form-label">Isi</label>
                         <div class="col-sm-10">
                              <textarea class="form-control <?= ($validation->hasError('keterangan') ? 'is-invalid' : ''); ?>" id="keterangan" name="keterangan" rows="10" placeholder="Isi ceritamu disini..."><?= (old('keterangan') ? old('keterangan') : ''); ?></textarea>
                              <div class="invalid-feedback">
                                   <?= $validation->getError('keterangan'); ?>
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn tombolDua rounded-pill"><i class="fas fa-paper-plane me-2"></i>Kirim</button>
               </form>
          </div>
     </div>
</div>

<?= $this->endSection(); ?>