<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:../login.php");
    exit;
}
include "../koneksi.php";

// Include header
include "header.php";

// Script untuk menghapus data
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    if (isset($_GET['id_ulasan'])) {
        $id_ulasan = $_GET['id_ulasan'];
        $delete_query = mysqli_query($koneksi, "DELETE FROM contact_messages WHERE id = '$id_ulasan'");
        if ($delete_query) {
            $_SESSION['status'] = "Berhasil";
            $_SESSION['icon'] = "success";
            $_SESSION['text'] = "Data berhasil dihapus";
        } else {
            $_SESSION['status'] = "Gagal";
            $_SESSION['icon'] = "error";
            $_SESSION['text'] = "Gagal menghapus data";
        }
    }
}

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
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="indexadmin.php">Home</a>
                    </li>
                    <form class="d-flex" method="post">
                        <input class="form-control me-2" type="text" name="keyword" placeholder="Cari Username Admin" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit" name="cari">Search</button>
                    </form>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="width:100px; background-color:black; text-align:center; border-radius:15px;">
                        <a class="nav-link active fw-bold" aria-current="page" href="../logout.php" style="color:white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2 class="fw-bold text-white">DATA ULASAN</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- PHP code to fetch data from contact_messages table -->
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM contact_messages ORDER BY id DESC");
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $data['username'] ?></td>
                                            <td><?= $data['email'] ?></td>
                                            <td><?= $data['judul_ulasan'] ?></td>
                                            <td>
                                                <div class="btn-group" style="margin-top:2px;">
                                                    <a href="viewulasanpage.php?id_ulasan=<?= $data['id'] ?>" class="btn btn-dark" style="width:70px; font-size:12px; margin:2px;">Baca</a>
                                                    <a href="?action=delete&id_ulasan=<?= $data['id'] ?>" class="btn btn-secondary delete-link" style="width:70px; font-size:12px; margin:2px;">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include footer -->
    <?php include "footer.php"; ?>

    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo "<script>
            swal.fire({
                title: \"{$_SESSION['status']}\",
                icon: \"{$_SESSION['icon']}\",
                text: \"{$_SESSION['text']}\"
            });
          </script>";
        // Menghapus session notifikasi setelah ditampilkan
        unset($_SESSION['status']);
        unset($_SESSION['icon']);
        unset($_SESSION['text']);
    }
    ?>
</div>
</body>

</html>