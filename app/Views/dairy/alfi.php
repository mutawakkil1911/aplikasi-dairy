<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>

<div class="container mt-5">
     <div class="row">
          <?php foreach ($dairy as $d) : ?>
               <div class="col-sm-6 mb-3">
                    <div class="card">
                         <div class="card-header bg-dark text-white">
                              <?= $d['judul']; ?>
                         </div>
                         <div class="card-body">
                              <blockquote class="blockquote mb-0">
                                   <p class="isiCerita"><?= $d['keterangan']; ?></p>
                                   <footer class="blockquote-footer mt-3"><?= $d['penulis']; ?></footer>
                                   <footer class="blockquote-footer"><?= 'PP. Nurul Jadid, ' . $d['created_at'] . ' WIB'; ?></footer>
                              </blockquote>
                         </div>
                    </div>
               </div>
          <?php endforeach; ?>
     </div>
</div>

<?= $this->endSection(); ?>