<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
            <style>
    .navbar {
      height: 65px; /* Mengatur tinggi navbar */
    }
    .card{
      border:none;
    }
    .card-title a{
      text-decoration:none;
      color:black;
    }
   .card-title a:hover{
      color:blue!important
    }
    .table a{
      text-decoration:none;
      color:black
    }
    .table a:hover{
      color:blue;
    }
    </style>
    </head>
    <body style="background-color:#eee;">
        <?php 
        session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">
        <img src="profile/logo.png" alt="Logo" style="width: 50px; height: auto;">
        <h2 class="d-inline-block align-middle mb-0 ms-2">samarindaetam</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list text-white"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="index.php">Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori
            </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <li><a class="dropdown-item" href="kategoripolitikpage.php">Politik</a></li>
        <li><a class="dropdown-item" href="kategorimakananpage.php">Makanan</a></li>
        <li><a class="dropdown-item" href="kategoriolahragapage.php">Olahraga</a></li>
        <li><a class="dropdown-item" href="kategoriedukasipage.php">Edukasi</a></li>
        <li><a class="dropdown-item" href="kategoribisnispage.php">Bisnis</a></li>
        <li><a class="dropdown-item" href="kategorikesehatanpage.php">Kesehatan</a></li>
        
        </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="contactpage.php">Contact</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link text-light" href="login.php">Login</a>
          </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="register.php ">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
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
                            <form action="registerproccess.php" method="post"enctype="multipart/form-data">
                                <div class="mb-4">
                                    <label for="usename" class="form-label">Username</label>
                                    <input
                                        type="text"
                                        name="username"
                                        id="username"
                                        class="form-control"
                                        required="required"
                                        placeholder="Masukkan Username Anda"/>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        required="required"
                                        placeholder="Masukkan Email Anda"/>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        class="form-control"
                                        required="required"
                                        placeholder="Buat Password Anda"/>
                                </div>
                             
                                   <div class="mb-4">
                                    <label for="role" class="form-label">Role</label>
                                    <select name="role" id="role" class="form-select">
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
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
        <script src="js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
       if (isset($_SESSION['status'])&& $_SESSION['status']!='')
       {
           ?> 
           <script>
               swal.fire({
                   title:"<?php echo $_SESSION['status']; ?>",
                   icon:"<?php echo $_SESSION['icon']; ?>",
                   text:"<?php echo $_SESSION['text']; ?>",
               })
           </script>
           <?php
           unset($_SESSION['status']);
           unset($_SESSION['icon']);
           unset($_SESSION['text']);
       }
       ?>
       <?php
       include "footer.php";
       ?>
    </body>
</html>