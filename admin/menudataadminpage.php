<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:../login.php");
    exit;
}
include "../koneksi.php";

include "header.php";

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE role = 'admin'");
$data = mysqli_fetch_array($query);
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
                        <a class="nav-link" href="indexadmin.php">Home</a>
                    </li>
                    <form class="d-flex" method="post">
                        <input class="form-control me-2" type="text" name="keyword" placeholder="Cari Username Admin" aria-label="Search">
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
                            <h2 class="text-white fw-bold">DATA ADMIN</h2>
                            <a href="tambahadminpage.php" class="btn btn-secondary fw-bold">Tambah Admin</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Foto Profile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $limit = 5;
                                    if (isset($_GET["page"])) {
                                        $page  = $_GET["page"];
                                    } else {
                                        $page = 1;
                                    };
                                    $start_from = ($page - 1) * $limit;
                                    $level = "admin";
                                    $no = 1;
                                    if (isset($_POST['keyword'])) {
                                        $keyword = $_POST['keyword'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username LIKE '%$keyword%' AND role='$level'");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE role='$level' ORDER BY id_user  ASC LIMIT $start_from, $limit");
                                    }
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr class="align-middle">
                                            <td><?= $no++ ?></td>
                                            <td><b><?= $data['username'] ?><b></td>
                                            <td><?= $data['email'] ?></td>
                                            <td><img src="../assets/profile/<?= $data['thumbnail'] ?>" style="width:50px; height:50px; border-radius:50%;"></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="editadminpage.php?id=<?= $data['id_user'] ?>" class="btn btn-dark" style="width:50px; font-size:12px; margin:2px;">Edit</a>
                                                    <a href="deleteadmin.php?id=<?= $data['id_user'] ?>" class="btn btn-secondary delete-link" style="width:70px; font-size:12px; margin:2px;">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php

                            $result_db = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah FROM user WHERE role='$level'");
                            $row_db = mysqli_fetch_row($result_db);
                            $total_records = $row_db[0];
                            $total_pages = ceil($total_records / $limit);
                            $pagLink = "<ul class='pagination'>";
                            for ($i = 1; $i <= $total_pages; $i++) {
                                $pagLink .= "<li class='page-item'><a class='page-link bg-dark text-white' href='menudataadminpage.php?page=" . $i . "'>" . $i . "</a></li>";
                            }
                            echo $pagLink . "</ul>";
                            ?>
                        </div>
                    </div>
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