<?php
session_start();
include 'koneksi.php';
$akun = $_SESSION['id_pengunjung'];
$query=mysqli_query($koneksi, "select * from pengunjung where id_pengunjung = $akun");
$baris = mysqli_fetch_array($query);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL PAGE</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200">
    <!-- Header -->
    <!-- Navbar goes here -->
    <nav class="bg-white shadow-lg fixed w-full z-20 top-0 left-0 border-b">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="#" class="flex items-center py-4">
                            <img src="/public/img/logo plesiran.png" class="h-6 mr-3 sm:h-9" alt="Sthira Logo">
                            <span
                                class="self-center text-xl font-semibold whitespace-nowrap text-gray-600">PLESIRAN</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="DASHBOARD.php"
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Dashboard</a>
                        <a href="PROFIL.php"
                            class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold">Profil</a>
                        <a href="UPLOAD POST PAGE.php"
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Upload</a>
                        <a href="POSTINGAN.php"
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Postingan</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    <a href="LOGIN PAGE.php"
                        class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-blue-500 hover:text-white transition duration-300">Log
                        Out</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-blue-500 " x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li><a href="DASHBOARD.php"
                        class="block text-sm px-2 py-4 hover:bg-blue-400 transition duration-300">Dashboard</a></li>
                <li class="active"><a href="PROFIL.php" class="block text-sm px-2 py-4 text-white bg-blue-500 font-semibold">Profil</a>
                <li><a href="UPLOAD POST PAGE.php"
                        class="block text-sm px-2 py-4 hover:bg-blue-400 transition duration-300">Upload</a>
                <li><a href="POSTINGAN.php"
                        class="block text-sm px-2 py-4 hover:bg-blue-400 transition duration-300">Postingan</a>
                </li>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>
    <!-- Header -->

    <section>
        <div class="flex flex-wrap items-center justify-center pt-24">
            <div
                class="container max-w-lg bg-white rounded dark:bg-gray-800 shadow-lg transform duration-200 easy-in-out m-12">
                <div class="h-2/4 sm:h-64 overflow-hidden">
                    <img class="w-full rounded-t" src="/public/img/tanah lot-unsplash.jpg"
                        alt="Photo by Harry Kessell on Unsplash" />
                </div>
                <div class="flex justify-start px-5 -mt-12 mb-5">
                    <span clspanss="block relative h-32 w-32">
                        <img alt="Photo by aldi sigun on Unsplash" src="uploads/<?php echo $baris['foto']?>"
                            class="mx-auto object-cover rounded-full h-24 w-24 bg-white p-1" />                                
                        </span>
                </div>
                <div class="">
                    <div class="px-7 mb-8">
                        <h2 class="text-3xl font-bold text-green-800 dark:text-gray-300"><?php echo $baris['nama'] ?></h2>
                        <p class="text-gray-400 mt-2 dark:text-gray-400">Pengunjung</p>
                        <p class="mt-2 text-gray-600 dark:text-gray-300"><?php echo $baris['caption'] ?></p>
                        <div
                            class="justify-center px-4 py-2 cursor-pointer bg-green-900 max-w-min mx-auto mt-8 rounded-lg text-gray-300 hover:bg-green-800 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-gray-200">
                            <?php echo $baris['email'] ?>
                        </div>
                        
        <?php while($row = mysqli_fetch_array($query)) {?>
            <table hidden>
            <tr>
                <td><?= $row["id_pengunjung"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["telefon"] ?></td>
                <td><?= $row["caption"] ?></td>
            </tr></table>
            
        <?php }?><a class="text-white" href="edit_profil.php?id_pengunjung=<?= $_SESSION["id_pengunjung"] ?>">Edit Profil</a> 
                    </div>
                </div>
            </div>
        </div>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </section>
</body>

</html>