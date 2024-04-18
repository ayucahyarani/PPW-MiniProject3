<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:../login.php");
    exit;
}
include "../koneksi.php";

// Include header
include "header.php";
?>
<div class="col py-3">
    <!-- Navbar -->
    <!-- Navbar Code -->

    <!-- Main content -->
    <?php
    if (isset($_GET['id_ulasan'])) {
        include "../koneksi.php";
        $id = $_GET['id_ulasan'];
        $query = mysqli_query($koneksi, "SELECT * FROM contact_messages WHERE id ='$id'");
        $data = mysqli_fetch_array($query);
    ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-header" style="background-color:black;">
                            <div class="d-flex justify-content-between">
                                <h2 class="fw-bold text-white">Baca Ulasan</h2>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body" style="background-color:#e4dfdf;">
                                <form>
                                    <h3 class="fw-bold"> Data Pengirim :</h3>
                                    <div class="mb-2">
                                        <h5><label for="usename" class="form-label">Username :</label>
                                            <?php echo $data['username'] ?></h5>
                                    </div>
                                    <div class="mb-2">
                                        <h5><label for="email" class="form-label"> Email :</label>
                                            <?php echo $data['email'] ?></h5>
                                    </div>
                                    <div class="mb-4">
                                        <h5><label for="content" class="form-label">Judul :</label>
                                            <?php echo $data['judul_ulasan'] ?></h5>
                                        <label for="content" class="form-label">Pesan yang disampaikan</label>
                                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" disabled><?= $data['content'] ?></textarea>
                                    </div>
                                    <div class="text-center">
                                        <a href="dataulasanpage.php" class="btn btn-dark text-white">Kembali</a>
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
    }
?>
</body>

</html>
