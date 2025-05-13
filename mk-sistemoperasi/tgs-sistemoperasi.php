<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Personal Portofolio - Tugas</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

 <!-- Favicons -->
  <link href="../assets/img/icon.png" rel="icon">
  <link href="../assets/img/apple-touch-icons.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 05 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="service-details-page">

<?php 
include "../include/sub_header.php"
?> 
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>TUGAS</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../home.php">Home</a></li>
            <li><a href="../project.php">Project</a></li>
            <li><a href="sistemoperasi.php">Sistem Operasi</a></li>
            <li class="current">Tugas</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <!-- <div class="services-list">
              <a href="#" class="active">Web Design</a>
              <a href="#">Software Development</a>
              <a href="#">Product Management</a>
              <a href="#">Graphic Design</a>
              <a href="#">Marketing</a>
            </div> -->
            <h4>SOAL!</h4>
            <P>Diketahui :</P>
            <P>Jumlah track = 2000,</P>
            <P>Posisi head berada di track : 1234</P>
            <P>Urutan track yang perlu diakses yaitu :
            1600, 1050, 1775, 1950, [x1], 825, 75, 1300, 1450, 600, [x2], 1600, 1050, 30, 1900, [x3], 700, 1300, 55, 425, [x4], 700, 1600, 200.</P>
            Lakukan perhitungan banyaknya proses lintas track yang dilakukan menggunakan ketujuh algoritma (mulai dari PTPD hingga Circular Scan), dan gambarkan grafik perjalanan lintasan yang dilakukan serta tambahkan sedikit narasi sebagai penjelasannya.
            <P>Catatan :</P>
            <P>[x1] adalah tanggal lahir masing-masing x 10, misal : 1 menjadi 10, 29 menjadi 290</P>
            <P>[x2] adalah bulan lahir masing-masing x 100, misal : 4 menjadi 400, 11 menjadi 1100</P>
            <P>[x3] adalah 4 digit tahun lahir masing-masing, misal : 2007, 2010</P>
            <P>[x4] adalah 3 digit terakhir dari NIM, misal 395, 056 menjadi 56</P>
            
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <!-- <img src="../assets/img/services/services-4.webp" alt="" class="img-fluid services-img"> -->
            <h2>Jawaban : </h2>
            
            <h3>FCPS (<i>First Come First Serve</i>)</h3>
            <p>Total lintasan yang dilalui: 19.224 track.</p>
            <p>Urutan Lintasan:</p>
            <p>1234 → 1600 → 1050 → 1775 → 1950 → 60 → 825 → 75 → 1300 → 1450 → 600 → 300 → 1600 → 1050 → 30 → 1900 → 2003 → 700 → 1300 → 55 → 425 → 149 → 700 → 1600 → 200</p>

            <h3>SSTF (<i>Shortest Seek Time First</i>)</h3>
            <p>Total lintasan yang dilalui: 2.742 track.</p>
            <p>Urutan Lintasan:</p>
            <p>1234 → 1300 → 1450 → 1600 → 1775 → 1900 → 1950 → 2003 → 1050 → 825 → 700 → 600 → 425 → 300 → 200 → 149 → 75 → 60 → 55 → 30</p>

            <h3>SCAN (<i>Elevator Algorithm</i>)</h3>
            <p>Total lintasan yang dilalui: 2.742 track.</p>
            <p>Urutan Lintasan:</p>
            <p>1234 → 1300 → 1450 → 1600 → 1775 → 1900 → 1950 → 2003 → 1999 (ujung disk) → lalu balik turun → 1050 → 825 → 700 → 600 → 425 → 300 → 200 → 149 → 75 → 60 → 55 → 30</p>

            <h3>LOOK (versi SCAN tetapi tidak sampai ujung disk)</h3>
            <p>Total lintasan yang dilalui: 2.343 track.</p>
            <p>Urutan Lintasan:</p>
            <p>1234 → 1300 → 1450 → 1600 → 1775 → 1900 → 1950 → 2003 → 1300 → 1050 → 825 → 700 → 600 → 425 → 300 → 200 → 149 → 75 → 60 → 55 → 30</p>

            <h3>C-SCAN (<i>Circular SCAN</i>)</h3>
            <p>Total lintasan yang dilalui: 1.815 track.</p>
            <p>Urutan Lintasan:</p>
            <p>1234 → 1300 → 1300 → 1450 → 1600 → 1600 → 1775 → 1900 → 1950 → 1999 → 0 → 30 → 55 → 60 → 75 → 149 → 200 → 300 → 425 → 600 → 700 → 700 → 825 → 1050 → 1050</p>

            <h3>C-LOOK (<i>Circular LOOK</i>)</h3>
            <p>Total lintasan yang dilalui: 1.789 track.</p>
            <p>Urutan Lintasan:</p>
            <p>1234 → 1300 → 1300 → 1450 → 1600 → 1600 → 1775 → 1900 → 1950 → 2003 → 30 → 55 → 60 → 75 → 149 → 200 → 300 → 425 → 600 → 700 → 700 → 825 → 1050 → 1050</p>

            <h3>PTPD (<i>Priority Track Processing Dispatching</i>)</h3>
            <p>Total lintasan yang dilalui: 3.177 track.</p>
            <p>Urutan Lintasan:</p>
            <p>30 → 55 → 60 → 75 → 149 → 200 → 400 → 425 → 600 → 700 → 700 → 825 → 1050 → 1050 → 1300 → 1300 → 1450 → 1600 → 1600 → 1600 → 1775 → 1900 → 1950 → 2003</p>
            <!-- <ul>
              <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            </ul> -->
            
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

<?php
include "../include/footer.php"
?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/typed.js/typed.umd.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>