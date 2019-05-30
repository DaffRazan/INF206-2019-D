<!-- Header -->
<header class="masthead bg-primary text-white text-center">
  <div class="container">
    <h1 class="mb-0 mt-5">Selamat datang di <br> NeStor</h1><br>
    <hr class="star-light">
    <h3 class="mb-5">Media Setor Ikan Nelayan berbasis Website</h3><br>
  </div>

  <div class="container-fluid mt-5 d-flex justify-content-center">
    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('assets/img/carousel/nelayan1.jpg'); ?>" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/carousel/nelayan2.jpg'); ?>" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/carousel/nelayan3.jpg'); ?>" class="d-block w-100">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- About Section -->
  <section class="white-section bg-primary text-white mb-0" id="about">
    <div class="container-fluid"><br>
      <h2 class="text-center text-uppercase text-white">About</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto text-justify text-white">
          <p class="lead">Nelayan Setor (NeStor) merupakan aplikasi berbasis website yang dirancang
            untuk para nelayan agar dapat memudahkan pekerjaan mereka dalam menyetor hasil tangkapan ikan dan makhluk laut lainnya ke dalam website. Dengan begitu, apabila nelayan memasukkan data setoran ke dalam website ini, data tidak akan hilang karena tersimpan ke dalam database (sistem).</p>
        </div>
        <div class="col-lg-4 mr-auto text-justify text-white">
          <p class="lead"> Data dijamin secure karena menggunakan password yang dienkripsi. NeStor juga dapat menampung informasi profil nelayan berupa data diri nelayan, ABK, Kapal,
            serta identitas lainnya. Akun ini dikelola oleh Bos Nelayan perkapal.
          </p><br>
        </div>
      </div>
    </div>
  </section>


</header>

<body>
  <div class="copyright text-center text-white">
    <div class="container">
      <h3>Contact Us</h3>
      <span><i class="fas fa-envelope mr-5"></i></span>
      <span><i class="fas fa-phone mb-3"></i></span>
      <p>&copy;2019 Nestor All Rights Reserved</p>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="<?= base_url('home'); ?>">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?= base_url('assets/'); ?>js/jqBootstrapValidation.js"></script>
  <script src="<?= base_url('assets/'); ?>js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= base_url('assets/'); ?>js/freelancer.min.js"></script>

</body>

</html>