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

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $idToDelete = $_GET['id'];
    // Query DELETE untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM biodata WHERE ID = $idToDelete";
    
    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
        
        header("Location: semua-data.php"); // Redirect kembali ke halaman dashboard setelah menghapus data
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "ID data yang akan dihapus tidak valid.";
}
?>

