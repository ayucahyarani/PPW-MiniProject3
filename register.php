<?php
session_start();
include "koneksi.php";

include "header.php";
?>

<div class="container my-5">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card rounded-10">
        <div class="card-header bg-dark">
          <h2 class="text-center fw-bold text-white mt-3">Registrasi</h2>
          <br>
          <p class="text-white">Sudah memiliki akun?
            <a href="login.php">
              <button type="button" class="btn btn-outline-primary">Login</button>
            </a>
          </p>
        </div>
        <div class="card-body">
          <form action="registerproccess.php" method="post" enctype="multipart/form-data">
            <div class="mb-4">
              <label for="usename" class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" required="required" placeholder="Masukkan Username Anda" />
            </div>
            <div class="mb-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Masukkan Email Anda" />
            </div>
            <div class="mb-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" required="required" placeholder="Buat Password Anda" />
            </div>

            <div class="text-center pt-1 mb-3 pb-1">
              <button type="submit" class="btn btn-dark" name="register">Register</button>
            </div>
          </form>
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
      text: "<?php echo $_SESSION['text']; ?>",
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