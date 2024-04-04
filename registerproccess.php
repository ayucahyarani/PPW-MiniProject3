<?php
if (isset($_POST['register'])) {
include "koneksi.php";
session_start();
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$x=explode('.', $name);
$extension=strtolower(end($x));
$level=$_POST['role'];
// Hashing
$password = sha1($password);
$query = mysqli_query($koneksi, "SELECT email from user WHERE 
email='$email'");
$data = mysqli_fetch_array($query);
if(!preg_match("/^[a-zA-Z0-9]*$/", $_POST['password'])){
    $_SESSION['status'] = "Registrasi Gagal";
    $_SESSION['icon'] = "error";
    $_SESSION['text'] ="Password hanya boleh angka dan huruf"; 
    header("Location:register.php");
}
else{
// Validasi
if ($email == $data['email']) {
$_SESSION['danger'] = "E-mail already used";
header("Location:register.php");
} 
else {
     if (in_array($extension, $extension_allowed)===true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, 'images/'. $name);

            $create = mysqli_query($koneksi, "INSERT INTO user 
            VALUES('$id','$username','$email','$password','$level')");
            if($create){
            $_SESSION['status'] = "Registrasi Berhasil";
            $_SESSION['icon'] = "success";
            $_SESSION['text'] ="Selamat kamu berhasil membuat akun"; 
            header("Location:login.php");
            }
              else {
                $_SESSION['status'] = "Registrasi Gagal";
                $_SESSION['icon'] = "error";
                $_SESSION['text'] ="Oops terjadi kesalahan"; 
                    header("Location:register.php");
                }
        } 
        else{
            $_SESSION['status'] = "Registrasi Gagal";
            $_SESSION['icon'] = "error";
            $_SESSION['text'] ="Ukuran file terlalu besar"; 
                header("Location:register.php");
            } 
        }
        else {
            $_SESSION['status'] = "Registrasi Gagal";
            $_SESSION['icon'] = "error";
            $_SESSION['text'] ="Extension tidak diperbolehkan"; 
                header("Location:register.php");
        }
}
}
}
?>