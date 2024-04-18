<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../koneksi.php";
    session_start();
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    
    $id_user = $_SESSION['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
    $userData = mysqli_fetch_assoc($query);
    $storedPassword = $userData['password'];

    if ($newPassword != $confirmPassword) {
        $_SESSION['status'] = "Gagal";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Konfirmasi password tidak cocok";
        header("Location: indexprofil.php");
        exit;
    }
    
    $updateQuery = "UPDATE user SET username = '$username', email = '$email'";
    if (!empty($newPassword)) {
        $updateQuery .= ", password = '$newPassword'";
    }
    
    $updateQuery .= " WHERE id_user = '$id_user'";
    
    if (mysqli_query($koneksi, $updateQuery)) {
        $_SESSION['status'] = "Berhasil";
        $_SESSION['icon'] = "success";
        $_SESSION['text'] = "Profil berhasil diperbarui";
        header("Location: indexprofil.php");
        exit;
    } else {
        $_SESSION['status'] = "Gagal";
        $_SESSION['icon'] = "error";
        $_SESSION['text'] = "Gagal memperbarui profil, silakan coba lagi";
        header("Location: indexprofil.php");
        exit;
    }
}
?>
