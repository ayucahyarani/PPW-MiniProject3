<?php
if (isset($_POST['register'])) {
    include "koneksi.php";
    session_start();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Tidak ada hashing pada password
    
    $query = mysqli_query($koneksi, "SELECT email from user WHERE email='$email'");
    $data = mysqli_fetch_array($query);
    if (!preg_match("/^[a-zA-Z0-9]*$/", $_POST['password'])) {
        $_SESSION['status'] = "Registrasi Gagal";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Password hanya boleh angka dan huruf";
        header("Location:register.php");
    } else {
        // Validasi
        if ($data && $email == $data['email']) { // Periksa apakah $data tidak null
            $_SESSION['danger'] = "E-mail already used";
            header("Location:register.php");
        } else {
            // Tambahkan nilai untuk kolom 'thumbnail' atau kolom lain yang tidak boleh null
            $thumbnail = 'logo.png'; // Contoh nilai default
            $create = mysqli_query($koneksi, "INSERT INTO user (username, email, password, thumbnail) VALUES('$username','$email','$password','$thumbnail')");
            if ($create) {
                $_SESSION['status'] = "Registrasi Berhasil";
                $_SESSION['icon'] = "success";
                $_SESSION['text'] = "Selamat kamu berhasil membuat akun";
                header("Location:login.php");
            } else {
                $_SESSION['status'] = "Registrasi Gagal";
                $_SESSION['icon'] = "error";
                $_SESSION['text'] = "Oops terjadi kesalahan";
                header("Location:register.php");
            }
        }
    }
}
