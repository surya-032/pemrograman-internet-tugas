<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Update | Biodata Mahasiswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/input.css') }}">
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
        <li><a class="nav-link scrollto" href="{{ ('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ ('/dashboard/') }}">Dashboard Biodata Mahasiswa</a></li>
          <li><a class="nav-link scrollto active" href="#">Form Update</a></li>
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
          <h1 class="hero-title mb-4">Welcome To Form Update</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Biodata Mahasiswa"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

     <!-- --------- FORM INPUT ---------- -->
     <div class="form-container bg-primary">
        <div class="form-container">
            <h1 class="display-5">Form Update Biodata Mahasiswa</h1>
            <div class="gambar">
                <!-- <img src="# alt="avatar"> -->
            </div>
            <br>
            <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST" id="biodata-form">
              @csrf 
              @method('PUT')
              <!-- --------- INPUT NAMA ---------- -->
                <div class="form-group">
                    <label for="nama">Nama Lengkap * :</label>
                    <input type="text" id="nama" name="nama" value="{{$mahasiswa->nama}}">
                    <div class="error-message" id="nama-error"></div>
                </div>
                <!-- --------- INPUT NIM ---------- -->
                <div class="form-group">
                    <label for="telepon">NIM * :</label>
                    <input type="text" id="nim" name="nim" value="{{$mahasiswa->nim}}">
                    <div class="error-message" id="nim-error"></div>
                </div>
               <!-- --------- INPUT PASSWORD ---------- -->
                <div class="form-group">
                    <label for="password">Password * :</label>
                    <input type="password" id="password" name="password" value="{{$mahasiswa->password}}">
                    <div class="error-message" id="password-error"></div>
                </div>
                <!-- --------- INPUT EMAIL ---------- -->
                <div class="form-group">
                    <label for="email">Email * :</label>
                    <input type="email" id="email" name="email" value="{{$mahasiswa->email}}">
                    <div class="error-message" id="email-error"></div>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir * :</label>
                    <input type="date" id="tanggal" name="tanggal" value="{{$mahasiswa->tanggal}}">
                    <div class="error-message" id="tanggal-error"></div>
                </div>
                <!-- --------- INPUT GENDER/JENIS KELAMIN ---------- -->
                <div class="form-group">
                    <label for="gender">Jenis Kelamin * :</label><br>
                    <input type="radio" name="gender" value="Laki-laki" {{ $mahasiswa->gender === 'Laki-laki' ? 'checked' : '' }}> Laki-laki <br>
                    <input type="radio" name="gender" value="Perempuan"{{ $mahasiswa->gender === 'Perempuan' ? 'checked' : '' }}> Perempuan <br>
                    <div class="error-message" id="gender-error"></div>
                </div>
                <!-- --------- INPUT SEMESTER ---------- -->
                <div class="form-group">
                    <label for="semester">Centang Semester Yang Anda Ditempuh * : </label><br>
                    <input type="checkbox" name="semester[]" value="semester 1" {{ str_contains($mahasiswa->semester, 'semester 1') ? 'checked' : '' }}> Semester 1 <br>
                    <input type="checkbox" name="semester[]" value="semester 2" {{ str_contains($mahasiswa->semester, 'semester 2') ? 'checked' : '' }}> Semester 2 <br>
                    <input type="checkbox" name="semester[]" value="semester 3" {{ str_contains($mahasiswa->semester, 'semester 3') ? 'checked' : '' }}> Semester 3 <br>
                    <input type="checkbox" name="semester[]" value="semester 4" {{ str_contains($mahasiswa->semester, 'semester 4') ? 'checked' : '' }}> Semester 4 <br>
                    <input type="checkbox" name="semester[]" value="semester 5" {{ str_contains($mahasiswa->semester, 'semester 5') ? 'checked' : '' }}> Semester 5 <br>
                    <input type="checkbox" name="semester[]" value="semester 6" {{ str_contains($mahasiswa->semester, 'semester 6') ? 'checked' : '' }}> Semester 6 <br>
                    <input type="checkbox" name="semester[]" value="semester 7" {{ str_contains($mahasiswa->semester, 'semester 7') ? 'checked' : '' }}> Semester 7 <br>
                    <input type="checkbox" name="semester[]" value="semester 8" {{ str_contains($mahasiswa->semester, 'semester 8') ? 'checked' : '' }}> Semester 8 <br>
                    <div class="error-message" id="semester-error"></div>
                </div>
                <!-- --------- INPUT PROGRAM STUDI ---------- -->
                <!-- <form action="/mahasiswa" method="POST" id="biodata-form"> -->
        <!-- ... Formulir lainnya ... -->
        <div class="form-group">
    <label for="program_studi">Program Studi * :</label>
    <select id="program_studi" name="program_studi">
        <option value="">Pilih Program Studi</option>
        <option value="Teknik Arsitektur" {{ $mahasiswa->program_studi === 'Teknik Arsitektur' ? 'selected' : '' }}>Teknik Arsitektur</option>
        <option value="Teknik Sipil" {{ $mahasiswa->program_studi === 'Teknik Sipil' ? 'selected' : '' }}>Teknik Sipil</option>
        <option value="Teknik Mesin" {{ $mahasiswa->program_studi === 'Teknik Mesin' ? 'selected' : '' }}>Teknik Mesin</option>
        <option value="Teknik Elektro" {{ $mahasiswa->program_studi === 'Teknik Elektro' ? 'selected' : '' }}>Teknik Elektro</option>
        <option value="Teknologi Informasi" {{ $mahasiswa->program_studi === 'Teknologi Informasi' ? 'selected' : '' }}>Teknologi Informasi</option>
        <option value="Teknik Industri" {{ $mahasiswa->program_studi === 'Teknik Industri' ? 'selected' : '' }}>Teknik Industri</option>
        <option value="Teknik Lingkungan" {{ $mahasiswa->program_studi === 'Teknik Lingkungan' ? 'selected' : '' }}>Teknik Lingkungan</option>
    </select>
    <div class="error-message" id="program-studi-error"></div>
</div><br>
                <!-- --------- INPUT ALAMAT ---------- -->
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap Anda * :</label>
                    <input type="text" id="alamat" name="alamat" value="{{$mahasiswa->alamat}}">
                    <div class="error-message" id="alamat-error"></div>
                </div>
                <!-- --------- INPUT USIA/UMUR ---------- -->
                <div class="form-group">
                    <label for="usia">Umur * :</label>
                    <input type="text" id="usia" name="usia" value="{{$mahasiswa->usia}}">
                    <div class="error-message" id="usia-error"></div>
                </div><br>
                <!-- --------- INPUT CONTACT / TELEPON ---------- -->
                <div class="form-group">
                    <label for="telepon">NO.Telepon * :</label>
                    <input type="text" id="telepon" name="telepon" value="{{$mahasiswa->telepon}}">
                    <div class="error-message" id="telepon-error"></div>
                </div><br>
                <center><button type="submit" class="submit btn-lg">Update Data</button><center>
            </form>
            <!-- --------- END FORM INPUT ---------- -->

  

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

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/form-input.js') }}"></script>

  

</body>

</html>