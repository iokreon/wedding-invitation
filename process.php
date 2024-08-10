<?php
session_start(); // Memulai session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_modal";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];

    // Perintah SQL untuk menambahkan nama dan pesan ke database
    $sql = "INSERT INTO tpesan (nama, pesan) VALUES ('$nama', '$pesan')";

    if (mysqli_query($conn, $sql)) {
        // Menyimpan pesan sukses ke dalam session
        $_SESSION['success_message'] = "Data berhasil ditambahkan ke database.";

        // Tutup koneksi
        mysqli_close($conn);

        // Redirect dengan JavaScript dan tampilkan alert
        echo '<script>alert("Data berhasil ditambahkan ke database."); window.location.href = "wed.php";</script>';
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>
