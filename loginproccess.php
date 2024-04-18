<?php
if (isset($_POST['login'])) {
    include "koneksi.php";
    session_start();
    $id = $_POST['id'];
    $password = $_POST['password_user'];
    $role = $_POST['role'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$id' AND password='$password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0) {
        if ($data['role'] == $role) { // Periksa apakah role pengguna sesuai dengan yang dipilih
            $_SESSION['id'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['email'] = $data['email']; // Menyimpan email ke dalam sesi
            $_SESSION['thumbnail'] = $data['thumbnail']; // Menyimpan thumbnail ke dalam sesi
            $_SESSION['role'] = $data['role'];
            $_SESSION['berhasil'] = "Selamat Kamu Berhasil Login";
            $_SESSION['login'] = true;
            if ($role == "admin") {
                header("Location: admin/indexadmin.php");
            } else if ($role == "user") {
                header("Location: user/indexuser.php");
            } else if ($role == "reviewer") {
                header("Location: reviewer/indexreviewer.php");
            } else {
                $_SESSION['status'] = "Login Gagal";
                $_SESSION['icon'] = "error";
                $_SESSION['text'] = "Role tidak valid";
                header("Location: login.php");
            }
        } else {
            $_SESSION['status'] = "Login Gagal";
            $_SESSION['icon'] = "error";
            $_SESSION['text'] = "Role tidak sesuai";
            header("Location: login.php");
        }
    } else {
        $_SESSION['status'] = "Login Gagal";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Username atau Password salah";
        header("Location: login.php");
    }
}