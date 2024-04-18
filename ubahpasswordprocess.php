<?php
session_start();
include "koneksi.php";

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login
if (!isset($_SESSION['login'])) {
  $_SESSION['status'] = "Maaf";
  $_SESSION['icon'] = "error";
  $_SESSION['text'] = "Anda harus login terlebih dahulu";
  header("location:../login.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $new_password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Validasi password baru dan konfirmasi password baru
  if ($new_password != $confirm_password) {
    $_SESSION['status'] = "Gagal";
    $_SESSION['icon'] = "error";
    $_SESSION['text'] = "Konfirmasi password tidak cocok";
    header("Location: user/indexprofil.php");
    exit;
  }

  // Update password baru ke dalam database
  $id_user = $_SESSION['id'];
  $query = mysqli_query($koneksi, "UPDATE user SET password = '$new_password' WHERE id_user = '$id_user'");

  if ($query) {
    $_SESSION['status'] = "Berhasil";
    $_SESSION['icon'] = "success";
    $_SESSION['text'] = "Password berhasil diubah";
    header("Location: user/indexprofil.php");
    exit;
  } else {
    $_SESSION['status'] = "Gagal";
    $_SESSION['icon'] = "error";
    $_SESSION['text'] = "Gagal mengubah password, silakan coba lagi";
    header("Location: user/indexprofil.php");
    exit;
  }
}
?>
