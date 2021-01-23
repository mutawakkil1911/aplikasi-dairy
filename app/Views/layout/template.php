<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- link bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     <!-- link fontawesome JS -->
     <script src="https://kit.fontawesome.com/a209df908d.js" crossorigin="anonymous"></script>

     <!-- link custom CSS -->
     <link rel="stylesheet" href="<?= base_url(); ?>/css/main.css">

     <title><?= $title; ?></title>
</head>

<body>
     <!-- navbar aplikasi -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class=" container">
               <i class="fab fa-dailymotion fa-2x me-3 text-white"></i>
               <a class="navbar-brand namaAplikasi" href="/Dairy">Dairy Apps</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse menuAplikasi" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                         <a class="nav-link text-white" href="/Dairy/mutawakkil"><i class="fas fa-male me-2"></i>Mutawakkil Alallah</a>
                         <a class="nav-link text-white" href="/Dairy/alfi"><i class="fas fa-female me-2 "></i>Alfi Nurindiana</a>
                    </div>
               </div>
          </div>
     </nav>

     <!-- kustomisasi darurat -->
     <br><br>
     <!-- kustomisasi darurat -->

     <!-- mulai isi konten sesuai halaman -->
     <?= $this->renderSection('konten'); ?>

     <!-- kustomisasi darurat -->
     <br><br>
     <!-- kustomisasi darurat -->

     <!-- link bootsrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
     <!-- link sweetalert JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <script src="<?= base_url(); ?>/js/script.js"></script>

</body>

</html>