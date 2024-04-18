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
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-header" style="background-color:black;">
                        <div class="d-flex justify-content-between">
                            <h2 class="text-white fw-bold">Tambah Berita</h2>
                            <a href="databeritapage.php" class="btn btn-secondary fw-bold">Daftar Berita</a>
                        </div>
                    </div>
                    <div class="card-body" style="background-color:#e4dfdf;">
                        <form action="tambahprosesberita.php" method="post" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="judul_berita" class="form-label">Judul Berita</label>
                                <input type="text" name="judul_berita" id="judul_berita" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="penulis_berita" class="form-label">Penulis Berita</label>
                                <input type="text" name="penulis_berita" id="penulis_berita" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="isi_berita" class="form-label">Content</label>
                                <textarea name="isi_berita" id="isi_berita" class="form-control"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="id_kategori" class="category">Category</label>
                                <select name="id_kategori" id="id_kategori" class="form-select">
                                    <option value="1">Politik</option>
                                    <option value="2">Bisnis</option>
                                    <option value="3">Olahraga</option>
                                    <option value="4">Makanan</option>
                                    <option value="5">Kesehatan</option>
                                    <option value="6">Edukasi</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="tgl_berita">Tanggal</label>
                                <input type="date" name="tgl_berita" class="form-control" value="<?php echo date('Y-m-d'); ?>" />
                            </div>
                            <div class="mb-4">
                                <label for="gambar_berita" class="Thumbnail">Thumbnail</label>
                                <input type="file" name="gambar_berita" id="gambar_berita" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="add" class="btn btn-dark">Tambah</button>
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