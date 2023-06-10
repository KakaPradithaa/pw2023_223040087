<?php 

require 'admin/koneksi.php';
require 'function.php';

if( isset($_POST["register"])) {

    if( register($_POST) > 0 ) {
        echo"<script>
            alert('User baru berhasil ditambahkan!');
        </script>";
?>
    <meta http-equiv="refresh" content="1; url=loginpage.php" />
        <?php
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Registrasi</title>
    <link rel="stylesheet" href="css/styleregis.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="" method="post">
                <h1>Daftar</h1>
                <hr>
                <p>Bandung Juara</p>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Username" required/>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" required/>
                <label for="">Confirm Password</label>
                <input type="password" name="password2" placeholder="Confirm Password" required/>
                <button type="submit" name="register">Register</button>
                <p>Sudah punya akun? <a href="loginpage.php">Login disini</a></p>
            </form>
        </div>
        <div class="right">
            <img src="image/logo.png" alt="">
        </div>
    </div>
</body>
</html>