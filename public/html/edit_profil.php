<?php
session_start();
include 'koneksi.php';

$id = $_GET['id_pengunjung'];

$validasi = "select * from pengunjung where id_pengunjung = '$id'";
$result = mysqli_query($koneksi, $validasi);  
$row = mysqli_fetch_array($result);  

// menangkap data yang di kirim dari form
if(isset($_POST['button'])){

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$caption = $_POST['caption'];
 
  $sql = "UPDATE pengunjung SET nama='$nama', telefon= '$telepon', caption= '$caption' WHERE id_pengunjung='$id'";
  if ($koneksi->query($sql) === TRUE) {
  header('location:PROFIL.php');}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PROFIL</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-400"">
    <div class=" w-full max-w-xs flex flex-col items-center justify-center px-6 pt-48 mx-auto">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h1 class="text-center font-bold font-serif">EDIT PROFIL</h1>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Nama
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Nomor Telepon
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="telepon" type="text" placeholder="Masukkan nomor telepon">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Caption
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="caption" type="text" placeholder="Masukkan caption">
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button" name="button">
                Update
            </button>
        </div>
    </form>
    <p class="text-center text-white text-base italic">
        &copy;2022 Plesiran. All rights reserved.
    </p>
    </div>
</body>

</html>