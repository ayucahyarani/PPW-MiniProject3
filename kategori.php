<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['login'])) {
  $_SESSION['status'] = "Maaf";
  $_SESSION['icon'] = "error";
  $_SESSION['text'] = "Anda harus login terlebih dahulu";
  header("location:login.php");
  exit;
}
//$id = "Bisnis";
$id = $_GET['id'];
$limit = 5;
if (isset($_GET["page"])) {
  $page  = $_GET["page"];
} else {
  $page = 1;
};
$start_from = ($page - 1) * $limit;

include "header.php";
?>
<section id="content">
  <div class="container" style="margin-top:50px;">
    <div class="d-flex justify-content-between">
      <h3 class="fw-bold">Berita Terbaru</h3>

    </div>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 row-cols-2 row-cols-lg-4 g-4 g-lg-3 m-0 w-100">

      <?php
      $query = $koneksi->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori WHERE berita.id_kategori='$id' ORDER BY tgl_berita DESC LIMIT 4");

      while ($data = mysqli_fetch_array($query)) {
      ?>
        <div class="col">
          <div class="card border-0 h-100 mb-2 mb-md-4">
            <span class="label-category p-1"><?= $data['nama_kategori'] ?></span>
            <img src="assets/images/<?= $data['gambar_berita'] ?>" alt="" class="thumbnail-latets" style="height:100%">
            <div class="card-body p-0">
              <p class="card-title-latets mb-2 mb-md-3 multi-line-truncate"><?= $data['judul_berita'] ?></p>
              <a href="beritapage.php?id_berita=<?= $data['id_berita'] ?>" class="stretched-link"></a>
              <div class="d-flex justify-content-between">
                <small class="text-muted"><?= $data['tgl_berita'] ?></small>
                <small class="text-muted"><?= $data['penulis_berita'] ?></small>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div id="content-news" class="row" style="margin-top:50px;" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-12 col-md-12">
        <h3 class="fw-bold">BACA BERITA</h3>
        <hr>
        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori WHERE berita.id_kategori='$id' ORDER BY id_berita DESC LIMIT $start_from, $limit");
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <div class="card border-0 w-100">
            <div class="row g-0 align-items-center">
              <div class="col-md-4 col-4 position-relative">
                <img src="assets/images/<?= $data['gambar_berita'] ?>" class="img-fluid rounded my-auto" style="width:400px; heigth:100%;">
              </div>
              <div class="col-md-8 col-8">
                <div class="card-body p-2 p-md-3">
                  <h3 class="text-danger fw-bold list-label"><?= $data['nama_kategori'] ?></h3>
                  <h2 class="card-title multi-line-truncate list-judul my-lg-4"><?= $data['judul_berita'] ?></h2>
                  <a href="beritapage.php?id_berita=<?= $data['id_berita'] ?>" class="stretched-link"></a>
                  <large class="text-muted penulis me-4"><?= $data['penulis_berita'] ?></large>
                  <large class="text-muted"><?= $data['tgl_berita'] ?></large>
                </div>
              </div>
            </div>
            <hr class="m-2">
          </div>
        <?php
        }
        ?>
      </div>
      <?php
      $result_db = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah FROM berita WHERE id_kategori ='$id'");
      $row_db = mysqli_fetch_row($result_db);
      $total_records = $row_db[0];
      $total_pages = ceil($total_records / $limit);

      $pagLink = "<ul class='pagination'>";
      for ($i = 1; $i <= $total_pages; $i++) {
        $pagLink .= "<li class='page-item'><a class='page-link bg-dark text-white' href='kategori.php?id=" . $id . "&page=" . $i . "'>" . $i . "</a></li>";
      }
      echo $pagLink . "</ul>";
      ?>

    </div>
  </div>
  </div>
  <?php
  include "footer.php";
  ?>

  </body>

  </html>