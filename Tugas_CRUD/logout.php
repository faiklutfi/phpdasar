<?php
session_start(); // Pastikan session telah dimulai

// Hapus semua session
session_destroy();

// Redirect ke halaman login
header('location: login.php'); // Gantilah 'login.php' dengan halaman login Anda
?>