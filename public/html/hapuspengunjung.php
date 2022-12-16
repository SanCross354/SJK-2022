<?php
include "koneksi.php";

$email=$_GET['email'];

$sql = "delete from registrasi where email='$email'";

$hasil = $koneksi->query($sql);
if ($hasil === TRUE) {
	header('Location: tampildatapengunjung.php');
} else {
	echo "Hapus Data Gagal. Pesan error: ".$koneksi->error;
}
$koneksi->close(); // menutup koneksi

?>

