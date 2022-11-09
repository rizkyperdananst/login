<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    
    <h2>Halaman Utama</h2>
    <?php
    session_start();
    if($_SESSION["status"]!="Login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>
    <h4>Selamat Datang <?= $_SESSION["username"]; ?> Anda telah Login!</h4>

    <br>
    <a href="logout.php">Logout</a>


</body>
</html>