<?php

include "conn.php";

if( isset($_POST["submit"]) ){
    $nama = htmlspecialchars($_POST["nama"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$username', '$password')");

    if(mysqli_affected_rows($conn) > 0){
        echo "<script>
            alert('Success');
            document.location.href = 'index.php';
        </script>";
    }
}

?>