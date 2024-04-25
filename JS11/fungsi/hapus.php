<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';
    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query1 = "DELETE FROM anggota WHERE jabatan_id = '$id'";
        if (mysqli_query($koneksi, $query1)) {
            $query2 = "DELETE FROM jabatan WHERE id = '$id'";
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Jabatan Telah Terhapus.");
            } else {
                pesan('danger', "Gagal Menghapus Jabatan Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menghapus Anggota yang Terkait dengan Jabatan Ini Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    } elseif (!empty($_GET['anggota'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query1 = "DELETE FROM anggota WHERE user_id = '$id'";
        if (mysqli_query($koneksi, $query1)) {
            $query2 = "DELETE FROM user WHERE id = '$id'";
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('danger', "Gagal Menghapus Data Pengguna Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menghapus Anggota Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}
?>