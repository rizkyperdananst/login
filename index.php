<?php

if( isset($_GET["pesan"]) ){
    if($_GET["pesan"] == "Gagal"){
        echo "<script>
            alert('Login Gagal, Username dan Password Salah!');
        </script>";
    } else if($_GET["pesan"] == "Logout"){
        echo "<script>
            alert('Anda Telah Logout');
        </script>";
    } else if ($_GET["pesan"] == "Belum_Login"){
        echo "<script>
            alert('Anda Harus Login Ke Halaman Admin');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>
<body>
    
    <div class="card">
        <div class="card-header">
            <h1>Sign In</h1>
        </div>
        <div class="card-body">
            <form action="cek_login.php" method="POST">
                <input type="text" name="username" placeholder="Input Your Username" required>
                <input type="password" name="password" placeholder="Input Your Password" required>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
        <div class="card-footer">
            <p>You don't have an account ? <a href="registrasi.php">Create Now!</a></p>
        </div>
    </div>

</body>
</html>