<?php
  $this->load->view('Index/header');
?>

<body>

  <?php
    $this->load->view('Index/navbar');
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Solusi Penyedia Aplikasi Di Lingkungan Peradilan Indonesia</h1>
          <h2>Kami menyediakan aplikasi penunjang inovasi satuan kerja di lingkungan Mahkamah Agung RI</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://youtu.be/00vZ3BOBnMo" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?= base_url('vendor/arsha/'); ?>assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('vendor/arsha/'); ?>assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('vendor/arsha/'); ?>assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('vendor/arsha/'); ?>assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('vendor/arsha/'); ?>assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('vendor/arsha/'); ?>assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('vendor/arsha/'); ?>assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <!--<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
          <!--  <img src="<?= base_url('vendor/arsha/'); ?>assets/img/clients/client-3.png" class="img-fluid" alt="">-->
          <!--</div>-->

          <!--<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
          <!--  <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">-->
          <!--</div>-->

          <!--<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
          <!--  <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">-->
          <!--</div>-->

          <!--<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
          <!--  <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">-->
          <!--</div>-->

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Perkenalkan nama saya Arief Raihandi Azka,S.H., saya bekerja sebagai Staff IT di Mahkamah Syar'iyah Lhokseumawe. Saya mengembangkan beberapa aplikasi penunjang inovasi di lingkungan Mahkamah Agung RI.
              Saya mengembangkan beberapa <strong>APLIKASI</strong> yang terpadu kedalam <strong>HANYA SATU SISTEM.</strong> Adapun kelebihan Aplikasi yang saya kembangkan adalah:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> <strong>Aplikasi Yang Terpadu (SATU SISTEM UNTUK SEMUA APLIKASI)</strong></li>
              <li><i class="ri-check-double-line"></i> <strong>Biaya Pengembangan Relatif Murah</strong></li>
              <li><i class="ri-check-double-line"></i> <strong>Gratis Update Rutin</strong></li>
              <li><i class="ri-check-double-line"></i> <strong>Sistem Pengaplikasian Mudah (Plug & Play)</strong></li>            
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Adapun gagasan awal saya dalam mengembangkan beberapa aplikasi yang disediakan di sini adalah untuk mempermudah masyarakat dalam memperoleh kepastian hukum.
              Dalam memperoleh informasi seputar pengadilan, terkadang masyarakat harus menempuh berbagai macam cara. Oleh karena itu, layanan-layanan yang kami berikan semata-mata untuk mempermudah masyarkat dalam memperoleh informasi seputar Peradilan.
            </p>
            <a href="#services" class="btn-learn-more">Layanan Kami</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Yang Ditawarkan</h2>
          <p>Kelebihan menggunakan jasa kami terletak pada <strong>Jenis Layanan Yang Kami Tawarkan.</strong> Adapun Layanan yang kami tawarkan adalah:</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-timer"></i></div>
              <h4><a href="">Kecepatan Waktu</a></h4>
              <p>Aplikasi dikerjakan oleh Tenaga Ahli yang dapat bekerja dengan ketepatan dan <strong>Akurasi Waktu Tinggi</strong></p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-cloud-upload"></i></div>
              <h4><a href="">Up To Date</a></h4>
              <p>Setiap pengguna akan mendapatkan modul update yang selalu diberikan secara <strong>GRATIS.!!</strong></p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-wallet"></i></div>
              <h4><a href="">Aman Di Kantong</a></h4>
              <p>Biaya pengembangan aplikasi <strong>Aman Di Kantong</strong>. Karena Misi Utama Kami adalah <strong>Mempermudah Masyarakat</strong></p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-support"></i></div>
              <h4><a href="">Support 24/7</a></h4>
              <p>Kami menawarkan layanan support 24 jam untuk menjaga kualitas Layanan kami dan <strong>Kepuasan Pelanggan</strong> Kami</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->
    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Daftar Inovasi</h2>
          <p>Dalam menu ini akan dirangkum beberapa jenis Inovasi baik yang sudah layak tayang, maupun Inovasi yang masih dalam proses pengembangan.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Aplikasi</li>
          <li data-filter=".filter-card">On Proses</li>
          <!-- <li data-filter=".filter-web">Web</li> -->
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Aplikasi Pengawasan Bidang</h4>
              <p>Aplikasi Website Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Pengawasan Bidang"><i class="bx bx-plus"></i></a>
              <a href="https://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Aplikasi Survey Elektronik</h4>
              <p>Aplikasi Website Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Survey Elektronik"><i class="bx bx-plus"></i></a>
              <a href="https://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Aplikasi Persyaratan Elektronik</h4>
              <p>Aplikasi Website Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Persyaratan Elektronik"><i class="bx bx-plus"></i></a>
              <a href="https://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Aplikasi Pengaduan Elektronik</h4>
              <p>Aplikasi Website Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>ssets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Pengaduan Elektronik"><i class="bx bx-plus"></i></a>
              <a href="https://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Aplikasi Auto Responden</h4>
              <p>Aplikasi Android Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Auto Responden"><i class="bx bx-plus"></i></a>
              <a href="phttps://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Aplikasi Cuti Elektronik</h4>
              <p>Aplikasi Website Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Cuti Elektronik"><i class="bx bx-plus"></i></a>
              <a href="https://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Aplikasi Panjar Elektronik</h4>
              <p>Aplikasi Website Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Panjar Elektronik"><i class="bx bx-plus"></i></a>
              <a href="phttps://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Aplikasi Ketersediaan ATK</h4>
              <p>Aplikasi Website Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Ketersediaan ATK"><i class="bx bx-plus"></i></a>
              <a href="https://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
            <h4>Aplikasi Lainnya</h4>
              <p>Aplikasi Website Base</p>
              <a href="<?= base_url('vendor/arsha/'); ?>assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Aplikasi Lainny"><i class="bx bx-plus"></i></a>
              <a href="https://api.whatsapp.com/send/?phone=6282276624504" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Setiap aplikasi yang dikembangkan, akan dikerjakan oleh tenaga ahli yang sudah berpengalaman sejak lama.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Arief Raihandi Azka, S.H.</h4>
                <span>Leader</span>
                <p>Berpengalaman tahun 2017 di bidang Front End Designer</p>
                <div class="social">
                  <a href="https://twitter.com/AriefRaihandi"><i class="ri-twitter-fill"></i></a>
                  <a href="https://www.facebook.com/ariefraihandii/"><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/ariefraihandi/"><i class="ri-instagram-fill"></i></a>
                  <a href="https://www.linkedin.com/in/arief-raihandi-azka-80b6551a5/"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="<?= base_url('vendor/arsha/'); ?>assets/img/team/1652194041008.jfif" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ryan Achdiadsyah</h4>
                <span>Back End Developer</span>
                <p>Berpengalaman tahun 2017 di bidang Back End Developer</p>
                <div class="social">
                  <a href="https://twitter.com/achdiadsyah_"><i class="ri-twitter-fill"></i></a>
                  <a href="https://www.facebook.com/achdiadsyah"><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/achdiadsyah/"><i class="ri-instagram-fill"></i></a>
                  <a href="https://www.linkedin.com/in/ryan-achdiadsyah-399b761bb/"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Silahkan hubungi kami melalui nomor kontak kami di bawah ini.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-center">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Lhokseumawe, Aceh, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ariefraihandiazka@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 822 7662 4504</p>
              </div>

              <iframe src="https://www.google.com/maps/embed/v1/place?q=Lhokseumawe,+Lhokseumawe+City,+Aceh,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>AR Project</h3>
            <p>
              Lhokseumawe <br>
              Aceh<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 822 7662 4504<br>
              <strong>Email:</strong> ariefraihandiazka@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ariefraihandi.biz.id/">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ariefraihandi.biz.id/#about">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ariefraihandi.biz.id/#services">Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ariefraihandi.biz.id/#portfolio">Daftar Inovasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ariefraihandi.biz.id/#team">Team Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://api.whatsapp.com/send/?phone=6282276624504">Pengembangan Aplikasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://api.whatsapp.com/send/?phone=6282276624504">Konsultasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://api.whatsapp.com/send/?phone=6282276624504">Perawatan Aplikasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Berikut Daftar Media Social Pengembang</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/AriefRaihandi" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/ariefraihandii/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/ariefraihandi/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://join.skype.com/invite/hPJTNS8Domzu" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://www.linkedin.com/in/arief-raihandi-azka-80b6551a5/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>AR Project</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">AR Project</a>
      </div>

    
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('vendor/arsha/'); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('vendor/arsha/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('vendor/arsha/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('vendor/arsha/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('vendor/arsha/'); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('vendor/arsha/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('vendor/arsha/'); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('vendor/arsha/'); ?>assets/js/main.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=6282276624504&text=Assalamualaikum" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

</body>

</html>