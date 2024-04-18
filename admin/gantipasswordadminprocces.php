<?php
if (isset($_POST['submit'])) {
    include "../koneksi.php";
    session_start();
    $password = $_POST['currentPassword'];
    $newpassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $result = mysqli_query($koneksi, "SELECT * from user WHERE id_user='$_SESSION[id]'");
    $row = mysqli_fetch_array($result);

    if (!preg_match("/^[a-zA-Z0-9]*$/", $newpassword)) {
        $_SESSION['status'] = "Gagal Ganti Password";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Password hanya boleh terdiri dari huruf dan angka";
        header("location:gantipasswordadmin.php");
        exit; // Menghentikan eksekusi skrip agar tidak melanjutkan proses berikutnya
    }

    if ($password == $row["password"] && $newpassword == $confirmPassword) {
        mysqli_query($koneksi, "UPDATE user SET password ='$newpassword' WHERE id_user='$_SESSION[id]'");
        $_SESSION['status'] = "Ganti Password Berhasil";
        $_SESSION['icon'] = "success";
        $_SESSION['text'] = "Password telah diperbarui";
        header("location:gantipasswordadmin.php");
    } else {
        $_SESSION['status'] = "Gagal Ganti Password";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Password tidak sesuai";
        header("location:gantipasswordadmin.php");
    }
}