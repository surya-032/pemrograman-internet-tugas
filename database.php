<?php
$host = 'prognet.localnet';
$username = '2205551032'; 
$password = '2205551032'; 
$database = 'db_2205551032'; 

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $tanggal = $_POST["tanggal"];
    $gender = $_POST["gender"];
    $semester = isset($_POST["semester"]) ? implode(', ', $_POST["semester"]) : "";
    $programStudi = $_POST["program-studi"];
    $alamat = $_POST["alamat"];
    $usia = $_POST["usia"];
    $telepon = $_POST["telepon"];

    // Menyimpan data ke dalam tabel "biodata"
    $sql = "INSERT INTO biodata (Nama, Nim, Password, Email, Tanggal_Lahir, Jenis_Kelamin, Semester, Program_Studi, Alamat, Umur, No_Telp) 
            VALUES ('$nama', '$nim', '$password', '$email', '$tanggal', '$gender', '$semester', '$programStudi', '$alamat', '$usia', '$telepon')";

    if ($koneksi->query($sql) === TRUE) {
        echo "<center>Data telah disimpan ke database.<center>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="tabel.css">

    <title>Form Submission Result</title>
</head>
<body>
    
<div class="filter">
    <section>
  <h2>DATA TELAH BERHASIL DI SUBMIT</h2>
  <section>
  <div style="text-align: center;">
  <a href="form-input.html" class="btn btn-danger">KEMBALI KE FORM BIODATA MAHASISWA</a> 
  <a href="dashboard.html" class="btn btn-primary">DASHBOARAD BIODATA MAHASISWA</a>     
  </div>

  <table class="table table-striped table-dark">
  <thead>
    <tr class="bg-primary">
      <th>Nama Lengkap</th>
      <th>NIM</th>
      <th>Password</th>
      <th>Email</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Semester</th>
      <th>Program Studi</th>
      <th>Alamat Lengkap</th>
      <th>Umur</th>
      <th>Telepon</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $nama; ?></td>
      <td><?php echo $nim; ?></td>
      <td><?php echo $password; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $tanggal; ?></td>
      <td><?php echo $gender; ?></td>
      <td>
      <?php
if (!empty($semester)) {
    echo "<ul>";
    $semesterArray = is_array($semester) ? $semester : explode(', ', $semester);
    foreach ($semesterArray as $s) {
        echo "<li>$s</li>";
    }
    echo "</ul>";
} else {
    echo "Anda belum memilih semester.";
}
?>


      </td>
      <td><?php echo $programStudi; ?></td>
      <td><?php echo $alamat; ?></td>
      <td><?php echo $usia; ?></td>
      <td><?php echo $telepon; ?></td>

    </tr>
  </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>