const swal = $('.swal').data('swal');

if (swal) {
     Swal.fire({
          title: 'Selamat',
          text: swal,
          icon: 'success'
     });
}

const gagal = $('.gagal').data('gagal');

if (gagal) {
     Swal.fire({
          title: 'Perhatian',
          text: gagal,
          icon: 'warning'
     });
}

$('.tombolLogout').on('click', function (e) {
     // hentikan aksi default
     e.preventDefault();
     const href = $(this).attr('href');

     Swal.fire({
          title: 'Apakah anda yakin?',
          text: "Anda akan Logout !",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#212529',
          cancelButtonColor: '#212529',
          confirmButtonText: 'Logout',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.value == true) {
            document.location.href = href;
          }
        })    
})