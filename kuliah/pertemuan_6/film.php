<?php 
    $film = [
        [
            'poster' => 'a man call otto.jpg',
            'judul' => 'A man call otto',
            'tahun' => '2022',
            'genre' => [' Drama/Komedi.'],
            'pemeran utama' => ['Tom Hanks,', 'Truman Theodore,', 'Mariana Trevino.'],
            'sutradara' => ['Marc Forster', '.']
        ],
        [
            'poster' => 'gundala.jpeg ',
            'judul' => 'Gundala',
            'tahun' => '2019',
            'genre' => ['Laga/Fiksi ilmiah.'],
            'pemeran utama' => ['Abimana Aryasatria, ', 'Tara Basro,', 'Pevita Pearce.'],
            'sutradara' => ['Joko Anwar', '.']
        ],
        [
            'poster' => 'john wick.jpeg ',
            'judul' => 'John Wick',
            'tahun' => '2014',
            'genre' => ['Laga/Cerita seru.'],
            'pemeran utama' => ['Keanu Revees, ', 'Ian McShane, ', 'Lance Reddick.'],
            'sutradara' => ['Chad Stahelski.']
        ],
        [
            'poster' => 'pengabdi setan 2.jpeg ',
            'judul' => 'Pengabdi Setan 2',
            'tahun' => '2022',
            'genre' => [' Horor.'],
            'pemeran utama' => ['Ratu Felisha, ', 'Tara Basro, ', 'Bront Palarae.'],
            'sutradara' => ['Joko Anwar', '.']
        ],
        [
            'poster' => 'the medium.jpeg ',
            'judul' => 'The Medium',
            'tahun' => '2021',
            'genre' => ['Horor/Mokumenter.'],
            'pemeran utama' => ['Narilya Gulmongkolpech, ', 'Sawanee Utoomma, ', 'Sirani Yankittikan.'],
            'sutradara' => [' Banjong Pisanthanakun', '.']
        ],
        [
            'poster' => 'dilan 1990.jpeg ',
            'judul' => 'Dilan 1990',
            'tahun' => '2018',
            'genre' => ['Roman/Drama.'],
            'pemeran utama' => ['Iqbal Ramadhan, ', 'Vannesa Prescilla, ', 'Adhisty Zara.'],
            'sutradara' => [' Pidi Baiq , ', 'Fajar Bustomi.']
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php  foreach($film as $f) {?>
    <ul>
        <li>
            <img src="gambar/<?= $f['poster']; ?>" width ="120" height="200">
        </li>
        <li>Judul : <?= $f['judul']; ?></li>
        <li>Tahun : <?= $f['tahun']; ?></li>
        <li>Genre : 
            <?php foreach($f['genre'] as $g){
                echo $g;
            } ?>
        </li>
        <li>Pemeran Utama : 
            <?php foreach($f['pemeran utama'] as $pu){
                echo $pu;
            } ?>
        </li>
        <li>Sutradara : 
            <?php foreach($f['sutradara'] as $sut){
                echo $sut;
            }?>
        </li>
    </ul>
    <?php } ?>
</body>
</html>