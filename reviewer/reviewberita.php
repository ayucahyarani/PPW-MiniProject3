<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:../login.php");
    exit;
}
include "../koneksi.php";

// Ambil ID Berita dari parameter URL
$id_berita = $_GET['id_berita'];

// Query untuk mengambil data berita berdasarkan ID
$query_berita = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id_berita'");
$data_berita = mysqli_fetch_array($query_berita);

// Query untuk mengambil ulasan-ulasan berdasarkan ID Berita
$query_ulasan = mysqli_query($koneksi, "SELECT * FROM ulasan WHERE id_berita='$id_berita'");
?>

<?php include "header.php"; ?>
<div class="container my-5 w-75">
    <div class="">
        <div class="col-md-8 w-100">
            <div class="card">
                <div class="card-header">
                    <h3 class="fw-bold text-center text-white">Review Berita</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $data_berita['judul_berita'] ?></h5>
                    <p class="card-text">Kategori: <?= $data_berita['id_kategori'] ?></p>
                    <p class="card-text">Penulis: <?= $data_berita['penulis_berita'] ?></p>
                    <p class="card-text">Tanggal: <?= $data_berita['tgl_berita'] ?></p>
                    <img src="../assets/images/<?= $data_berita['gambar_berita'] ?>" class="img-fluid mb-3" alt="Gambar Berita">

                    <!-- Form untuk reviewer memberikan ulasan atau koreksi -->
                    <form action="reviewproccess.php" method="post">
                        <input type="hidden" name="id_berita" value="<?= $data_berita['id_berita'] ?>">
                        <div class="form-group">
                            <label for="ulasan">Tambahkan Ulasan / Koreksi</label>
                            <textarea class="form-control" name="ulasan" rows="5" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
