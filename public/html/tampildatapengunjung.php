<?php
//mengakses file koneksi.php
include "koneksi.php";

//Mengakses isi tabel registrasi
$sql = "SELECT  
nama as 'nama', 
email as 'email', 
telefon as 'telefon',
pass as 'pass'

from registrasi";

$hasil = $koneksi->query($sql); //memproses query
echo "
<table border='1'>
<tr>
<th>Nama</th>
<th>Email</th>
<th>Telefon</th>
<th>Password</th>
</tr>";
if ($hasil->num_rows > 0) {
   //menampilkan data setiap barisnya
   while ($baris = $hasil->fetch_assoc()) {
   		$nama    = $baris['nama'];
   		$email =$baris['email'];
   		$telefon = $baris['telefon'];
   		$pass = $baris['pass'];
   		echo "
      <td>$nama</td>
      <td>$email</td>
      <td>$telefon</td>
      <td>$pass</td>";
      echo "<td> <a href='ubahpengunjung.php?email=$email'>Edit</a> | "; ?>
         <a href="hapuspengunjung.php?email=<?php echo $email; ?>" onClick="return confirm('Anda yakin akan mengapus data ini?');">Hapus</a></td></tr>"
<?php          
   }	
   echo "</table>";
} else {
	echo "Data tidak ditemukan";
}
$koneksi->close(); // menutup koneksi
?>