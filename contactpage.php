<?php
session_start();
if (!isset($_SESSION['login'])) {
  $_SESSION['status'] = "Maaf";
  $_SESSION['icon'] = "error";
  $_SESSION['text'] = "Anda harus login terlebih dahulu";
  header("location:login.php");
  exit;
}
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM  user WHERE id_user='$_SESSION[id]'");
$data = mysqli_fetch_array($query);

include "header.php";
?>
<div class="container my-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0">
        <div class="card-header" style="background-color:black;">
          <div class="d-flex justify-content-between">
            <h2 class="fw-bold text-white">Contact Us</h2>
          </div>
        </div>
        <div class="card">
          <div class="card-body" style="background-color:#e4dfdf;">
            <form action="contactpageproses.php" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" value="<?= $_SESSION['id'] ?>">
              <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" disabled value="<?= $_SESSION['username'] ?>">
              </div>
              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" disabled value="<?= $_SESSION['email'] ?>">
              </div>
              <div class="mb-4">
                <label for="judul_ulasan" class="form-label">Judul Ulasan</label>
                <input type="text" name="judul_ulasan" id="judul_ulasan" class="form-control" placeholder="Judul">
              </div>
              <div class="mb-4">
                <label for="content" class="form-label">Isi Ulasan</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Silahkan tuliskan pesan anda"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-dark text-white" name="submit">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php";
?>
<?php
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
