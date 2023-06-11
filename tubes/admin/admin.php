<?php 
session_start();
require_once "auth.php"; 
if(!isset($_SESSION['login'])){
    header("location: ../loginpage.php");
    exit();
}

// mengimpor koneksi
require "koneksi.php";
require "../function.php";


$artikel = query("SELECT * FROM artikel ORDER BY id_artikel DESC");


// tombol cari di tekan
if(isset($_POST["cari"]) ){
    $artikel = cari($_POST["keyword"]);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard admin</title>
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<!--Navbar-->

<!--Table-->
<div class="container">
<table class="table mt-5 table-secondary">

<!--Form Search-->
<form action="" method="post" role="search">
    <input class="form-control me-2 mt-3" type="text" name="keyword"
    placeholder="Masukan Keyword Pencarian..." aria-label="Cari" autofocus autocomplete="off">
    <button class="btn btn-light mt-2" type="submit" name="cari">Cari
    </button>
</form> 
<!--Form Search-->

<!-- Pdf Reporting -->
<div class="container no-print mt-3">
    <button type="submit" class="btn btn-danger" name="aimpan" onclick="window.print()">
        PDF
    </button>
</div>
<!-- Pdf Reporting -->


<thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">action</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
        </tr>
</thead>
<tbody>
        <?php $i=1; 
        foreach($artikel as $a) :
            ?>
        <tr>
        <th scope="row"><?= $i; ?></th>
            <td><a href="hapus_artikel.php?id_artikel=<?= $a["id_artikel"];?>">hapus</a> |
                <a href="ubah_artikel.php?id_artikel=<?= $a["id_artikel"];?>">ubah</a></td>
            <td><img src="../artikel/<?= $a['gambar']; ?>" width="150px" alt=""></td>
            <td><?= $a['judul']; ?></td>
            <td><?= $a['isi']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</tbody>
</table>
</div>
<!--Table-->
<div class="container">
<a href="tambah_artikel.php" class="btn btn-primary ms-2">Tambah data</a>
</div>

<!--Footer-->  
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