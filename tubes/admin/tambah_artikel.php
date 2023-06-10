<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("location: ../loginpage.php");
    exit();
}

// mengimpor koneksi
require "koneksi.php";
require "../function.php";

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])){
    
    //data berhasil ditambahkan
    if (tambah_artikel($_POST) > 0){
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bandung Juara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleadmin.css" />
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Hallo Admin.</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="admin.php">Artikel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Fitur</a>
        </li>
        </ul>
    </div>
</div>
</nav>
<!--Navbar-->

<!--form-->
<div class="container mt-5 ms-2" id="container">
                <h1>Tambah Artikel</h1>
                
                <form action="" method="post" enctype="multipart/form-data" class="box-input">
                    <div class="mb-3">
                        <label for="img" class="form-label">Masukan foto</label>
                            <input class="form-control" type="file" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="title_berita" class="form-label">Masukan judul berita</label>
                            <input class="form-control" type="text" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="editor" class="form-label">Masukan isi berita</label>
                        <textarea class="form-control" id="editor" name="isi" rows="10"></textarea>
                    </div>
                    <div class="button mb-3">
				        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
			        </div>
                    
                </form>
        </div>
<!--form-->

<footer class="bg-primary p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href=""class="text-decoration-none text-dark fw-bold">
                            <img src="../asfoot/1.png"style="width: 100px;">
                        </a>
                        <span>
                            <a href="https://www.google.com/maps/place/Jl.+Wastukencana+No.2,+Babakan+Ciamis,+Kec.+Sumur+Bandung,+Kota+Bandung,+Jawa+Barat+40117" 
                            class="text-decoration-none text-dark fw-bold">
                                Jl. Wastukencana No.2Bandung, Jawa Barat 40117
                            </a>
                        </span>
                    </div>

                    <div class="col-md-6 text-end mt-2">
                        <a href="https://twitter.com/humasbandung_"class="text-decoration-none">
                            <img src="../asfoot/twitter.png"class="ms-2" style="width: 50px;">
                        </a>
                        <a href="https://www.instagram.com/humas_bandung/"class="text-decoration-none">
                            <img src="../asfoot/instagram.png"class="ms-3" style="width: 50px;">
                        </a>
                    </div>
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-md-6">
                            <a href=""class="text-decoration-none text-dark"></a>
                            <span>
                                <a href="https://www.instagram.com/kaka.prdtha/" 
                                class="text-decoration-none text-dark">
                                    Copyright@2023|Created and Development by Kaka Praditha Putra
                                </a>
                            </span>
                        </div>
                    </div>
                </footer>    
<!--Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>