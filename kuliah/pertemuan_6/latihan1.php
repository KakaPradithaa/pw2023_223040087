<?php 

// array multideimensi
// array di dalam array

    $mahasiwa = [
        ['Kaka', '🐺', '🥓'], 
        ['zuhdi', '🐷', '🥩'], 
        ['Marsha', '🐵', '🍔'], 
        ['Adira', '🐱', '🍗'], 
        ['Dzikri', '🐗', '🍤']
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiwa as $mhsw) { ?>
    <ul>
        <li>Nama : <?= $mhsw [0]; ?></li>
        <li>Makanan Favorit : <?= $mhsw [2]; ?></li>
        <li>Binatang peliharaan : <?= $mhsw [1]; ?></li>
    
    </ul>
    <?php } ?>
</body>
</html>