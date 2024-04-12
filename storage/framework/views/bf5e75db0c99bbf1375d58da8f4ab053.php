<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Skrining PHBS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link rel="stylesheet" href="assets/css/style.css">



 <!-- ======= Header ======= -->
 
  <!-- End Header -->


 <!-- ======= form ======= -->
    </head>
<body style="text-align: center;">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="" method="post" class="f1">
                        <div class="f1-steps">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 25%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon">1</div> <!-- Ubah ikon langkah menjadi angka -->
                                <p>Identitas Awal</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon">2</div> <!-- Ubah ikon langkah menjadi angka -->
                                <p>Form Skrining</p>
                            </div>
                        </div>

                        <!-- step 1 -->
                        <fieldset>
                            <h4>Informasi yang membantu lapor</h4>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Ponpes</label>
                                <input type="text" name="nama_ponpes" placeholder="Nama Ponpes" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status_pengirim">Status Penanggung Jawab</label>
                                <select name="status_pengirim" id="status_pengirim" class="form-control">
                                    <option value="">Pilih Kelompok</option>
                                    <option value="Ponpes A">Pengasuh Ponpes</option>
                                    <option value="Ponpes B">Santri Husada</option>
                                    <option value="Ponpes C">Petugas Kesehatan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Santri Laki-Laki</label>
                                <input type="text" name="jumlah_santri_lakilaki" placeholder="Jumlah Santri Laki-laki" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Santri Perempuan</label>
                                <input type="text" name="jumlah_santri_perempuan" placeholder="Jumlah Santri Perempuan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kab/Kota</label>
                                <input type="text" name="kab_kota" placeholder="Kab/Kota" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <input type="text" name="kelurahan" placeholder="Kelurahan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-primary btn-next" id="btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </fieldset>

                     <!-- Script untuk SweetAlert -->
                     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                     <script>
                         document.addEventListener("DOMContentLoaded", function() {
                             // Menambahkan event listener ke tombol "Selanjutnya"
                             document.getElementById('btn-next').addEventListener('click', function() {
                                 Swal.fire({
                                     icon: 'question',
                                     title: 'Apakah anda bersedia melakukan skrining PHBS?',
                                     text: 'Sebelum melanjutkan, Anda harus membaca indikator yang terdapat di halaman beranda.',
                                     showCancelButton: true,
                                     confirmButtonText: 'Bersedia',
                                     cancelButtonText: 'Tidak Bersedia',
                                     reverseButtons: true
                                 }).then((result) => {
                                     if (result.isConfirmed) {
                                         // Aksi ketika tombol "Bersedia" diklik
                                         localStorage.setItem('bersedia', 'true');
                                         window.location.href = "<?php echo e(route('formskrining.index')); ?>";
                                     } else if (result.dismiss === Swal.DismissReason.cancel) {
                                         // Aksi ketika tombol "Tidak Bersedia" diklik
                                         localStorage.setItem('bersedia', 'false');
                                     }
                                 });
                             });
                         });
                     </script>

                        <!-- step 2 -->
<fieldset>
    <h4>Informasi Tambahan</h4>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
    </div>
    <div class="form-group">
        <label>Alamat Rumah</label>
        <input type="text" name="alamat_rumah" placeholder="Alamat Rumah" class="form-control">
    </div>
    <div class="form-group">
        <label>Alamat Kantor</label>
        <textarea name="alamat_kantor" placeholder="Alamat Kantor" class="form-control"></textarea>
    </div>
    <!-- Tambahan informasi lainnya disini -->
    <div class="f1-buttons">
        <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
        <button type="button" class="btn btn-primary btn-next" id="btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
    </div>
</fieldset>


                        <!-- step 2 -->
                        

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form -->


 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>IKI PESAT JATIM</h3>
              <p>
                Jl. Ahmad Yani 118 Surabaya, 60231 <br>
                <strong>Phone:</strong> (031) 8290481<br>
                
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Prosedur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pelayanan Kesehatan</a></li>
            </ul>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DINA KESEHATAN PROVINSI JAWA TIMUR</span></strong> 2024
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	var now_value = progress_line_object.data('now-value');
	var new_value = 0;
	if(direction == 'right') {
		new_value = now_value + ( 100 / number_of_steps );
	}
	else if(direction == 'left') {
		new_value = now_value - ( 100 / number_of_steps );
	}
	progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

$(document).ready(function() {
    // Form
    $('.f1 fieldset:first').fadeIn('slow');

    $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });

    // step selanjutnya (ketika klik tombol selanjutnya)
    $('.f1 .btn-next').on('click', function() {
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');

    	// validasi form
    	parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});

    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			// change icons
    			current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    			// progress bar
    			bar_progress(progress_line, 'right');
    			// show next step
	    		$(this).next().fadeIn();
	    		// scroll window to beginning of the form
    			scroll_to_class( $('.f1'), 20 );
	    	});
    	}
    });

    // step sbelumnya (ketika klik tombol sebelumnya)
    $('.f1 .btn-previous').on('click', function() {
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');

    	$(this).parents('fieldset').fadeOut(400, function() {
    		// change icons
    		current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
    		// progress bar
    		bar_progress(progress_line, 'left');
    		// show previous step
    		$(this).prev().fadeIn();
    		// scroll window to beginning of the form
			scroll_to_class( $('.f1'), 20 );
    	});
    });

    // submit (ketika klik tombol submit diakhir wizard)
    $('.f1').on('submit', function(e) {
    	// validasi form
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    });
});
        </script>
    </body>
</html>
<?php /**PATH D:\magang\ikipesat\resources\views/skrining.blade.php ENDPATH**/ ?>