<?php
$query = $koneksi->query("SELECT * FROM kategori");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>samarindaetam</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/style/animasi.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <style>
        .navbar {
            height: 65px;
            /* Mengatur tinggi navbar */
        }

        .card {
            border: none;
        }

        .card-title a {
            text-decoration: none;
            color: black;
        }

        .card-title a:hover {
            color: blue !important
        }

        .table a {
            text-decoration: none;
            color: black
        }

        .table a:hover {
            color: blue;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php">
                <img src="assets/profile/logo.png" alt="Logo" style="width: 50px; height: auto;">
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
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                            while ($data = $query->fetch_assoc()) {
                            ?>
                                <li><a class="dropdown-item" href="kategori.php?id=<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contactpage.php">Contact</a>
                    </li>
                    <!-- Check if user is logged in -->
                    <?php if (!isset($_SESSION['login'])) { ?>
                        <!-- If not logged in, show login and signup -->
                        <li class="nav-item">
                            <a class="nav-link text-light" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="register.php">Sign Up</a>
                        </li>
                    <?php } else { ?>
                        <!-- If logged in, show user icon with dropdown for profile and logout -->
                        <li class="nav-item ms-1 dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                                <li><a class="dropdown-item" href="user/indexprofil.php">Profil</a></li>
                                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>