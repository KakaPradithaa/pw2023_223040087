<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("location: ../loginpage.php");
    exit();
}

// mngimpor koneksi
require "koneksi.php";



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hallo Admin.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            background-color: rgb(206, 208, 228);
            font-family: font-family: 'Poppins', sans-serif;
            font-size: 15px;
            color: #202020;
        }

        
        .kotak {
            border: solid;
        }

        .summary-kategori {
            background-color: blue;
            border-radius: 15px;
        }

        .no-decoration {
            text-decoration: none;
        }

        .no-decoration:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-primary">
<div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Hallo Admin. |</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fs-5" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active weightn" aria-current="page" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!--Navbar-->

<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">
                <i class="fas fa-home"></i> Home
            </li>
        </ol>
    </nav>
    <h2>Halo Admin</h2>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-kategori p-4">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-align-justify fa-5x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Artikel</h3>
                            <!-- <p class="fs-4"><?php echo $jumlahartikel; ?>Artikel</p> -->
                            <p><a href="admin.php" class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
