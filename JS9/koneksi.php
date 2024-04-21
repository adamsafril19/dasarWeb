<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "adamsafril234";
    $database = "prakwebdb";
    try {
        $connect = mysqli_connect($namaHost, $username, $password, $database);
        if (!$connect) {
            echo "Koneksi dengan MySQL Gagal: " . mysqli_connect_error();
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>