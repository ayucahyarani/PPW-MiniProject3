<?php
if (isset($_POST['registeradmin'])) {
    include "../koneksi.php";
    session_start();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $level = $_POST['level'];

    // Pengaturan nilai default untuk thumbnail
    $thumbnail_default = 'logo.png';

    // Jika ada file thumbnail yang diunggah
    if ($_FILES['thumbnail']['name']) {
        $extension_allowed = array('png', 'jpg', 'jpeg');
        $name = $_FILES['thumbnail']['name'];
        $x = explode('.', $name);
        $extension = strtolower(end($x));
        $size = $_FILES['thumbnail']['size'];
        $file_tmp = $_FILES['thumbnail']['tmp_name'];

        // Validasi ekstensi dan ukuran file
        if (in_array($extension, $extension_allowed) === false) {
            $_SESSION['status'] = "Gagal Menambahkan Data";
            $_SESSION['icon'] = "error";
            $_SESSION['text'] = "Ekstensi file tidak diperbolehkan";
            header("Location:tambahadminpage.php");
            exit;
        }

        if ($size > 1044070) {
            $_SESSION['status'] = "Gagal Menambahkan Data";
            $_SESSION['icon'] = "error";
            $_SESSION['text'] = "Ukuran file terlalu besar";
            header("Location:tambahadminpage.php");
            exit;
        }

        // Pindahkan file thumbnail yang diunggah
        move_uploaded_file($file_tmp, '../assets/profile/' . $name);
        $thumbnail = $name;
    } else {
        // Gunakan nilai default jika tidak ada file thumbnail yang diunggah
        $thumbnail = $thumbnail_default;
    }

    // Hashing
    $query = mysqli_query($koneksi, "SELECT email from user");
    $data = mysqli_fetch_array($query);

    // Validasi
    if (!preg_match("/^[a-zA-Z0-9]*$/", $_POST['password'])) {
        $_SESSION['status'] = "Registrasi Gagal";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Password hanya boleh angka dan huruf";
        header("Location:tambahadminpage.php");
        exit;
    }

    if ($email == $data['email']) {
        $_SESSION['status'] = "Gagal Menambahkan Data";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Email sudah digunakan";
        header("Location:tambahadminpage.php");
        exit;
    }

    if ($password !== $confirm_password) {
        $_SESSION['status'] = "Gagal Menambahkan Data";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Konfirmasi password tidak cocok";
        header("Location:tambahadminpage.php");
        exit;
    }

    // Query untuk menambahkan data admin baru
    $create = mysqli_query($koneksi, "INSERT INTO user 
                        (username, email, password, jeniskelamin, thumbnail, role) 
                        VALUES ('$username','$email','$password','$jeniskelamin','$thumbnail','$level')");

    if ($create) {
        $_SESSION['status'] = "Berhasil Menambahkan Data";
        $_SESSION['icon'] = "success";
        $_SESSION['text'] = "Data berhasil disimpan";
        header("Location:menudataadminpage.php");
        exit;
    } else {
        $_SESSION['status'] = "Gagal Menambahkan Data";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Terjadi Kesalahan";
        header("Location:tambahadminpage.php");
        exit;
    }
}
?>
