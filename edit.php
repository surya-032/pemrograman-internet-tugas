<?php
$host = 'prognet.localnet';
$username = '2205551032';
$password = '2205551032';
$database = 'db_2205551032';

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM biodata WHERE ID = $id";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
    <link rel="stylesheet" href="styles-form-input.css"> 
</head>
<body>
    <div class="container">
        <center>
        <h1>Edit Biodata Mahasiswa</h1>
        </center>
        <div class="form-container bg-primary">
        <div class="form-container">
            <h1 class="display-5">Form Biodata Mahasiswa Fakultas Teknik</h1>
            <div class="gambar">
                <img src="logounud.png" alt="avatar">
            </div>
            <br>
            <form action="update.php" method="POST" id="biodata-form">
            <input type="hidden" name="id" value="<?php echo $row["ID"]; ?>">
            


              <!-- --------- INPUT NAMA ---------- -->
                <div class="form-group">
                    <label for="nama">Nama Lengkap * :</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row["Nama"]; ?>">
                    <div class="error-message" id="nama-error"></div>
                </div>
                <!-- --------- INPUT NIM ---------- -->
                <div class="form-group">
                    <label for="telepon">NIM * :</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $row["Nim"]; ?>">
                    <div class="error-message" id="nim-error"></div>
                </div>
               <!-- --------- INPUT PASSWORD ---------- -->
                <div class="form-group">
                    <label for="password">Password * :</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $row["Password"]; ?>">
                    <div class="error-message" id="password-error"></div>
                </div>
                <!-- --------- INPUT EMAIL ---------- -->
                <div class="form-group">
                    <label for="email">Email * :</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row["Email"]; ?>">
                    <div class="error-message" id="email-error"></div>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir * :</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $row["Tanggal_Lahir"]; ?>">
                    <div class="error-message" id="tanggal-error"></div>
                </div>
                <!-- --------- INPUT GENDER/JENIS KELAMIN ---------- -->
                <div class="form-group">
                    <label for="gender">Gender / Jenis Kelamin * :</label><br>
                    <!-- <input type="radio" class="form-control" id="gender" name="gender" value="<?php echo $row["Jenis_Kelamin"]; ?>"> -->
                    <input type="radio" name="gender" value="laki-laki" <?php if ($row["Jenis_Kelamin"] == "laki-laki") echo "checked"; ?>> Laki-laki <br>
                    <input type="radio" name="gender" value="perempuan" <?php if ($row["Jenis_Kelamin"] == "perempuan") echo "checked"; ?>> Perempuan <br>
                    <div class="error-message" id="gender-error"></div>
                </div>
                <!-- --------- INPUT SEMESTER ---------- -->
                <div class="form-group">
    <label for="semester">Centang Semester Yang Anda Ditempuh * : </label><br>
    <input type="checkbox" name="semester[]" value="semester 1" <?php if (strpos($row["Semester"], "semester 1") !== false) echo "checked"; ?>> Semester 1 <br>
    <input type="checkbox" name="semester[]" value="semester 2" <?php if (strpos($row["Semester"], "semester 2") !== false) echo "checked"; ?>> Semester 2 <br>
    <input type="checkbox" name="semester[]" value="semester 3" <?php if (strpos($row["Semester"], "semester 3") !== false) echo "checked"; ?>> Semester 3 <br>
    <input type="checkbox" name="semester[]" value="semester 4" <?php if (strpos($row["Semester"], "semester 4") !== false) echo "checked"; ?>> Semester 4 <br>
    <input type="checkbox" name="semester[]" value="semester 5" <?php if (strpos($row["Semester"], "semester 5") !== false) echo "checked"; ?>> Semester 5 <br>
    <input type="checkbox" name="semester[]" value="semester 6" <?php if (strpos($row["Semester"], "semester 6") !== false) echo "checked"; ?>> Semester 6 <br>
    <input type="checkbox" name="semester[]" value="semester 7" <?php if (strpos($row["Semester"], "semester 7") !== false) echo "checked"; ?>> Semester 7 <br>
    <input type="checkbox" name="semester[]" value="semester 8" <?php if (strpos($row["Semester"], "semester 8") !== false) echo "checked"; ?>> Semester 8 <br>
    <div class="error-message" id="semester-error"></div>
</div>

                <!-- --------- INPUT PROGRAM STUDI ---------- -->
                <div class="form-group">
    <label for="program-studi">Program Studi * :</label>
    <select id="program-studi" name="program-studi">
        <option value="Teknik Arsitektur" <?php if ($row["Program_Studi"] === "Teknik Arsitektur") echo "selected"; ?>>Teknik Arsitektur</option>
        <option value="Teknik Sipil" <?php if ($row["Program_Studi"] === "Teknik Sipil") echo "selected"; ?>>Teknik Sipil</option>
        <option value="Teknik Mesin" <?php if ($row["Program_Studi"] === "Teknik Mesin") echo "selected"; ?>>Teknik Mesin</option>
        <option value="Teknik Elekto" <?php if ($row["Program_Studi"] === "Teknik Elekto") echo "selected"; ?>>Teknik Elekto</option>
        <option value="Teknologi Informasi" <?php if ($row["Program_Studi"] === "Teknologi Informasi") echo "selected"; ?>>Teknologi Informasi</option>
        <option value="Teknik Industri" <?php if ($row["Program_Studi"] === "Teknik Industri") echo "selected"; ?>>Teknik Industri</option>
        <option value="Teknik Lingkungan" <?php if ($row["Program_Studi"] === "Teknik Lingkungan") echo "selected"; ?>>Teknik Lingkungan</option>
    </select>
</div> <br>

                <!-- --------- INPUT ALAMAT ---------- -->
                <div class="form-group">
    <label for="alamat">Alamat Lengkap Anda * :</label>
    <textarea id="alamat" name="alamat"><?php echo $row["Alamat"]; ?></textarea>
    <div class="error-message" id="alamat-error"></div>
</div>

                <!-- <label for="alamat">Alamat Lengkap Anda * :</label>
                <input type="text" id="alamat" name="alamat">
                <div class="error-message" id="alamat-error"></div><br> -->
                <!-- --------- INPUT USIA/UMUR ---------- -->
                <div class="form-group">
    <label for="usia">Usia/Umur * :</label>
    <input type="text" id="usia" name="usia" value="<?php echo $row["Umur"]; ?>">
    <div class="error-message" id="usia-error"></div>
</div>
<br>
                <!-- --------- INPUT CONTACT / TELEPON ---------- -->
                <div class="form-group">
    <label for="telepon">NO.Telepon * :</label>
    <input type="text" id="telepon" name="telepon" value="<?php echo $row["No_Telp"]; ?>">
    <div class="error-message" id="telepon-error"></div>
</div>
<br>
                <button type="submit" class="submit">Update</button>
                
            </form>

    </div>
</body>
        <script src="script-form-input.js"></script>
</html>
