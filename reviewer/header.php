<?php
include "../koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM  user WHERE id_user='$_SESSION[id]'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviewer</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        #menu a:hover {
            backdrop-filter: blur(10px) saturate(180%);
            -webkit-backdrop-filter: blur(10px) saturate(180%);
            background-color: rgba(156, 156, 165, 0.78);
        }

        .card-header {
            background-color: black;
        }

        .card-body {
            background-color: #e4dfdf;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark ">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="# " class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <h2 class="fw-bold d-none d-sm-inline" style="border-bottom:1px solid white; width:100%;">REVIEWER PAGE</h2>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle" style="font-size:20px;">
                                <i class="bi bi-menu-up text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Menu Reviewer</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="indexreviewer.php" class="nav-link px-0 text-light" style="font-size:15px;"> <span class="d-none d-sm-inline">Dashboard</span> <i class="bi bi-house-door"></i></a>
                                </li>
                                <li>
                                    <a href="daftarreview.php" class="nav-link px-0 text-light" style="font: size 15px;"> <span class="d-none d-sm-inline">Daftar Review</span> <i class="bi bi-pencil-square"></i> </a>
                                </li>
                                <li>
                                    <a href="gantipasswordreviewer.php" class="nav-link px-0 text-light" style="font: size 15px;"> <span class="d-none d-sm-inline">Ganti Password</span> <i class="bi bi-gear"></i> </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
