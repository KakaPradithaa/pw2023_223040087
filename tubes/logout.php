<?php
session_start();

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Alihkan pengguna kembali ke halaman login
header("Location: loginpage.php");
exit;
?>
