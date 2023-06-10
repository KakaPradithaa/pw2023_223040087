<?php
require "../admin/koneksi.php";
$judul = htmlspecialchars($_GET['judul']);
$queryArtikel = mysqli_query($conn, "SELECT * FROM artikel WHERE judul='$judul'");
$artikel = mysqli_fetch_assoc($queryArtikel);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bandung Juara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylepage.css" />
</head>

<body>
    <!--Navbar-->
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../image/logo.png" alt="Logo" width="50" height="50" class="d-inline-block alig">
                Bandung <strong>Juara</strong>
            </a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari">
                <button class="btn btn-light" type="submit">Cari</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../fiturpage.php">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Siaran pers</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../loginpage.php">Daftar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../register.php">Masuk</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar-->

    <!--Breadcrumb-->
    <div class="container">
        <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
            <ol class="breadcrumb p-3">
                <li class="breadcrumb-item"><a href="../index.php" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Artikel</li>
            </ol>
        </nav>
    </div>
    <!--Breadcrumb-->

    <!--Singleitem-->
    <div class="container">
        <div class="row row-pemkot">
            <?php if ($artikel) { ?>
                <div class="col-lg-5">
                    <figure class="figure">
                        <img src="<?php echo $artikel['gambar']; ?>" class="figure-img img-fluid" style="border-radius: 5px;" width="550px">
                    </figure>
                </div>
                <div class="col-lg-7">
                    <h4 style="color: #0d6efd;">Artikel</h4>
                    <div class="garis-item"></div>
                    <div>
                        <p class="figure-caption d-flex justify-content-evenly fw-bold">
                            <?php echo $artikel['isi']; ?>
                        </p>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-lg-12">
                    <p>Artikel tidak ditemukan.</p>
                </div>
            <?php } ?>
        </div>
    </div> 
    <!--Singleitem-->

    <!--Footer-->
    <footer class="bg-primary p-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="" class="text-decoration-none text-dark fw-bold">
                        <img src="../asfoot/1.png" style="width: 100px;">
                    </a>
                    <span>
                        <a href="https://www.google.com/maps/place/Jl.+Wastukencana+No.2,+Babakan+Ciamis,+Kec.+Sumur+Bandung,+Kota+Bandung,+Jawa+Barat+40117" class="text-decoration-none text-dark fw-bold">
                            Jl. Wastukencana No.2Bandung, Jawa Barat 40117
                        </a>
                    </span>
                </div>

                <div class="col-md-6 text-end mt-2">
                    <a href="https://twitter.com/humasbandung_" class="text-decoration-none">
                        <img src="../asfoot/twitter.png" class="ms-2" style="width: 50px;">
                    </a>
                    <a href="https://www.instagram.com/humas_bandung/" class="text-decoration-none">
                        <img src="../asfoot/instagram.png" class="ms-3" style="width: 50px;">
                    </a>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-md-6">
                        <a href="" class="text-decoration-none text-dark"></a>
                        <span>
                            <a href="https://www.instagram.com/kaka.prdtha/" class="text-decoration-none text-dark">
                                Copyright@2023|Created and Development by Kaka Praditha Putra
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
