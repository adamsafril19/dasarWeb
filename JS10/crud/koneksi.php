<?php
$koneksi=mysqli_connect("localhost", "root", "adamsafril234", "prakwebdb");
if(mysqli_connect_errno()){
    die("Koneksi db gagal: ".mysqli_connect_error());
}
?>