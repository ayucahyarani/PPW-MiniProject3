<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location:../login.php");
  exit;
}
include "../koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM  user WHERE id_user='$_SESSION[id]'");
$data = mysqli_fetch_array($query);

$level = "admin";
$data = mysqli_fetch_array($query);
$dataadmin = $koneksi->query("SELECT COUNT(*) as jumlah FROM user WHERE role='$level'")->fetch_assoc();
$databerita = $koneksi->query("SELECT COUNT(*) as jumlah FROM berita")->fetch_assoc();
$dataulasan = $koneksi->query("SELECT COUNT(*) as jumlah FROM ulasan")->fetch_assoc();

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

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner" style="margin-top:10px; height:100px;">
              <h4 style="text-align:center;">Jumlah Admin</h4>
              <h1 class="fw-bold" style="text-align:center;"><?= $dataadmin['jumlah'] ?> <i class="bi bi-person-fill"></i></h1>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner" style="margin-top:10px; height:100px;">
              <h4 style="text-align:center;">Jumlah Berita</h4>
              <h1 class="fw-bold" style="text-align:center;"><?= $databerita['jumlah'] ?> <i class="bi bi-clipboard-data"></i></h1>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-secondary">
            <div class="inner" style="margin-top:10px; height:100px;">
              <h4 style="text-align:center;">Jumlah Ulasan</h4>
              <h1 class="fw-bold" style="text-align:center;"><?= $dataulasan['jumlah'] ?> <i class="bi bi-graph-up"></i></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
include "footer.php";

if (isset($_SESSION['berhasil']) && $_SESSION['berhasil'] != '') {
?>
  <script>
    swal.fire({
      title: "Login Sukses",
      icon: "success"
    })
  </script>
<?php
  unset($_SESSION['berhasil']);
}
?>
</body>

</html>