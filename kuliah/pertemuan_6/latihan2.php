<?php 

// array Assosiative
// array yang indexnya adalah string yang kita buat sendiri
// urutannya tidak berpengaruh apabila memiliki keyword yang sama

    $mahasiwa = [
        ['nama' => 'Kaka', 
        'binatang' => '🐺', 
        'makanan' => ['🥞', '🧇','🥠', '🍛', '🍚']
        ], 
        ['nama' => 'zuhdi', 
        'binatang' => '🐵',
        'makanan' => ['🥞', '🧇','🥠', '🍛', '🍚']
        ], 
        ['nama' => 'Marsha', 
        'binatang' => '🐗',
        'makanan' => ['🥞', '🧇','🥠', '🍛', '🍚']
        ], 
        ['nama' => 'Adira',
        'binatang' => '🦆',
        'makanan' => ['🥞', '🧇','🥠', '🍛', '🍚']
        ], 
        ['nama' => 'Dzikri',
        'binatang' => '🐔',
        'makanan' => ['🥞', '🧇','🥠', '🍛', '🍚']
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiwa as $mhsw) { ?>
    <ul>
        <li>Nama : <?= $mhsw ['nama']; ?></li>
        <li>Makanan Favorit : 
            <?php foreach($mhsw['makanan'] as $m){
                echo $m;
            } ?>
        </li>
        <li>Binatang peliharaan : <?= $mhsw ['binatang']; ?></li>
    
    </ul>
    <?php } ?>
</body>
</html>