<?php

// Mengaktifkan SESSION
session_start();

include "conn.php";

// Menangkap data yang dikirim dari FORM
$username = $_POST["username"];
$password = $_POST["password"];

// Menyeleksi data users dengan username dan password yang sesuai
$data = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

// Mencek data ada apa enggak di database
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION["username"] = $username;
    $_SESSION["status"] = "Login";
    echo "<script>
        alert('Login Berhasil');
        document.location.href = './home/index.php';
    </script>";
} else {
    header("location:index.php?pesan=Gagal");
}

?>