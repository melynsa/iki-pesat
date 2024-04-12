<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medicio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

    <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="index.html" class="logo me-auto"><img src="assets/img/logo-pesat.png" alt=""></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#prosedur">Prosedur</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Pelayanan Kesehatan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <a href="https://dinkes.jatimprov.go.id/assesment-tbc/public/">Skrining E-TIBI</a>
                            <li><a href="{{ route('skrining.index') }}">Cek PHBS secara mandiri</a></li>
                            <li><a href="#">IKL mandiri</a></li>
                            <li><a href="{{ route('ttd.index') }}">Pengingat Minum TTD</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{ route('mitra.index') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Mitra-Pesantren
                Sehat</a>
            <a href="{{ route('skrining.index') }}" class="appointment-btn scrollto"><span
                    class="d-none d-md-inline"></span> Skrining</a>
        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/berandaa.png)">
          <div class="container">
            <h2>Selamat datang <span>di IKI pesat Jatim</span></h2>
            <p>wadah yang bertekad meningkatkan pelayanan
                promosi kesehatan,  kesehatan lingkungan,
                dan pelayanan kesehatan di pondok pesantren.</p>
            <a href="{{ route('skrining.index') }}" class="btn-get-started scrollto">Skrining Sekarang</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Hero -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Tentang</h2>
                <p>
                    Penerapan Perilaku Hidup Bersih dan Sehat (PHBS) adalah salah satu upaya peningkatan derajat
                    kesehatan masyarakat. Sesuai dengan Peraturan Menteri Kesehatan Republik Indonesia No. 2269/ MENKES/
                    PER/XI/2011 tentang pedoman PHBS, PHBS terdiri dari lima tatanan, yaitu tatanan rumah tangga,
                    tatanan tempat kerja, tatanan tempat umum, tatanan institusi pendidikan, dan tatanan sarana
                    kesehatan. Pesantren merupakan salah satu satuan pendidikan yang masuk dalam tatanan institusi
                    pendidikan. Hingga saat ini dalam perkembangannya pondok pesantren tidak hanya menjadi tempat santri
                    belajar agama islam namun juga pengetahuan umum seperti pendidikan formal lainnya.
                    Menurut data profil Promkes dari 38 Kabupaten/ Kota tahun 2023 jumlah pondok pesantren sebanyak
                    4.215 dan yang telah memiliki poskestren sebanyak 1.521 ini memiliki daya ungkit yang besar terhadap
                    pembangunan kesehatan di Provinsi Jawa Timur. Oleh karena itu, intervensi peningkatan kesehatan di
                    pesantren perlu mendapat perhatian yang serius, mengingat kondisi interaksi di pondok pesantren
                    terjadi selama 24 jam. Implementasi PHBS perlu dilakukan untuk mencegah terjadinya permasalahan
                    kesehatan di lingkungan pondok pesantren.
                    Pesantren Sehat bertujuan untuk mewujudkan masyarakat pesantren yang sehat secara mandiri, berperan
                    aktif dalam menjaga dan meningkatkan kesehatan masyarakat pesantren. Sajadah (santri Jatim Sehat dan
                    Berkah) merupakan salah satu program pendampingan mewujudkan pesantren sehat. Program ini bertujuan
                    untuk meningkatkan kualitas PHBS dan poskestren di pondok pesantren.
                    Dalam rangka mewujudkan Pesantren Sehat diperlukan peran dan dukungan dari lintas sektor serta mitra
                    lainnya sebagai wadah komunikasi dan sinergistitas dalam pembinaan Pondok pesantren maka berdasarkan
                    Keputusan Gubernur Provinsi Jawa Timur Nomor 188/202/KPTS/013/2023 dibentuk Tim Pembina Pesantren
                    Sehat Provinsi. Kemudian ditindaklanjuti dalam sebuah Inovasi yang dikenal dengan IKI Pesat Jatim
                    (Inisiatif, Kolaborasi, Inovasi Pesantren Sehat Provinsi Jawa Timur) merupakan wadah untuk
                    meningkatkan pelayanan promosi kesehatan, kesehatan lingkungan dan pelayanan kesehatan di pondok
                    pesantren.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-8" data-aos="fade-down">
                    <video src="assets/img/video/tentang.mp4" class="video-fluid" autoplay loop controls></video>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->


    <!-- ======= Prosedur Section ======= -->
    <section id="prosedur" class="prosedur">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Indikator </h2>
                <p>Ayo Lakukan Perilaku Hidup Bersih dan Sehat Di Pesantren.</p>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon"><i class="fas fa-bath"></i></div>
                                <h4 class="title"><a href="#" id="cleanliness-link">Menjaga Kebersihan Perorangan</a></h4>
                            </div>

                            <!-- Sertakan library SweetAlert -->
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                                // Tambahkan event listener ke link 'Menjaga Kebersihan Perorangan'
                                document.getElementById('cleanliness-link').addEventListener('click', function(event) {
                                    event.preventDefault(); // Hindari tindakan default dari link

                                    // Tampilkan SweetAlert
                                    Swal.fire({
                                        title: 'List Kebersihan Perorangan',
                                        html: `
                                        <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Rambut tersisir rapi</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox2">Telinga bersih</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox3" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox3">Kulit terlihat bersih / tidak ada bekas scabies</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox4" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox4">Pakaian bersih</label>
                                            </div>
                                        `,
                                        confirmButtonText: 'OK'
                                    });

                                });
                            </script>

