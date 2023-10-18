<?php
$host = 'prognet.localnet';
$username = '2205551032';
$password = '2205551032';
$database = 'db_2205551032';

$koneksi = new mysqli($host, $username, $password, $database);

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

    // ID yang akan diubah (gantilah ini dengan ID yang sesuai)
    $id = $_POST["id"];

    // Query UPDATE
// Query UPDATE
$sql = "UPDATE biodata SET Nama='$nama', Nim='$nim', Password='$password', Email='$email', Tanggal_Lahir='$tanggal', Jenis_Kelamin='$gender', Semester='$semester', Program_Studi='$programStudi', Alamat='$alamat', Umur='$usia', No_Telp='$telepon' WHERE ID=$id";

    if ($koneksi->query($sql) === TRUE) {
        echo "<center> Data telah diperbarui di database.<center>";
     
        
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Update Data</title>

</head>
<body>
<a href="semua-data.php" class="btn btn-primary">KEMBALI KE BIODATA MAHASISWA</a>
</body>
</html>