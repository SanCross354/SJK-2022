<?php 
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];
$password = $_POST['pass'];
 
// update data ke database
// $sql = "UPDATE registrasi SET pass='$password' WHERE email='$email'";

// if ($koneksi->query($sql) === TRUE) {
//   header('location:LANDING PAGE.html');
// } else {
//   echo "Error updating record: " . $conn->error;
// }

$validasi = "select *from registrasi where email = '$email'";
$result = mysqli_query($koneksi, $validasi);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

if($count == 1){  
  $sql = "UPDATE registrasi SET pass='$password' WHERE email='$email'";
  if ($koneksi->query($sql) === TRUE) {
  header('location:LANDING PAGE.html');}
}  
else{  
  header("Location: RESET GAGAL.php");   
}
?>