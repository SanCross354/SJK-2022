<?php 
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];
$password = $_POST['pass'];
 
// update data ke database
$sql = "UPDATE registrasi SET pass='$password' WHERE email='$email'";

if ($koneksi->query($sql) === TRUE) {
  header('location:LANDING PAGE.html');
} else {
  echo "Error updating record: " . $conn->error;
}
?>