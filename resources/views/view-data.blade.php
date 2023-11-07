<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengelolaan | View Data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/view-data.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto" href="{{('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ ('/dashboard') }}">Dashboard Biodata Mahasiswa</a></li>
          <li><a class="nav-link scrollto active" href="#">Pengelolaan Data</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url('{{ asset('assets/img/input1.jpg') }}');">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Welcome To Pengelolaan Data</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Biodata Mahasiswa"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">
  <div class="container">
      <h2 class="text-center">Data Mahasiswa</h2>
      <center><a href="/mahasiswa/create" class="btn btn-primary mb-3 btn-lg"> + Input Data Mahasiswa</a><center><br>
      <!-- Search Bar -->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search Data Mahasiswa" onkeyup="searchTable()" id="searchinput">
        <div class="input-group-append">
          <button class="btn btn-primary btn-lg" id="search-button">Search</button>
        </div>
      </div>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Password</th>
          <th>Email</th>
          <th>Tgl Lahir</th>
          <th>Gender</th>
          <th>Semester</th>
          <th>Prodi</th>
          <th>Alamat</th>
          <th>Umur</th>
          <th>Telepon</th>
          <th>Action Update</th>
          <th>Action Delete</th>
        </tr>
      </thead>
      @foreach($data as $row)
      <tr class="mahasiswa-row">
        <td>{{$row->id}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->nim}}</td>
        <td>{{$row->password}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->tanggal}}</td>
        <td>{{$row->gender}}</td>
        <td>{{$row->semester}}</td>
        <td>{{$row->program_studi}}</td>
        <td>{{$row->alamat}}</td>
        <td>{{$row->usia}}</td>
        <td>{{$row->telepon}}</td>
        <td>
  <form action="/mahasiswa/{{$row->id}}/edit" method="GET">
    <button type="submit" class="btn btn-warning">Edit</button>
  </form>
</td>

            
          <td>
      <form action="/mahasiswa/ {{$row->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
      </tr>
      @endforeach
    </table>

    </main>
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

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    

</body>

</html>
