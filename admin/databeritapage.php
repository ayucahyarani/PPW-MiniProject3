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
                            <h2 class="fw-bold text-white">DATA BERITA</h2>
                            <a href="tambahberitapage.php" class="btn btn-secondary fw-bold">Tambah Berita</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include "../koneksi.php";
                                    error_reporting(0);
                                    $limit = 5;
                                    if (isset($_GET["page"])) {
                                        $page  = $_GET["page"];
                                    } else {
                                        $page = 1;
                                    };
                                    $start_from = ($page - 1) * $limit;
                                    $no = 1;
                                    $keyword = $_POST['keyword'];
                                    if ($keyword != '') {
                                        $query = mysqli_query($koneksi, "SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori WHERE judul_berita LIKE '%$keyword%'");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori=kategori.id_kategori ORDER BY id_berita ASC LIMIT $start_from, $limit ");
                                    }
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td style="width:150px; font-size:15px;"><b><?= $data['judul_berita'] ?><b></td>
                                            <td><?= $data['nama_kategori'] ?></td>
                                            <td><?= $data['penulis_berita'] ?></td>
                                            <td><?= $data['tgl_berita'] ?></td>
                                            <td>
                                                <img src="../assets/images/<?= $data['gambar_berita'] ?>" class="img-fluid" style="width:100px; height:100px;">
                                            </td>
                                            <td>
                                                <div class="btn-group" style="margin-top:30px;">
                                                    <a href="editberitapage.php?id_berita=<?= $data['id_berita'] ?>" class="btn btn-dark" style="width:50px; font-size:12px; margin:2px;">Edit</a>
                                                    <a href="deleteberita.php?id_berita=<?= $data['id_berita'] ?>" class="btn btn-secondary delete-link" style="width:70px; font-size:12px; margin:2px;">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                            $result_db = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah FROM berita");
                            $row_db = mysqli_fetch_row($result_db);
                            $total_records = $row_db[0];
                            $total_pages = ceil($total_records / $limit);
                            $pagLink = "<ul class='pagination'>";
                            for ($i = 1; $i <= $total_pages; $i++) {
                                $pagLink .= "<li class='page-item'><a class='page-link bg-dark text-white' href='databeritapage.php?page=" . $i . "'>" . $i . "</a></li>";
                            }
                            echo $pagLink . "</ul>";
                            ?>
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
    </body>

    </html>