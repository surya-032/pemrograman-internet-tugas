<!-- @extends('layout.template')
@section('konten') -->

     <!-- --------- FORM INPUT ---------- -->
     <div class="form-container bg-primary">
        <div class="form-container">
            <h1 class="display-5">Form Biodata Mahasiswa</h1>
            <div class="gambar">
                <!-- <img src="# alt="avatar"> -->
            </div>
            <br>
            <form action="#" method="POST" id="biodata-form">
              @csrf 
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
                    <label for="gender">Jenis Kelamin * :</label><br>
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
                    <option value="Pilih Program Studi">Pilih Program Studi</option>
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
                <!-- --------- INPUT USIA/UMUR ---------- -->
                <div class="form-group">
                    <label for="usia">Umur * :</label>
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
            <!-- @endsection -->