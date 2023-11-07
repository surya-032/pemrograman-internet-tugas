<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Title -->
  <title>Surya Pratama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="">Surya Pratama</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Me</a></li>
          <li><a class="nav-link scrollto" href="#services">List Tugas</a></li>
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image:url('{{ asset('assets/img/home.jpg') }}');">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <p class="display-6 color-d">Hello, Guys!</p>
          <h1 class="hero-title mb-4">I am Surya Pratama</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
          <a href="{{ ('dashboard') }}">
            <button class="btn btn-primary btn-lg">Dashboard Biodata Mahasiswa</button>
        </a>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/profile.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>I Putu Gede Surya Pratama</span></p>
                        <p><span class="title-s">Age: </span> <span>19 Years Old</span></p>
                        <p><span class="title-s">Email: </span> <span>suryapratamaigede123@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>087765495607</span></p>
                        <p><span class="title-s">Birth: </span> <span>Denpasar, 06 May 2004</span></p>
                        <p><span class="title-s">Address: </span> <span>West Tianyar village, Kubu Subtrict, Karangasem Regency, Bali Province</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">My Education</p>
                    <span>SD Negeri 4 Tianyar Barat</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>SMP Negeri 3 Kubu</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>SMK Negeri Bali Mandara</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Universitas Udayana</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                    Let me introduce myself, my name is I Putu Gede Surya Pratama, usually called Surya, I come from Tianyar Barat Village, Kubu District, Karangasem Regency. I am 19 years old, born in Denpasar on May 6 2004. I completed vocational school at the Bali Mandara State Vocational School in 2022 majoring in Engineering, and currently I am still studying undergraduate at Udayana University in the field of Information Technology Studies. Program, Faculty of Engineering.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                List Tugas
              </h3>
              <p class="subtitle-a">
                Dibawah ini merupakan list Tugas Mata Kuliah Pemrograman Internet
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-github"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Tugas 1</h2>
                <p class="s-description text-center">
                  Mendokumentasikan Pull & Push pada Github Lokal Komputer serta menguploadnya ke Web Server
                </p>
                <a href="assets/tugas/2205551032_I Putu Gede Surya Pratama_Pemrograman Internet D.pdf">
                <button class="btn btn-primary">Klik Disini</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Tugas 2</h2>
                <p class="s-description text-center">
                  Membuat Form Input data dengan validasi input menggunakan Pemrograman Java Script (JS)
                </p>
                <a href="{{('/mahasiswa/create')}}"> 
                <button class="btn btn-primary">Klik Disini</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-file"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Tugas 3</h2>
                <p class="s-description text-center">
                  Menampilkan hasil form input data yang telah diinput dengan menggunakan php (Expired)
                </p>
                <button class="btn btn-primary">Klik Disini</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-table"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Tugas 4</h2>
                <p class="s-description text-center">
                  Membuat Hasil form input datanya dengan action (Insert, Delete, Update) di MYSQL (Expired)
                </p>
                <button class="btn btn-primary">Klik Disini</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Tugas 5</h2>
                <p class="s-description text-center">
                Menginstall Laravel Framework dan menggunakan route, controller, serta view pada website
                </p>
                <button class="btn btn-primary">Klik Disini</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Tugas 6</h2>
                <p class="s-description text-center">
                Menerapkan CRUD pada Data Model dengan form pada Laravel Framework
                </p>
                <button class="btn btn-primary">Klik Disini</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Surya Pratama</strong>. All Rights Reserved</p>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">Surya Pratama</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>