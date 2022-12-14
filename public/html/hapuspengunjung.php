<?php
include "koneksi.php";

$id=$_GET['id'];

$sql = "delete from registrasi where id='$id'";

$hasil = $koneksi->query($sql);
if ($hasil === TRUE) {
	header('Location: tampildatapengunjung.php');
} else {
	echo "Hapus Data Gagal. Pesan error: ".$koneksi->error;
}
$koneksi->close(); // menutup koneksi

?>

