<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- --------- JUDUL CONTENT ---------- -->
    <title>Tugas Form Input Biodata</title>
    <!-- --------- MAIN CSS ---------- -->
    <link rel="stylesheet" href="css/home.css">
    <!-- --------- FORM INPUT CSS ---------- --> 
    <link rel="stylesheet" href="css/input.css"> 
    <!-- --------- BOOSTRAP CSS ---------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <!-- --------- NAVBAR ---------- -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                  <!-- --------- MENU NAVBAR ---------- -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutme') }}">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard Data</a>
                    </li>
                </ul>
                <!-- --------- END MENU NAVBAR ---------- -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- --------- END NAVBAR ---------- -->

    <!-- --------- FORM INPUT ---------- -->
    <div class="form-container bg-primary">
        <div class="form-container">
            <h1 class="display-5">Form Biodata Mahasiswa Fakultas Teknik</h1>
            <div class="gambar">
                <img src="image/logounud.png" alt="avatar">
            </div>
            <br>
            <form action="{{'view'}}" method="GET" id="biodata-form">
              <!-- --------- INPUT NAMA ---------- -->
                <div class="form-group">
                    <label for="nama">Nama Lengkap * :</label>
                    <input type="text" id="nama" name="nama">
                    <div class="error-message" id="nama-error"></div>
                </div>
                <!-- --------- INPUT NIM ---------- -->
                <div class="form-group">
                    <label for="telepon">NIM * :</label>
                    <input type="text" id="nim" name="nim">
                    <div class="error-message" id="nim-error"></div>
                </div>
               <!-- --------- INPUT PASSWORD ---------- -->
                <div class="form-group">
                    <label for="password">Password * :</label>
                    <input type="password" id="password" name="password">
                    <div class="error-message" id="password-error"></div>
                </div>
                <!-- --------- INPUT EMAIL ---------- -->
                <div class="form-group">
                    <label for="email">Email * :</label>
                    <input type="email" id="email" name="email">
                    <div class="error-message" id="email-error"></div>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir * :</label>
                    <input type="date" id="tanggal" name="tanggal">
                    <div class="error-message" id="tanggal-error"></div>
                </div>
                <!-- --------- INPUT GENDER/JENIS KELAMIN ---------- -->
                <div class="form-group">
                    <label for="gender">Gender / Jenis Kelamin * :</label><br>
                    <input type="radio" name="gender" value="laki-laki"> Laki-laki <br>
                    <input type="radio" name="gender" value="perempuan"> Perempuan <br>
                    <div class="error-message" id="gender-error"></div>
                </div>
                <!-- --------- INPUT SEMESTER ---------- -->
                <div class="form-group">
                    <label for="semester">Centang Semester Yang Anda Ditempuh * : </label><br>
                    <input type="checkbox" name="semester[]" value="semester 1"> Semester 1 <br>
                    <input type="checkbox" name="semester[]" value="semester 2"> Semester 2 <br>
                    <input type="checkbox" name="semester[]" value="semester 3"> Semester 3 <br>
                    <input type="checkbox" name="semester[]" value="semester 4"> Semester 4 <br>
                    <input type="checkbox" name="semester[]" value="semester 5"> Semester 5 <br>
                    <input type="checkbox" name="semester[]" value="semester 6"> Semester 6 <br>
                    <input type="checkbox" name="semester[]" value="semester 7"> Semester 7 <br>
                    <input type="checkbox" name="semester[]" value="semester 8"> Semester 8 <br>
                    <div class="error-message" id="semester-error"></div>
                </div>
                <!-- --------- INPUT PROGRAM STUDI ---------- -->
                <div class="form-group">
                    <label for="program-studi">Program Studi * :</label>
                    <select id="program-studi" name="program-studi">
                      <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                      <option value="Teknik Sipi">Teknik Sipil</option>
                      <option value="Teknik Mesin">Teknik Mesin</option>
                      <option value="Teknik Elekto">Teknik Elektro</option>
                      <option value="Teknologi Informasi">Teknologi Informasi</option>
                      <option value="Teknik Industri">Teknik Industri</option>
                      <option value="Teknik Lingkungan">Teknik Lingkungan</option>  
                  </select>
                </div><br>
                <!-- --------- INPUT ALAMAT ---------- -->
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap Anda * :</label>
                    <input type="text" id="alamat" name="alamat">
                    <div class="error-message" id="alamat-error"></div>
                </div>
                <!-- <label for="alamat">Alamat Lengkap Anda * :</label>
                <input type="text" id="alamat" name="alamat">
                <div class="error-message" id="alamat-error"></div><br> -->
                <!-- --------- INPUT USIA/UMUR ---------- -->
                <div class="form-group">
                    <label for="usia">Usia/Umur * :</label>
                    <input type="text" id="usia" name="usia">
                    <div class="error-message" id="usia-error"></div>
                </div><br>
                <!-- --------- INPUT CONTACT / TELEPON ---------- -->
                <div class="form-group">
                    <label for="telepon">NO.Telepon * :</label>
                    <input type="text" id="telepon" name="telepon">
                    <div class="error-message" id="telepon-error"></div>
                </div><br>
                <button type="submit" class="submit">Submit</button>
                
            </form>
            
            <!-- --------- END FORM INPUT ---------- -->
        </div>
    </div>

     <!-- --------- FOOTER ---------- -->
     <footer>
      <div class="top-footer">
          <p>Surya Pratama</p>
      </div>
      <div class="bottom-footer">
          <p>Copyright &copy; <a href="#home" style="text-decoration: none; color: blue;">Surya Pratama</a> - All rights reserved</p>
      </div>
    </footer>

   <!-- --------- END FOOTER ---------- -->
   <script src="js/home.js"></script>
    <!-- --------- FORM INPUT JS ---------- -->
    <script src="js/input.js"></script>
    <!-- --------- BOOSTRAP JS ---------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
