<?php 
$mahasiswa = [
        [
            'nama' => 'Kaka Praditha Putra',
            'npm' => '223040087',
            'email' => 'kaka.223040087@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'kaka.jpg'
        ],
        [
            'nama' => 'Dzikri Setiawan',
            'npm' => '223040072',
            'email' => 'dzikri.223040072@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' =>  'dzikri.jpg'
        ],
        [
            'nama' => 'Muhamad Marsa Nur Jaman',
            'npm' => '223040083',
            'email' => 'marsa.223040083@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'caca.jpg'
        ],
        [
            'nama' => 'Rivaldy Novyan Dwi Putra',
            'npm' => '223040110',
            'email' => 'Rivaldy.223040110@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'valdi.jpg'
        ],
        [
            'nama' => 'Moch Zuhdi Maulana Nabilah',
            'npm' => '223040101',
            'email' => 'zuhdi.223040101@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'juhdi.jpg'
        ],
        [
            'nama' => 'Muhammad Daffa Riyadi',
            'npm' => '223040120',
            'email' => 'daffa.223040120@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'rb.jpg'
        ],
        [
            'nama' => 'Muhammad Daffa Mussyaffa',
            'npm' => '223040048',
            'email' => 'daffa.223040048@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'dafsus.jpg'
        ],
        [
            'nama' => 'Chandra Ardiansyah',
            'npm' => '223040160',
            'email' => 'chandra.223040160@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'chandra.jpg'
        ],
        [
            'nama' => 'Fadhil Rizki Fauzan',
            'npm' => '223040105',
            'email' => 'fadhil.223040105@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'fadil.jpg'
        ],
        [
            'nama' => 'Muhammad Alfath Septian',
            'npm' => '223040014',
            'email' => 'alfath.223040014@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'apat.jpg'
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
    <?php foreach($mahasiswa as $mhsw) {?>
    <br>
    <ul>
        <li style ="list-style:none;">
            <img src="image/<?= $mhsw['foto']; ?>" width = "150" height = "150" border = "5px solid black" >
        </li>
        <li>Nama : <?= $mhsw['nama']; ?></li>
        <li>NPM : <?= $mhsw['npm']; ?></li>
        <li>Email : <?= $mhsw['email']; ?></li>
        <li>Jurusan : <?= $mhsw['jurusan']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>