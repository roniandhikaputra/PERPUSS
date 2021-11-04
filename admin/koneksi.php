<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database="perpus";

    //buat koneksi
    $koneksi = mysqli_connect ($serverName, $userName, $password,$database);

    //cek koneksi
    if (!$koneksi) {
        die("koneksi gagal".mysqli_connect_error());
    }
    else{
        echo "koneksi berhasil";
    }
?>