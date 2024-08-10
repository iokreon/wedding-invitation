<?php
session_start(); // Mulai session

// Hapus semua session
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
header("Location: index.php"); // Ganti login.php dengan halaman login Anda
exit();
?>
