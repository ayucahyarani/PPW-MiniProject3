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
          <h2 class="text-center fw-bold text-white mt-3">Login</h2>
          <br>
          <form action="loginproccess.php" method="post">
            <p class="text-white">Silahkan login menggunakan akun anda</p>
        </div>

        <div class="card-body">
          <div class="mb-4">
            <label class="form-label" for="id">Username</label>
            <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan Username Anda" />
          </div>

          <div class="mb-4">
            <label class="form-label" for="password_user">Password</label>
            <input type="password" name="password_user" id="password_user" class="form-control" placeholder="Masukkan Password Anda" />
          </div>

          <div class="mb-4">
              <label for="role" class="form-label">Role</label>
              <select name="role" id="role" class="form-select">
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="reviewer">Reviewer</option>
              </select>
            </div>

          <div class="text-center pt-1 mb-5 pb-1">
            <button type="submit" class="btn btn-dark" name="login" id="btn">Login</button>
          </div>

          <div class="d-flex align-items-center justify-content-center pb-4">
            <p class="mb-0 me-2">Belum memiliki akun?</p>
            <a href="register.php">
              <button type="button" class="btn btn-outline-primary">Register</button></a>
          </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
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

</html