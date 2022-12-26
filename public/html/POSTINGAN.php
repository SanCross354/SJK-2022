<?php
session_start();
include 'koneksi.php';
$query1=mysqli_query($koneksi, "SELECT * FROM postingan ORDER BY id DESC");
// $baris = mysqli_fetch_array($query);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTINGAN PAGE</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
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
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Profil</a>
                        <a href="UPLOAD POST PAGE.php"
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Upload</a>
                        <a href="POSTINGAN.php"
                            class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold">Postingan</a>
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
                <li><a href="PROFIL.php">Profil</a>
                <li><a href="UPLOAD POST PAGE.php"
                        class="block text-sm px-2 py-4 hover:bg-blue-400 transition duration-300">Upload</a>
                <li class="active"><a href="POSTINGAN.php"
                        class="block text-sm px-2 py-4 text-white bg-blue-500 font-semibold">Postingan</a>
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

    <?php if($query1->num_rows > 0){ ?>
    <div class="gallery">
        <?php while($row = mysqli_fetch_array($query1)){ ?>
        <section class="pt-24 flex flex-col items-center justify-center">
            <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
                <div class="w-full flex justify-between p-3">
                    <div class="flex">
                        <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                            <img src="uploads/<?php echo $row['fotoProfil']?>" alt="foto">
                        </div>
                        <span class="pt-1 ml-2 font-bold text-sm"><?php echo $row['nama']?></span>
                    </div>
                </div>
                <img src="postingan/<?php echo $row['image']?>" />
                <div class="px-3 pb-2">
                    <label><?php echo $row['caption']?></label>
                </div>
            </div>
        </section>
        <?php } ?>
    </div>
    <?php } else { ?>
    <p class="status error">Image(s) not found...</p>
    <?php } ?>
</body>
</html>

