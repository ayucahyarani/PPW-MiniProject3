<?php
if (isset($_POST['login'])) {
    include "koneksi.php";
    session_start();
    $id = $_POST['id'];
    $password = $_POST['password_user'];

    // Hashing
    $password = sha1($password);

    // Gunakan tanda kutip tunggal untuk string pada query SQL
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id ='$id' AND password='$password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0) {
        if ($data['role'] == "admin") {
            $_SESSION['id'] = $data['id'];
            $_SESSION['role'] = "admin";
            $_SESSION['berhasil'] = "Selamat Kamu Berhasil Login";
            $_SESSION['password'] = $data['password'];
            $_SESSION['login'] = true;
            header("Location: admin/indexadmin.php");
        } else if ($data['role'] == 'user') {
            $_SESSION['username'] = $data['username'];
            $_SESSION['id'] = $data['id'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['level'] = "user";
            $_SESSION['berhasil'] = "Selamat Kamu Berhasil Login";
            $_SESSION['login'] = true;
            header("Location: user/indexuser.php");
        } else {
            echo "error";
        }
    } else {
        $_SESSION['status'] = "Login Gagal";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Password anda salah";
        header("Location: login.php");
    }
}
?>
