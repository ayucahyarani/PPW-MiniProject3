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
    <div class="container">
        <div class="card" style="height:500px; margin-top:50px; width:400px;">
            <div class="card-body">
                <form action="gantipasswordadminprocces.php" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="currentPassword" class="form-label">Password Lama</label>
                        <input type="password" name="currentPassword" id="currentPassword" class="form-control" require="required">
                    </div>
                    <div class="mb-4">
                        <label for="newPassword" class="form-label">Password Baru</label>
                        <input type="password" name="newPassword" id="newPassword" class="form-control" require="required">
                    </div>
                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" require="required">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark" name="submit">Konfirmasi</button>
                    </div>
                </form>
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
</body>

</html>