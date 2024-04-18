<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:../login.php");
    exit;
}
include "../koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM  user WHERE id_user='$_SESSION[id]'");
$data = mysqli_fetch_array($query);

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
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="indexadmin.php">Home <i class="bi bi-house"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="width:100px; background-color:black; text-align:center; border-radius:15px;">
                        <a class="nav-link active fw-bold" aria-current="page" href="../logout.php" style="color:white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    if (isset($_GET['id'])) {
        include "../koneksi.php";
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE 
id_user='$id'");
        $data = mysqli_fetch_array($query);
    ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-header" style="background-color:black;">
                            <div class="d-flex justify-content-between">
                                <h2 class="fw-bold text-white">Edit Data Admin</h2>
                                <a href="menudataadminpage.php" class="btn btn-secondary fw-bold">Daftar Data Admin</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body" style="background-color:#e4dfdf;">
                                <form action="editproccessadmin.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <div class="mb-4">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" value="<?= $data['username'] ?>">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="<?= $data['email'] ?>">
                                    </div>
                                    <div class="mb-4">
                                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                        <select name="jeniskelamin" id="jeniskelamin" class="form-select">
                                            <option value="Laki-Laki" <?= $data['jeniskelamin'] == "Laki-Laki" ? "Selected" : "" ?>>Laki-Laki</option>
                                            <option value="Perempuan" <?= $data['jeniskelamin'] == "Perempuan" ? "Selected" : "" ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <input type="hidden" id="pekerjaan" name="pekerjaan" value="admin">

                                    <input type="hidden" name="old_thumbnail" value="<?= $data['thumbnail'] ?>">
                                    <div class="mb-4">
                                        <label for="thumbnail" class="Thumbnail">Foto Profile</label>
                                        <br>
                                        <img src="../assets/profile/<?= $data['thumbnail'] ?>" class="img-fluid img-thumbnail my-3" width="100">
                                        <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="edit" class="btn btn-dark">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
        include "footer.php";
?>
</body>

</html>
<?php
    }
?>