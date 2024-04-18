<?php
$limit = 5;
if (isset($_GET["page"])) {
  $page  = $_GET["page"];
} else {
  $page = 1;
};
$start_from = ($page - 1) * $limit;

include "koneksi.php";
error_reporting(0);
include "header.php";
?>

<section id="content">
  <div class="container" style="margin-top:50px;">
    <form class="d-flex" method="post" style="margin-bottom:50px;">
      <input class="form-control me-2" type="text" name="keyword" placeholder="Cari Judul Berita" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit" name="cari"><i class="bi bi-search"></i></button>
    </form>
    <div id="content-news" class="row" style="margin-top:50px;" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-12 col-md-8">
        <h3 class="fw-bold">Baca Berita</h3>
        <hr>
        <?php
        $no = 1;
        $keyword = $_POST['keyword'];

        if ($keyword != '') {
          $result = mysqli_query($koneksi, "SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori WHERE judul_berita LIKE '%$keyword%' LIMIT $start_from, $limit");
        } else {
          $result = mysqli_query($koneksi, "SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori ORDER BY RAND() LIMIT $start_from, $limit");
        }
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <div class="card border-0 w-100">

            <div class="row g-0 align-items-center">
              <div class="col-md-4 col-4 position-relative">
                <img src="assets/images/<?= $data['gambar_berita'] ?>" class="img-fluid rounded my-auto" style="width:100%; height:100%;">
              </div>
              <div class="col-md-8 col-8">
                <div class="card-body p-2 p-md-3">
                  <span class="text-danger fw-bold list-label"><?= $data['nama_kategori'] ?></span>
                  <h5 class="card-title multi-line-truncate list-judul my-lg-4"><?= $data['judul_berita'] ?></h5>
                  <a href="beritapage.php?id_berita=<?= $data['id_berita'] ?>" class="stretched-link"></a>
                  <small class="text-muted penulis me-4"><?= $data['penulis_berita'] ?></small>
                  <small class="text-muted"><?= $data['tgl_berita'] ?></small>
                </div>
              </div>
            </div>
            <hr class="m-2">
          </div>
        <?php
        }
        ?>
        <?php

        $result_db = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah FROM berita");
        $row_db = mysqli_fetch_row($result_db);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        /* echo  $total_pages; */
        $pagLink = "<ul class='pagination'>";
        for ($i = 1; $i <= $total_pages; $i++) {
          $pagLink .= "<li class='page-item'><a class='page-link bg-dark text-white' href='index.php?page=" . $i . "'>" . $i . "</a></li>";
        }
        echo $pagLink . "</ul>";
        ?>

      </div>
      <div class="col-md-4 border-start d-none d-md-block">
        <h3 class="fw-bold">Berita Terbaru</h3>
        <hr>
        <table class="table table-striped border" style="border-radius:15px;" data-aos="fade-up" data-aos-duration="1000">
          <?php
          $no = 1;
          include "koneksi.php";
          $query = $koneksi->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori  ORDER BY tgl_berita DESC LIMIT 10");
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td>
                <span class="fw-bold text-dark"><?= $data['nama_kategori'] ?></span>
                <br>
                <a href="beritapage.php?id_berita=<?= $data['id_berita'] ?>" class="multi-line-truncate mb-0 mt-2"><?= $data['judul_berita'] ?></a>
              </td>
            </tr>

          <?php
          } ?>
        </table>

      </div>
    </div>
  </div>
</section>
<?php
include "footer.php"
?>

</body>

</html>