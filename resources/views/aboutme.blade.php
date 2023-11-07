<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/aboutme.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>About Me</title>
</head>
<body>
    <header>
        <h1>About Me</h1>
        <a href="{{ route('home') }}" class="btn btn-warning">Kembali Ke Menu Utama</a>
    </header>
    <main>
        <section id="biodata">
            <h2><center>Biodata</center></h2>
            <img src="image/profile.JPG" alt="Foto Profil">
            <p>Nama Lengkap: I Putu Gede Surya Pratama</p>
            <p>Umur: 19 tahun</p>
            <p>Alamat: Tianyar Barat</p>
            <p>Email: suryapratamaigede123@gmail.com</p>
        </section>
        <section id="deskripsi">
            <h2>Deskripsi Singkat</h2>
            <p>Perkenalkan nama saya I Putu Gede Surya Pratama, biasa disapa Surya, saya berasal dari Desa Tianyar Barat Kecamatan Kubu Kabupaten Karangasem. Umur saya 19 tahun, lahir di Denpasar tanggal 6 Mei 2004. Saya menyelesaikan SMK di SMK Negeri Bali Mandara pada tahun 2022 dengan jurusan Teknik, dan saat ini saya masih menempuh pendidikan sarjana di Universitas Udayana bidang Studi Teknologi Informasi. Program, Fakultas Teknik.</p>
        </section>
        <section id="pendidikan">
            <h2>Pendidikan</h2>
            <ul>
                <li>
                    <strong>Universitas Udayana</strong> - Tahun 2022-sekarang
                    <p>Dengan mengambil Program Studi Teknologi Informasi di Fakultas Teknik</p>
                </li>
                <li>
                    <strong>SMK Negeri Bali Mandara</strong> - Tahun 2019-2022
                    <p>Dengan mengambil Jurusan Teknik Komputer dan Jaringan (TKJ)</p>
                </li>
                <li>
                    <strong>SMP Negeri 3 Kubu</strong> - Tahun 2016-2019
                    <p>Dengan Bersekolah menengah pertama di Kecamatan Kubu, Kabupaten Karangasem</p>
                </li>
                <li>
                    <strong>SD Negeri 4 Tianyar Barat</strong> - Tahun 2016-2019
                    <p>Dengan Bersekolah Dasar di Desa Tianyar Barat Kecamatan Kubu, Kabupaten Karangasem</p>
                </li>
            </ul>
        </section>
        <section id="skill">
            <h2>Skill</h2>
            <ul>
                <li>HTML/CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>Computer Networking</li>
                <li>C</li>
            </ul>
        </section>
        <section id="skill">
            <h2>Pengalaman</h2>
            <ul>
                <li>Web Developer di Bali Spiritual healing</li>
                <li>Pernah magang di Kantor DPRD Karangasem </li>
            </ul>
        </section>
    </main>
    <footer>
        <div class="top-footer">
          <p>Surya Pratama</p>
        </div>
        <div class="bottom-footer">
          <p>Copyright &copy; <a style="text-decoration: none;">Surya Pratama</a> - All rights reserved </p>
        </div>
      </footer>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/aboutme.css">
    <title>About Me</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-dark-blue">
  <a class="navbar-brand text-white" href="#">I Putu Gede Surya Pratama</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active mr-5">
        <a class="nav-link text-white" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white mr-5" href="{{ route('dashboard') }}">Dashboard Tugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white mr-5" href="{{ route('aboutme') }}">About Me</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-white my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
         <br> <h2><center>About Me<center></h2>
          <p>Let me introduce myself, my name is I Putu Gede Surya Pratama, usually called Surya, I come from Tianyar Barat Village, Kubu District, Karangasem Regency. I am 19 years old, born in Denpasar on May 6 2004. I completed vocational school at the Bali Mandara State Vocational School in 2022 majoring in Engineering, and currently I am still studying undergraduate at Udayana University in the field of Information Technology Studies. Program, Faculty of Engineering</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="image/background.JPG"class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>My Identity</h3>
            <p class="fst-italic">
              Dibawah ini merupakan deskripsi singkat tentang saya :
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> 6 May 2004</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong> - </li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> +6287765495607</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> West Tianyar Village, Kubu Sub-district, Karangasem Regency, Bali Province</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> 19 Tahun</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Born:</strong> Denpasar</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong> suryapratamaigede123@example.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> 087765495607</li>
                </ul>
              </div>
            </div>
            <!-- <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> -->
          </div>
        </div>

      </div>
    </section>
    
 
    
</body>
</html> -->