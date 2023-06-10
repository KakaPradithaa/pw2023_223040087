<?php 
    usleep(500000);
    require '../function.php';
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM artikel
                WHERE
                judul LIKE '%$keyword%' OR
                isi LIKE '%$keyword%'   	
            ";
    $result = mysqli_query($conn, $query); // Memanggil query

    if ($result instanceof mysqli_result) { // Memeriksa jika $result adalah objek mysqli_result
?>
<div id="container">
    <div class="container mt-5">
        <div class="judul-artikel" style="background-color: #fff; padding: 5px 10px;">
            <h5 class="text-center" style="margin-top: 5px;">ARTIKEL</h5>
            <div class="row">
                <?php while($data = mysqli_fetch_array($result)) { ?>
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
</div>
<?php
    } else {
        // Penanganan kesalahan jika $result bukan objek mysqli_result
    }
?>
