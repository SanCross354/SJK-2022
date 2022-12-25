<?php
// session_start();
include 'koneksi.php';
if (isset($_POST['button'])){   
    if(!isset($_FILES['image']['tmp_name'])){
      echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    } else {
      $fileName = basename($_FILES["image"]["name"]); 
      $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
      $file_size = $_FILES['image']['size'];

      // Allow certain file formats 
      $allowTypes = array('jpg','png','jpeg','gif');

      if(in_array($fileType, $allowTypes)) {
          $image = $_FILES['image']['tmp_name']; 
          $imgContent = addslashes(file_get_contents($image));
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $telefon = $_POST['telefon'];
          $pass = $_POST['pass'];
          $caption = $_POST['caption'];
          $query = mysqli_query($koneksi, "INSERT INTO pengunjung (foto, nama, email, telefon, pass, caption)
                                     VALUES('".$imgContent."', '$nama','$email', '$telefon', '$pass', '$caption')");
          header("location : LOGIN PAGE.php");
      } else {
          echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
      }
    }  
} else {
  echo "Gagal Insert Data Pengunjung". $koneksi->error;
};
