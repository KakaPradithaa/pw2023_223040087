<?php
require 'admin/koneksi.php';
require 'function.php';

session_start();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];
        if (password_verify($password, $hashed_password)) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header("Location: admin/index.php");
                exit;
            } else if ($row['role'] == 'user') {
                header("Location:index.php");
                exit;
            }
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Login</title>
    <link rel="stylesheet" href="css/styleregis.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="post">
                <h1>Login</h1>

                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username/password salah</p>
                <?php endif; ?>

                <hr>
                <p>Bandung Juara</p>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Username" >
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password">
                <button name="login">Login</button>
                <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
            </form>
        </div>
        <div class="right">
            <img src="image/logo.png" alt="">
        </div>
    </div>
</body>

</html>