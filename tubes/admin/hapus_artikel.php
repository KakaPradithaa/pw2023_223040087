<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location: ../loginpage.php");
    exit();
}

// mngimpor koneksi
require "koneksi.php";
require '../function.php';

$id_artikel = $_GET["id_artikel"];

if (hapus_artikel($id_artikel) > 0 ){
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'admin.php';
        </script>
    ";
} else {
    mysql_error($id_artikel);
}
?>