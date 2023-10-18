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

// Perform a database query to retrieve data from the "biodata" table
$sql = "SELECT ID, Nama, Nim, Password, Email, Tanggal_Lahir, Jenis_Kelamin, Semester, Program_Studi, Alamat, Umur, No_Telp FROM biodata";
$result = $koneksi->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="semua-data.css">
    <title>Biodata Mahasiswa</title>
</head>
<body>
<div class="filter">
    <section>
        <h2>BIODATA MAHASISWA</h2>
    </section>
    <div style="text-align: center;">
        <a href="form-input.html" class="btn btn-warning">KEMBALI KE FORM INPUT</a>
        <a href="dashboard.html" class="btn btn-primary">KEMBALI KE DASHBOARD</a>
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
            <!-- <th>Password</th>-->
            <!-- <th>Email</th> -->
            <!-- <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Semester</th>
            <th>Program Studi</th>
            <th>Alamat Lengkap</th>
            <th>Umur</th>
            <th>Telepon</th> -->
            <th>Action</th> 
        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["Nama"] . "</td>";
                echo "<td>" . $row["Nim"] . "</td>";
                // echo "<td>" . $row["Password"] . "</td>";
                //  echo "<td>" . $row["Email"] . "</td>";
                // echo "<td>" . $row["Tanggal_Lahir"] . "</td>";
                // echo "<td>" . $row["Jenis_Kelamin"] . "</td>";
                // echo "<td>" . $row["Semester"] . "</td>";
                // echo "<td>" . $row["Program_Studi"] . "</td>";
                // echo "<td>" . $row["Alamat"] . "</td>";
                // echo "<td>" . $row["Umur"] . "</td>";
                // echo "<td>" . $row["No_Telp"] . "</td>";
                echo "<td>
                <center>
                        <a href='detail.php?id=" . $row["ID"] . "' class='btn btn-warning'>Detail</a><br>
                        <br><a href='edit.php?id=" . $row["ID"] . "' class='btn btn-primary'>Edit</a><br>
                       <br> <a href='hapus.php?id=" . $row["ID"] . "' class='btn btn-danger' onclick='return confirmDelete();' >Hapus</a> 
                 <center>     
                       </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='13'>Tidak ada data biodata tersedia.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
function confirmDelete() {
    return confirm("Apakah Anda yakin ingin menghapus data tersebut?");
}
</script>
<script>
function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.querySelector("table");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
        td = tr[i].getElementsByTagName("td");
        var found = false;

        for (var j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                found = true;
                break;
            }
        }

        if (found) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}

function searchRow(input) {
    var filter, table, tr, td, i, txtValue;
    filter = input.value.toUpperCase();
    table = input.closest("table");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        var found = false;

        for (var j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                found = true;
                break;
            }
        }

        if (found) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>

</body>


</html>
