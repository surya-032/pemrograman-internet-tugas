<?php


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $nama = $_GET["nama"];
    $nim = $_GET["nim"];
    $password = $_GET["password"];
    $email = $_GET["email"];
    $tanggal = $_GET["tanggal"];
    $gender = $_GET["gender"];
    $semester = isset($_GET["semester"]) ? implode(', ', $_GET["semester"]) : "";
    $programStudi = $_GET["program-studi"];
    $alamat = $_GET["alamat"];
    $usia = $_GET["usia"];
    $telepon = $_GET["telepon"];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/view.css">

    <title>Form Submission Result</title>
</head>
<body>
    
<div class="filter">
    <section>
  <h2>DATA TELAH BERHASIL DI SUBMIT</h2>
  <section>
  <div style="text-align: center;">
  <a href="{{ route('input') }}" class="btn btn-danger">KEMBALI KE FORM BIODATA MAHASISWA</a> 
  <a href="{{ route('dashboard') }}" class="btn btn-primary">DASHBOARAD BIODATA MAHASISWA</a>     
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
      <p>Nama: {{ $email }}</p>

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