<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
    <div class="icon"><i class="fas fa-tint"></i></div>
    <h4 class="title"><a href="#" id="tint">Menggunakan air bersih dan air minum</a></h4>
    <script>
        // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
        document.getElementById('tint').addEventListener('click', function(event) {
        event.preventDefault(); // Hindari tindakan default dari link

        // Tampilkan SweetAlert
        Swal.fire({
                                            title: 'Menggunakan air bersih dan air minum',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                    <label class="form-check-label" for="checkbox1"> Untuk keperluan minum: memenuhi persyaratan air  minum   dan dibuktikan dengan  pemeriksakan secara berkala oleh puskesmas, apabila akan dikonsumsi direbus terlebih dahulu     </label>
                                                </div>
                                                <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                    <label class="form-check-label" for="checkbox2">Untuk keperluan mandi,  wudhu, mencuci tangan, mencuci pakaian, mencuci alat makan,membasuh menggunakan air yang tidak berwarna, tidak berbau & tidak berasa  </label>
                                                </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                        </script>
                                    </div>


                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon"><i class="fas fa-toilet"></i></div>
                                <h4 class="title"><a href="#" id="toilet">Menggunakan Kamar Mandi dan Jamban Sehat</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('toilet').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Menggunakan Kamar Mandi dan Jamban Sehat',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Semua Kamar mandi dan jamban terlihat bersih</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox2">Tersedia air bersih yang cukup</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox3" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox3">Terlihat bersih, tidak licin & tidak berbau</label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon"><i class="fas fa-child"></i></div>
                                <h4 class="title"><a href="#" id="child">Melakukan Aktivitas Fisik secara rutin</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('child').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Melakukan aktivitas fisik minimal 30 menit setiap hari, seperti:',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Berolah raga</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox2">Membersihkan asrama</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox3" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox3">Membersihkan ruang kelas</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox4" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox4">Memasak, dll</label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon"><i class="fas fa-water"></i></div>
                                <h4 class="title"><a href="#" id="water">Mencuci Tangan Pakai Sabun dan Air Mengalir</a>
                                </h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('water').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Mencuci tangan pada waktu yang diperlukan :',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Sebelum dan Sesudah Makan</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox2">Sesudah BAK/ BAB</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox3" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox3">Sesudah membuang sampah</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox4" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox4">Sesudah memegang hewan</label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon"><i class="fas fa-notes-medical"></i></div>
                                <h4 class="title"><a href="#" id="medical">Membersihkan Tempat Penampungan Air, Barang Bekas Bebas Jentik</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('medical').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Membersihkan Tempat Penampungan Air, Barang Bekas Bebas Jentik',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Semua bak penampungan air yang ada di lingkungan pesantren bebas jentik</label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                <h4 class="title"><a href="#" id="heart">Mengomsumsi Makanan Seimbang</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('heart').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Mengkonsumsi makanan gizi seimbang',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Semua santri makan 3 kali sehari & minimum 1 x makan  dengan sayur,  lauk dan nasi (menu seimbang) </label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                <h4 class="title"><a href="#" id="beat">Memanfaatkan Poskestren dan Sarana Pelayanan Kesehatan</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('beat').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Memanfaatkan Poskestren dan Sarana Pelayanan Kesehatan',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Memanfaatkan poskestren </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox2">Bila sakit santri dibawa ke sarana yankes atau tenaga kesehatan, puskesmas </label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon"><i class="fas fa-hospital-user"></i></div>
                                <h4 class="title"><a href="#" id="user">Tidak Merokok</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('user').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Tidak Merokok',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Tidak ada masyarakat pesantren yang merokok</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox2">Tidak ada asbak dan puntung rokok</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox3" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox3">Ruangan tidak berbau asap rokok</label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon"><i class="fas fa-notes-medical"></i></div>
                                <h4 class="title"><a href="#" id="notes">Mengetahui Informasi Kesehatan Prioritas</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('notes').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Mengetahui Informasi Kesehatan Prioritas',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Semua santri mengetahui informasi  kesehatan terkini (kesehatan reproduksi,DBD,TBC, Diare, HIV-Aids, Covid-19, Stunting, Tifus, Hepatitis, Penyakit Kulit, dll).</label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon"><i class="fas fa-notes-medical"></i></div>
                                <h4 class="title"><a href="#" id="fa">Menjadi Peserta Dana Sehat</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('fa').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Menjadi peserta dana sehat/jaminan kesehatan',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Jumlah santri yang menjadi peserta dana sehat minimal 80% dari total santri </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox2">Ada pembukuan/pencatatan tentang dana sehat </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox3" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox3"> Ada kartu peserta dana sehat/kartu jaminan kesehatan </label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon"><i class="fas fa-trash-alt"></i></div>
                                <h4 class="title"><a href="#" id="trash">Membuang Sampah Ke Dalam Tempat Sampah</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('trash').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Membuang sampah ke dalam tempat sampah',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Tidak ada sampah berserakan di seluruh lokasi ponpes </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox2">Tersedia tempat sampah dalam jumlah yang cukup </label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox3" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox3"> Tempat sampah tertutup </label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon"><i class="fas fa-notes-medical"></i></div>
                                <h4 class="title"><a href="#" id="fas">Menimbang Berat Badan dan Mengukur Tinggi Badan setiap 6 bulan</a></h4>
                                <script>
                                    // Tambahkan event listener ke link 'Menggunakan Kamar Mandi dan Jamban Sehat'
                                    document.getElementById('fas').addEventListener('click', function(event) {
                                        event.preventDefault(); // Hindari tindakan default dari link

                                        // Tampilkan SweetAlert
                                        Swal.fire({
                                            title: 'Menimbang Berat Badan dan Mengukur Tinggi Badan setiap 6 bulan',
                                            html: `
                                            <div class="form-check">
                                                <input type="checkbox" id="checkbox1" class="form-check-input" disabled checked>
                                                <label class="form-check-label" for="checkbox1">Menimbang berat badan dan mengukur tinggi badan minimal setiap 6 bulan sekali </label>
                                            </div>
                                            `,
                                            confirmButtonText: 'OK'
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End prosedur Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <a class="gallery-lightbox" href="assets/img/video/minumttd.mp4">
                            <video controls class="img-fluid">
                                <source src="assets/img/video/minumttd.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="gallery-lightbox" href="assets/img/video/ponpes.mp4">
                            <video controls class="img-fluid">
                                <source src="assets/img/video/ponpes.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="gallery-lightbox" href="assets/img/video/poskestren.mp4">
                            <video controls class="img-fluid">
                                <source src="assets/img/video/poskestren.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="gallery-lightbox" href="assets/img/video/minumttd2.mp4">
                            <video controls class="img-fluid">
                                <source src="assets/img/video/minumttd2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Gallery Section -->



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
                                {{-- <strong>Email:</strong> info@example.com<br> --}}
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

                    {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

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
                &copy; Copyright <strong><span>DINAS KESEHATAN PROVINSI JAWA TIMUR</span></strong> 2024
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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
    <script>
        // JavaScript untuk membuat slide menggunakan Swiper.js
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

</body>

</html>
