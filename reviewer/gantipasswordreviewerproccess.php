<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['login'])) {
    $_SESSION['status'] = "Maaf";
    $_SESSION['icon'] = "error";
    $_SESSION['text'] = "Anda harus login terlebih dahulu";
    header("location:../login.php");
    exit; 
}

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_SESSION[id]'");
$data = mysqli_fetch_array($query);

if (isset($_POST['submit'])) {
    $password_lama = $_POST['password_lama'];
    $password_baru = $_POST['password_baru'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    if (!preg_match("/^[a-zA-Z0-9]*$/", $password_baru)) {
        $_SESSION['status'] = "Gagal Ganti Password";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Password hanya boleh terdiri dari huruf dan angka";
        header("location:gantipasswordreviewer.php");
        exit; 
    }

    if ($password_lama == $data['password'] && $password_baru == $konfirmasi_password) {
        $update_query = mysqli_query($koneksi, "UPDATE user SET password ='$password_baru' WHERE id_user='$_SESSION[id]'");

        if ($update_query) {
            $_SESSION['status'] = "Ganti Password Berhasil";
            $_SESSION['icon'] = "success";
            $_SESSION['text'] = "Password telah diperbarui";
            header("location:gantipasswordreviewer.php");
            exit; 
        } else {
            $_SESSION['status'] = "Gagal Ganti Password";
            $_SESSION['icon'] = "error";
            $_SESSION['text'] = "Gagal mengubah password. Silakan coba lagi.";
            header("location:gantipasswordreviewer.php");
            exit; 
        }
    } else {
        $_SESSION['status'] = "Gagal Ganti Password";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Password tidak sesuai";
        header("location:gantipasswordreviewer.php");
        exit;
    }
}