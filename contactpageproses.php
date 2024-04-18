<?php
if (isset($_POST['submit'])) {
    include "koneksi.php";
    session_start();
    $id = $_POST['id'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $judul_ulasan = $_POST['judul_ulasan'];
    $content = $_POST['content'];
    $query = mysqli_query($koneksi, "INSERT INTO contact_messages (user_id, username, email, judul_ulasan, content) 
        VALUES ('$id', '$username', '$email', '$judul_ulasan', '$content')");
    if ($query) {
        $_SESSION['status'] = "Berhasil Mengirim";
        $_SESSION['icon'] = "success";
        $_SESSION['text'] = "Berhasil mengirim ulasan";
        header("Location:contactpage.php");
    } else {
        $_SESSION['status'] = "Gagal";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Oops terjadi kesalahan";
        header("Location:contactpage.php");
    }
} else {
    $_SESSION['status'] = "Gagal";
    $_SESSION['icon'] = "error";
    $_SESSION['text'] = "Oops terjadi kesalahan2";
    header("Location:contactpage.php");
}
?>
