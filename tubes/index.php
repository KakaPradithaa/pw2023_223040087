<?php  
    require "admin/koneksi.php";
    session_start();
    $artikel = mysqli_query($conn, "SELECT id_artikel, gambar, judul, isi FROM artikel LIMIT 6");
?>

<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bandung Juara</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="css/stylehome.css" />
        </head>
    <body>

<!--Navbar-->    
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="image/logo.png" alt="Logo" width="50" height="50" class="d-inline-block alig">
        Bandung <strong>Juara</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="fiturpage.php">Fitur</a></li>
                <li><a class="dropdown-item" href="siaranpers/siaran.php">Siaran Pers</a></li>
                <li><a class="dropdown-item" href="tentang.php">Tentang</a></li>
            </ul>
            </li>
            <?php                
                if (isset($_SESSION['username'])) {
                    // Jika pengguna sudah login, tampilkan tombol Logout
                    echo '<a href="logout.php"><button class="btn btn-outline-danger me-md-3 mt-1" type="button">Logout</button></a>';
                } else {
                    // Jika pengguna belum login, tampilkan tombol Masuk
                    echo '<a href="loginpage.php"><button class="btn btn-outline-warning me-md-3 mt-1" type="button">Masuk</button></a>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!--Navbar-->    

<!--Caraousel-->
    <div class="container mt-5">
        <div id="carouselExampleCaptions" class="carousel slide mt-3">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="aset/1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Asia Afrika</h5>
                            <p>"Asia afrika adalah tempat berlangsungnya konferensi Tingkat Tinggi Asia–Afrika (disingkat KTT Asia Afrika atau KAA; kadang juga disebut Konferensi Bandung) adalah sebuah konferensi antara negara-negara Asia dan Afrika, yang kebanyakan baru saja memperoleh kemerdekaan. KAA diselenggarakan oleh Indonesia, Myanmar (dahulu Burma), Sri Lanka (dahulu Ceylon), India dan Pakistan dan dikoordinasi oleh Menteri Luar Negeri Indonesia Sunario. "</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="aset/1961851.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Gedung Sate</h5>
                                <p>"Gedung Sate merupakan gedung kantor Gubernur Jawa Barat. Gedung ini memiliki ciri khas berupa ornamen tusuk sate pada menara sentralnya, yang telah lama menjadi penanda atau markah tanah Kota Bandung yang tidak saja dikenal masyarakat di Jawa Barat, tetapi juga seluruh Indonesia bahkan model bangunan itu dijadikan pertanda bagi beberapa bangunan dan tanda-tanda kota di Jawa Barat. "</p>
                            </div>
                    </div>
                    <div class="carousel-item">
                        <img src="aset/2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Jembatan Pasupati</h5>
                        <p>"Jembatan Pasupati atau Jalan Layang Pasupati dan Jembatan Layang Prof. Dr. Mochtar Kusumaatmadja adalah sebuah jembatan yang menghubungkan bagian utara dan timur Kota Bandung melewati lembah Cikapundung. Panjangnya 2,8 km dan lebarnya 30–60 m."</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
<!--Caraousel-->
    
<!--Etalase-->
        <div class="container mt-5">
            <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
                <h5 class="text-center" style="margin-top: 5px;">ETALASE KOTA BANDUNG</h5>
            </div>
            <div class="row text-center row-container mt-2">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="page1.php"><img src="kategori/1.jpg" alt="" class="image-categori mt-3"></a>
                        <p class="mt-3">Pemerintahan Kota Bandung</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="page2.php"><img src="kategori/4.jpg" alt="" class="image-categori mt-3"></a>
                        <p class="mt-3">Pendidikan & Kebudayaan</p>
                    </div>
                </div>           

                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="page3.php"><img src="kategori/2.jpg" alt="" class="image-categori mt-3"></a>
                        <p class="mt-3">Kesehatan</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="page4.php"><img src="kategori/3.jpg" alt="" class="image-categori mt-3"></a>
                        <p class="mt-3">Transportasi</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="page5.php"><img src="kategori/5.jpg" alt="" class="image-categori mt-3"></a>
                        <p class="mt-3">Pelayanan Informasi Publik</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="menu-kategori">
                        <a href="page6.php"><img src="kategori/6.jpg" alt="" class="image-categori mt-3"></a>
                        <p class="mt-3">Tempat Wisata & Rekreyasi</p>
                    </div>
                </div>
            </div>
        </div>    
<!--Etalase-->

<!-- livesearch -->
<div class="container mt-5"> 
<form action="" method="post" class="d-flex">
    <input class="form-control me-2 w-100" type="text" name="keyword" placeholder="Cari Artikel..."
    id="keyword" >
    <button class="btn btn-light" name="cari " type="submit" id="tombol-cari">Cari</button>
</form>
</div>
<!-- livesearch -->
    
<!--Artikel-->
<div id="container">
    <div class="container mt-5">
        <div class="judul-artikel" style="background-color: #fff; padding: 5px 10px;">
                <h5 class="text-center" style="margin-top: 5px;">ARTIKEL</h5>
            <div class="row">
                <?php while($data = mysqli_fetch_array($artikel)) { ?>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                        <div class="card text-center">
                            <img src="artikel/<?php echo $data['gambar']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title"><?php echo $data['judul']; ?></h6>
                                    <a href="artikel/artikel.php?judul=<?php echo $data['judul'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
<!--Artikel-->

<!--Footer-->  
        <footer class="bg-primary p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href=""class="text-decoration-none text-dark fw-bold">
                            <img src="asfoot/1.png"style="width: 100px;">
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
                            <img src="asfoot/twitter.png"class="ms-2" style="width: 50px;">
                        </a>
                        <a href="https://www.instagram.com/humas_bandung/"class="text-decoration-none">
                            <img src="asfoot/instagram.png"class="ms-3" style="width: 50px;">
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

    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
    </html>