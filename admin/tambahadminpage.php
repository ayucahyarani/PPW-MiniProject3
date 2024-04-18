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
                    <li class="nav-item" style="width:100px; background-color:red; text-align:center; border-radius:15px;">
                        <a class="nav-link active fw-bold" aria-current="page" href="../logout.php" style="color:white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col py-3" style="display:flex; justify-content:center;">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-header" style="background-color:black;">
                            <div class="d-flex justify-content-between">
                                <h2 class="fw-bold text-white">Tambah Data Admin</h2>
                                <a href="menudataadminpage.php" class="btn btn-secondary fw-bold">Daftar Data Admin</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body" style="background-color:#e4dfdf;">
                                <form action="tambahadminproses.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-4">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" required="required">
                                    </div>
                                    <input type="hidden" id="pekerjaan" name="pekerjaan" value="admin">
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required="required">
                                    </div>
                                    <div class="mb-4">
                                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                        <select name="jeniskelamin" id="jeniskelamin" class="form-select">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required="required">
                                    </div>
                                    <div class="mb-4">
                                        <label for="confirm_password" class="form-label">Confirm Password</label>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required="required">
                                    </div>
                                    <div class="mb-4">
                                        <label for="thumbnail" class="Thumbnail">Thumbnail</label>
                                        <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                    </div>
                                    <div class="text-center">
                                        <input type="hidden" id="level" name="level" value="admin">
                                        <button type="submit" class="btn btn-dark text-white" name="registeradmin">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <script>
        swal.fire({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "<?php echo $_SESSION['icon']; ?>",
            text: "<?php echo $_SESSION['text']; ?>"
        })
    </script>
<?php
    unset($_SESSION['status']);
    unset($_SESSION['icon']);
    unset($_SESSION['text']);
}
?>

<body>

    </html>