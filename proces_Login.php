<?php
session_start(); // Mulai session

$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "crud_modal"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir login
    $adminUsername = $_POST['adminUsername'];
    $adminPassword = $_POST['adminPassword'];

    // Melakukan query untuk mendapatkan data username dan password dari tabel admin
    $sql = "SELECT * FROM admin WHERE username = '$adminUsername'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Memeriksa kecocokan password
        if ($adminPassword === $row['password']) {
            // Autentikasi berhasil
            $_SESSION['adminUsername'] = $adminUsername; // Menetapkan session untuk username admin
            // Lakukan tindakan sesuai yang diperlukan setelah login berhasil
            header("Location: admin.php"); // Redirect ke halaman berhasil login
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}

// Menutup koneksi
mysqli_close($conn);
?>
