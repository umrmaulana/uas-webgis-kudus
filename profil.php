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

  <title>Dinas Kesehatan Kabupaten Kudus</title>

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
  <!-- org chart -->
  <script src="js/orgchart.js"></script>
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

  <!-- profile section -->
  <section class="about_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="detail-box text-justify">
            <div class="heading_container mb-2">
              <h2>Kabupaten <span>Kudus</span></h2>
            </div>
            <p>Kabupaten Kudus adalah sebuah kabupaten di Provinsi Jawa Tengah, yang
              terletak di jalur pantai timur laut Jawa Tengah antara Kota Semarang dan Kota
              Surabaya. Kota ini berjarak 51 kilometer dari timur Kota Semarang.
              Kudus dikenal sebagai kota penghasil rokok (kretek) terbesar di Jawa Tengah
              dan juga dikenal sebagai kota santri. Kota ini adalah pusat perkembangan agama
              Islam pada abad pertengahan. Hal ini dapat dilihat dari adanya 2 makam wali/sunan,
              yaitu Sunan Kudus dan Sunan Muria.
            </p>
            <p>
              Batas wilayah Kabupaten Kudus meliputi :
            </p>
            <ul>
              <li>
                <p>Utara : Kabupaten Jepara</p>
              </li>
              <li>
                <p>Timur : Kabupaten Pati</p>
              </li>
              <li>
                <p> Selatan : Kabupaten Gerobogan dan Kabupaten Demak</sp>
              </li>
              <li>
                <p>
                  Barat : Kabupaten Demak</p>
              </li>
            </ul>
            <p>
              Kabupaten Kudus terdiri dari 9 kecamatan, 9 kelurahan, dan 123 desa. Pusat
              pemerintahan berada di Kecamatan Kota Kudus. Sebagian besar wilayah Kabupaten
              Kudus adalah dataran rendah. Di sebagian wilayah utara terdapat pegunungan yaitu
              Gunung Muria, dengan Puncak Saptorenggo (1.602 m dpl), Puncak Rahtawu (1.522
              m dpl), dan Puncak Argojembang (1.410 m dpl). Sungai terbesar adalah Sungai
              Serang yang mengalir di sebelah barat, membatasi Kabupaten Kudus dengan
              Kabupaten Demak. Kudus dibelah oleh Sungai Gelis di bagian tengah sehingga
              terdapat istilah Kudus Barat dan Kudus Timur.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="img-box d-flex justify-content-end">
            <img src="images/kab-kudus.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end profile section -->

  <!-- about section -->
  <section class="about_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="" />
            <h5>H.M HARTOPO DR, S.T, M.M, M.H</h5>
            <h6>Bupati Kabupaten Kudus</h6>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Maklumat <span>Pelayanan</span></h2>
            </div>
            <ul>
              <?php $hasil = "select * from maklumat_pelayanan";
              foreach ($conn->query($hasil) as $row)
              : ?>
                <li>
                  <p>
                    <?php echo $row['maklumat']; ?>
                  </p>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- book section -->
  <section class="book_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col">
          <form>
            <h4>Visi</h4>
            <p>
              Kudus bangkit menuju Kabupaten modern, religius, cerdas dan
              sejahtera.
            </p>
          </form>
        </div>
        <div class="col">
          <form>
            <h4>Misi</h4>
            <p>
              Mewujudkan masyarakat Kudus yang berkualitas, kreatif, inovatif
              dengan memanfaatkan teknologi dan multimedia.
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- strucktur section -->
  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Bagan <span>Organisasi</span></h2>
      </div>
      <div style="width: 100%; height: 400px" id="tree" class=""></div>
    </div>
  </section>
  <!-- end strucktur -->

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
                <span> Jl. Diponegoro No. 15 Kabupaten Kudus, 59312 </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> Call (0291) 438-152 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span> dinkes@kuduskab.go.id </span>
              </a>
            </div>
            <div class="social_box">
              <a href="https://www.facebook.com/dinkes.kabkudus" target="_blank">
                <i class="fa fa-facebook col-6" aria-hidden="true"></i>
              </a>
              <a href="https://www.youtube.com/@DIKTVchannel" target="_blank">
                <i class="fa fa-youtube col-6" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/dinkeskabkudus" target="_blank">
                <i class="fa fa-instagram col-6" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="info_post">
              <h5>Jam Pelayanan</h5>
              <div class="info_contact">
                <a href=""><span>Senin - Kamis : 07.00 - 15.15</span></a>
                <a href=""><span>Jumat : 07.00 - 11.15</span></a>
                <a href=""><span>Sabtu - Minggu : Libur</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.718205201796!2d110.84662787584232!3d-6.804094593193331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c4d0aa8a368d%3A0xbe887578cf387f2e!2sDinas%20Kesehatan%20Kabupaten%20Kudus!5e0!3m2!1sid!2sid!4v1719392857114!5m2!1sid!2sid"
              width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
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
        <a href="https://server.umrmaulana.my.id/">Umar Maulana</a>
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
  <!-- data struktur -->
  <script src="js/data.php"></script>
  <script>
    chart.on('click', function (sender, args) {
      return false; // untuk membatalkan event click
    });
  </script>
</body>

</html>