<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:../login.php");
    exit;
}
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $id_berita = $_POST['id_berita'];
    $ulasan = $_POST['ulasan'];
    $id_user = $_SESSION['id']; // Ambil id_user dari sesi

    $query = mysqli_query($koneksi, "INSERT INTO ulasan (id_berita, id_user, judul_ulasan, isi_ulasan) VALUES ('$id_berita', '$id_user', 'Ulasan Baru', '$ulasan')");

    if ($query) {
        $_SESSION['status'] = 'success';
        $_SESSION['text'] = 'Ulasan Anda berhasil disimpan. Terima kasih atas kontribusinya!';
    } else {
        $_SESSION['status'] = 'error';
        $_SESSION['text'] = 'Terjadi kesalahan saat menyimpan ulasan. Silakan coba lagi.';
    }

    header("location:indexreviewer.php");
    exit;
} else {
    $_SESSION['status'] = 'error';
    $_SESSION['text'] = 'Terjadi kesalahan saat menyimpan ulasan. Silakan coba lagi.';
    header("location:indexreviewer.php");
    exit;
}
?>
