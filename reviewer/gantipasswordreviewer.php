<?php
session_start();
include "../koneksi.php";

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login
if (!isset($_SESSION['login'])) {
    $_SESSION['status'] = "Maaf";
    $_SESSION['icon'] = "error";
    $_SESSION['text'] = "Anda harus login terlebih dahulu";
    header("location:../login.php");
    exit;
}

// Ambil data pengguna dari database berdasarkan id pengguna yang sedang login
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_SESSION[id]'");
$data = mysqli_fetch_array($query);

$page = "profil";

include "header.php";
?>

<div class="col py-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="../assets/profile/<?= $data['thumbnail'] ?>" style="width :35px; height:35px; border-radius:50%;" class="d-inline-block align-text-top">
                <?= $data['username'] ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="width:100px; background-color:black; text-align:center; border-radius:15px;">
                        <a class="nav-link active fw-bold" aria-current="page" href="../logout.php" style="color:white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card border-0">
                    <div class="card-header bg-dark text-white text-center">
                        Ubah Password
                    </div>
                    <form action="gantipasswordreviewerproccess.php" method="POST">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="password_lama" class="form-label">Password Lama</label>
                                <input type="password" class="form-control" id="password_lama" name="password_lama" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_baru" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="password_baru" name="password_baru" required>
                            </div>
                            <div class="mb-3">
                                <label for="konfirmasi_password" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" required>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>