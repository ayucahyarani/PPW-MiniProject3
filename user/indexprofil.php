<?php
session_start();
include "../koneksi.php";

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login
if (!isset($_SESSION['login'])) {
  $_SESSION['status'] = "Maaf";
  $_SESSION['icon'] = "error";
  $_SESSION['text'] = "Anda harus login terlebih dahulu";
  header("location:../login.php");
  exit;
}

// Ambil data pengguna dari database berdasarkan id pengguna yang sedang login
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_SESSION[id]'");
$data = mysqli_fetch_array($query);

include "header.php";
?>

<section>
  <div class="container mt-5 d-flex flex-column">
    <!-- Alert untuk menampilkan notifikasi -->
    <div>
      <?php if (isset($_SESSION['status']) && isset($_SESSION['icon']) && isset($_SESSION['text'])) { ?>
        <div class="alert alert-<?php echo $_SESSION['icon'] == 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show mt-3" role="alert">
          <?php echo $_SESSION['text']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        // Hapus session setelah notifikasi ditampilkan
        unset($_SESSION['status']);
        unset($_SESSION['icon']);
        unset($_SESSION['text']);
        ?>
      <?php } ?>
    </div>
    <div class="justify-content-center">
      <div class="col-md-8 mb-4">
        <div class="card" style="width: 75vh; min-height: 500px;">
          <div class="card-header bg-dark text-white text-center">
            Profil Pengguna
          </div>
          <form action="ubahprofilprocess.php" method="POST">
            <div class="card-body">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username']; ?>">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
              </div>
              <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password Baru</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include "footer.php";
?>
