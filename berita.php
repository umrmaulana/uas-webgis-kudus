<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Dinas Sosial Kabupaten Kudus</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="images/reelicon.png" type="image/x-icon" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span> Telpon : (0291) 438-152 </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span> Email : dinkes@kuduskab.go.id </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profil </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="peta.php">Peta </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="berita.php">Berita </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <div class="container layout_padding">
    <?php
    $hasil = "select * from berita";
    foreach ($conn->query($hasil) as $row)
    : ?>
      <div class="row p-4">
        <div class="col-lg-5">
          <img src="<?php echo $row['foto']; ?>" alt="content" style="width: 450px; height:260px">
        </div>
        <div class="col-lg-7">
          <h2><?php echo $row['judul']; ?></h2>
          <p><?php echo $row['created_at']; ?></p>
          <p><?php echo substr($row['desc'], 0, 200) . "..."; ?></p>
          <a href="">selengkapnya &raquo;</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- info section -->
  <section class="info_section">
    <div class="container">
      <div class="info_bottom layout_padding2">
        <div class="info_row">
          <div class="col-md-6 col-lg-4">
            <h5>Kontak</h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Jl. Mejobo No. 99 Kabupaten Kudus, 59319 </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> Call 0811-6346-767 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span> dinsosp3ap2kb.kudus@kuduskab.com </span>
              </a>
            </div>
            <div class="social_box">
              <a href="https://www.facebook.com/dinassosialp3ap2kb" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://x.com/dinsoskudus" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/dinsoskudus/" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="info_post">
              <h5>Jam Pelayanan</h5>
              <div class="info_contact">
                <a href=""><span>Senin - Kamis : 07.00 - 15.00</span></a>
                <a href=""><span>Jumat : 07.00 - 11.00</span></a>
                <a href=""><span>Sabtu - Minggu : Libur</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d83395.18811113582!2d110.85115900053977!3d-6.826511814711959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c52013f77e07%3A0xf1b69e7eb0accc44!2sDinas%20Sosial%20P3AP2KB%20Kabupaten%20Kudus!5e0!3m2!1sid!2sus!4v1716984577446!5m2!1sid!2sus"
              width="350" height="250" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Powered By
        <a href="https://html.design/">Umar Maulana</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
    integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>