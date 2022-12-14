<?php
//mengakses file koneksi.php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$pass = $_POST['pass'];

$sqlQuery = "INSERT INTO registrasi (nama, email, telefon, pass)
              VALUES('$nama', '$email', '$telefon', '$pass');";

$inserted = $koneksi->query($sqlQuery);

if($inserted){
  echo "Berhasil Insert Data Pengunjung";
  header('location:LANDING PAGE.html');
}else{
  echo "Gagal Insert Data Pengunjung". $koneksi->error;
}