<?php
//mengakses file koneksi.php
include "koneksi.php";
$id = $_GET['id'];
//Mengakses isi tabel departemen
$sql = "Select * from registrasi where id='$id'";
$hasil = $koneksi->query($sql); //memproses query
$sql2 = "Select nama, email, telefon, pass from registrasi order by nama";
$result = $koneksi->query($sql2);
if ($hasil->num_rows > 0) {
	echo "<form action='updatepengunjung.php' method='POST'>";
	while ($baris = $hasil->fetch_array()) {
		$id = $baris['id'];
		$nama = $baris['nama'];
        //$man = $baris['id_manajer'];
        echo "<label>id :</label><input type='text' name='id' readonly value='".$baris['id']."'><br />
         <label>Nama :</label><input type='text' size='50' name='nama' value='".$baris['nama_departemen']."'><br />
         <label>Nama Manajer :</label>";
         if ($result->num_rows > 0) {
         	echo " <select name='manajer'>";
         	while ($row = $result->fetch_array()) { 
                if ($row['id_pegawai'] == $baris['id_manajer']) {
                    echo "<option value='". $row['id_pegawai']. "' selected>". $row['nama_depan'] . " " . $row['nama_belakang']. "</option>";
                } else {
                    echo "<option value='". $row['id_pegawai']. "'>". $row['nama_depan'] . " " . $row['nama_belakang']. "</option>";
                }
            }
         	echo "</select>";
         } else {
         	echo "Data tidak ditemukan";
         }
         echo "<br />
         <label>Mulai Menjabat :</label><input type='date' name='tanggal' value='".$baris['tanggal_mulai_manajer']."'><br />";
    }
    echo "
    <input type='submit' value='Simpan' name='submit'><input type='reset' value='Batal'></form>";
} else {
	echo "Data dengan kode departemen $id tidak ditemukan";
}
$koneksi->close(); // menutup koneksi
?>


