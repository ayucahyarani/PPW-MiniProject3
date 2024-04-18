<?php
if (isset($_POST['edit'])) {
   include '../koneksi.php';
   session_start();
   $username = $_POST['username'];
   $id = $_POST['id'];
   $email = $_POST['email'];
   $jeniskelamin = $_POST['jeniskelamin'];
   $extension_allowed = array('png', 'jpg', 'jpeg');

   // Check if a new file is uploaded
   if (!empty($_FILES['thumbnail']['name'])) {
      $name = $_FILES['thumbnail']['name'];
      $x = explode('.', $name);
      $extension = strtolower(end($x));
      $size = $_FILES['thumbnail']['size'];
      $file_tmp = $_FILES['thumbnail']['tmp_name'];

      // Check if the uploaded file has allowed extension
      if (in_array($extension, $extension_allowed) === true) {
         // Check if the uploaded file size is within limit
         if ($ukuran < 1044070) {
            // Move the uploaded file to the destination folder
            move_uploaded_file($file_tmp, '../assets/profile/' . $name);
            $thumbnail = $name; // Set the thumbnail to the new filename
         } else {
            $_SESSION['status'] = "Gagal Update Berita";
            $_SESSION['icon'] = "error";
            $_SESSION['text'] = "Ukuran file gambar terlalu besar";
            header("Location: editadminpage.php");
            exit();
         }
      } else {
         $_SESSION['status'] = "Gagal Update Berita";
         $_SESSION['icon'] = "error";
         $_SESSION['text'] = "Ekstensi file gambar tidak sesuai";
         header("Location: editadminpage.php");
         exit();
      }
   } else {
      $thumbnail = $_POST['old_thumbnail'];
   }

   // Update the database
   $query = mysqli_query($koneksi, "UPDATE user SET 
      username='$username', jeniskelamin='$jeniskelamin',
      thumbnail='$thumbnail' WHERE id_user='$id'");

   if ($query) {
      $_SESSION['status'] = "Berhasil Update Data Admin";
      $_SESSION['icon'] = "success";
      $_SESSION['text'] = "Data berhasil diperbarui";
      header("Location: menudataadminpage.php");
   } else {
      $_SESSION['status'] = "Gagal Update Data Admin";
      $_SESSION['icon'] = "error";
      $_SESSION['text'] = "Terjadi Kesalahan";
      header("Location: editadminpage.php");
   }
}
