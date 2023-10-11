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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $tanggal = $_POST["tanggal"];
    $gender = $_POST["gender"];
    $semester = isset($_POST["semester"]) ? $_POST["semester"] : [];
    $programStudi = $_POST["program-studi"];
    $alamat = $_POST["alamat"];
    $usia = $_POST["usia"];
    $telepon = $_POST["telepon"];

    // Display the retrieved data

    $formData = [
        "Nama Lengkap: $nama",
        "NIM: $nim",
        "Password: $password",
        "Email: $email",
        "Tanggal Lahir: $tanggal",
        "Gender / Jenis Kelamin: $gender",
    ];

    if (!empty($semester)) {
        $formData[] = "Semester Yang Anda Ditempuh:";
        foreach ($semester as $s) {
            $formData[] = "- $s";
        }
    } else {
        $formData[] = "Anda belum memilih semester.";
    }

    $formData[] = "Program Studi: $programStudi";
    $formData[] = "Alamat Lengkap Anda:";
    $formData[] = $alamat;
    $formData[] = "Usia/Umur: $usia";
    $formData[] = "NO.Telepon: $telepon";

    // Create a string with form data
    $formDataString = implode("\n", $formData);

    // Write form data to a text file
    $fileName = "form-data.txt";
    $formDataString .= "\n";
    $formDataString .= str_repeat("-", 50) . "\n";
    // file_put_contents($fileName, $formDataString);
    file_put_contents($fileName, $formDataString, FILE_APPEND);

    // Display a success message
    // echo "<p>Data has been saved to <strong>$fileName</strong>.</p>"; 
} else {
    echo "<p>Form submission error.</p>";
}
?>

<div class="filter">
    <section>
  <h2>DATA TELAH BERHASIL DI SUBMIT</h2>
  <section>
  <div style="text-align: center;">
  <a href="form-input.html" class="btn btn-danger">KEMBALI KE FORM BIODATA</a>
  <a href="form-data.txt" class="btn btn-warning">FILE SEMUA BIODATA TXT</a>    
  </div>

  <table class="table table-striped table-dark">
  <thead>
    <tr>
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
          foreach ($semester as $s) {
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