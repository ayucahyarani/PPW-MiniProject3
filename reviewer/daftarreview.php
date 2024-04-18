<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location:../login.php");
  exit;
}
include "../koneksi.php";

// Ambil ID Pengguna dari session
$id_pengguna = $_SESSION['id'];

// Query untuk mengambil daftar berita yang sudah diberikan ulasan oleh pengguna
$query_berita_dengan_ulasan = mysqli_query($koneksi, "SELECT berita.*, ulasan.id_ulasan
                            FROM berita
                            INNER JOIN ulasan ON berita.id_berita = ulasan.id_berita
                            WHERE ulasan.id_user = '$id_pengguna'");

include "header.php"; ?>

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
          <form class="d-flex" method="post">
            <input class="form-control me-2" type="text" name="keyword" placeholder="Cari Judul Berita" aria-label="Search">
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

  <div class="container my-5">

    <div class="row">
      <div class="col-md-12">
        <div class="card border-0">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h2 class="fw-bold text-white">Ulasan Anda</h2>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Penulis</th>
                    <th scope="col" style="width: 10%">Tanggal</th>
                    <th scope="col" style="width: 15%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  while ($data_berita = mysqli_fetch_array($query_berita_dengan_ulasan)) {
                  ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td>
                        <img src="../assets/images/<?= $data_berita['gambar_berita'] ?>" class="img-fluid" style="width:150px;">
                      </td>
                      <td><?= $data_berita['judul_berita'] ?></td>
                      <td><?= $data_berita['id_kategori'] ?></td>
                      <td><?= $data_berita['penulis_berita'] ?></td>
                      <td><?= $data_berita['tgl_berita'] ?></td>
                      <td>
                        <button class="btn btn-primary lihat-ulasan" data-bs-toggle="modal" data-bs-target="#modalUlasan<?= $data_berita['id_ulasan'] ?>">Lihat Ulasan</button>
                      </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modalUlasan<?= $data_berita['id_ulasan'] ?>" tabindex="-1" aria-labelledby="modalUlasanLabel<?= $data_berita['id_ulasan'] ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalUlasanLabel<?= $data_berita['id_ulasan'] ?>">Ulasan Berita</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <?php
                            // Query untuk mengambil ulasan berdasarkan id ulasan
                            $id_ulasan = $data_berita['id_ulasan'];
                            $query_ulasan = mysqli_query($koneksi, "SELECT isi_ulasan FROM ulasan WHERE id_ulasan = '$id_ulasan'");
                            $data_ulasan = mysqli_fetch_array($query_ulasan);
                            ?>
                            <!-- Isi Ulasan Berita -->
                            <div><?= $data_ulasan['isi_ulasan'] ?></div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
</div>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>