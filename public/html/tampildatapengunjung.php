<?php
//mengakses file koneksi.php
include "koneksi.php";

//Mengakses isi tabel registrasi
$sql = "SELECT  
id as 'id', 
nama as 'nama', 
email as 'email', 
telefon as 'telefon',
pass as 'pass'

from registrasi";

$hasil = $koneksi->query($sql); //memproses query
echo "
<table border='1'>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Email</th>
<th>Telefon</th>
<th>Password</th>
</tr>";
if ($hasil->num_rows > 0) {
   //menampilkan data setiap barisnya
   while ($baris = $hasil->fetch_assoc()) {
   		$id           = $baris['id'];
   		$nama    = $baris['nama'];
   		$email =$baris['email'];
   		$telefon = $baris['telefon'];
   		$pass = $baris['pass'];
   		echo "
      <td>$id</td>
      <td>$nama</td>
      <td>$email</td>
      <td>$telefon</td>
      <td>$pass</td>";
      echo "<td> <a href='ubahpengunjung.php?id=$id'>Edit</a> | "; ?>
         <a href="hapuspengunjung.php?id=<?php echo $id; ?>" onClick="return confirm('Anda yakin akan mengapus data ini?');">Hapus</a></td></tr>"
<?php          
   }	
   echo "</table>";
} else {
	echo "Data tidak ditemukan";
}
$koneksi->close(); // menutup koneksi
?>