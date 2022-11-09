<?php

include "conn.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Akun</title>
</head>
<body>
<div class="card">
        <div class="card-header registrasi">
            <h1>Create Account</h1>
        </div>
        <div class="card-body">
            <form action="create_action.php" method="POST">
                <input type="text" name="nama" placeholder="Input Your Name" required>
                <input type="text" name="username" placeholder="Input Your Username" required>
                <input type="password" name="password" placeholder="Input Your Password" required>
                <button type="submit" name="submit">Create</button>
            </form>
        </div>
        <!-- <div class="card-footer">
            <p>You don't have an account ? <a href="registrasi.php">Create Now!</a></p>
        </div> -->
    </div>
</body>
</html>