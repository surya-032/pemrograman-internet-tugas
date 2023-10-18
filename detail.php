<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="tabel.css">
    <title>Biodata Mahasiswa</title>
</head>
<body>

<div class="filter">
    <section>
        <h2>DETAIL BIODATA MAHASISWA</h2>
    </section>
    <div style="text-align: center;">
        <a href="form-input.html" class="btn btn-warning">KEMBALI KE FORM INPUT</a>
        <a href="semua-data.php" class="btn btn-primary">KEMBALI KE BIODATA MAHASISWA</a>
        <div class="search-container">
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari data...">
    </div>
    </div>
    <table class="table table-striped table-dark">
        <thead>
            
        <tr>
            <th>ID</th>
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
            <th>Action</th> 
        </tr>
        </thead>
        <tbody>
        <?php
         
         // Mengambil ID dari URL
         if (isset($_GET['id'])) {
             $id = $_GET['id'];
         
             // Lakukan koneksi ke database
             $mysqli = new mysqli('prognet.localnet', '2205551032', '2205551032', 'db_2205551032');
         
             // Periksa apakah koneksi berhasil
             if ($mysqli->connect_error) {
                 die('Koneksi ke database gagal: ' . $mysqli->connect_error);
             }
         
             // Lakukan query untuk mengambil data berdasarkan ID
             $query = "SELECT * FROM biodata WHERE ID = $id";
             $result = $mysqli->query($query);
         
             if ($result) {
                 // Fetch and display the data in the existing table
                 while ($row = $result->fetch_assoc()) {
                     echo "<tr>";
                     echo "<td>" . $row["ID"] . "</td>";
                     echo "<td>" . $row["Nama"] . "</td>";
                     echo "<td>" . $row["Nim"] . "</td>";
                     echo "<td>" . $row["Password"] . "</td>";
                     echo "<td>" . $row["Email"] . "</td>";
                     echo "<td>" . $row["Tanggal_Lahir"] . "</td>";
                     echo "<td>" . $row["Jenis_Kelamin"] . "</td>";
                     echo "<td>" . $row["Semester"] . "</td>";
                     echo "<td>" . $row["Program_Studi"] . "</td>";
                     echo "<td>" . $row["Alamat"] . "</td>";
                     echo "<td>" . $row["Umur"] . "</td>";
                     echo "<td>" . $row["No_Telp"] . "</td>";
                     echo "<td>
                         <center>
                         <a href='edit.php?id=" . $row["ID"] . "' class='btn btn-primary'>Edit</a><br>
                         <a href='hapus.php?id=" . $row["ID"] . "' class='btn btn-danger' onclick='return confirmDelete();'>Hapus</a> 
                         <center>
                     </td>";
                     echo "</tr>";
                 }
         
                 // Tutup koneksi database
                 $mysqli->close();
             } else {
                 echo "Gagal menjalankan query: " . $mysqli->error;
             }
         } else {
             echo "ID tidak ditemukan dalam URL.";
         }
         ?>
         
        
        </tbody>
    </table>




