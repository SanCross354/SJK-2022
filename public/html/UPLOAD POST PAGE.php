<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMAGE UPLOAD USING PHP</title>
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
                            class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold">Upload</a>
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
                <li><a href="PROFIL.php"
                        class="block text-sm px-2 py-4 hover:bg-blue-400 transition duration-300">Profil</a>
                <li class="active"><a href="UPLOAD POST PAGE.php"
                        class="block text-sm px-2 py-4 text-white bg-blue-500 font-semibold">Upload</a>
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
        <div class="pt-28 min-h-screen flex justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-no-repeat bg-cover relative items-center"
            style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
                <div class="text-center">
                    <h2 class="mt-5 text-3xl font-bold text-gray-900">
                        Upload Postingan
                    </h2>
                </div>

                <?php if (isset($_GET['error'])): ?>
                <p>
                    <?php echo $_GET['error']; ?>
                </p>
                <?php endif ?>

                <form class="mt-8 space-y-3" action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">Caption</label>
                        <input
                            class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                            name="caption" type="text" placeholder="Masukkan Caption">
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Image</label>
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                <div class="h-full w-full text-center flex flex-col items-center justify-center">
                                    <!---<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>-->
                                    <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                        <img class="has-mask h-36 object-center"
                                            src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg"
                                            alt="freepik image">
                                    </div>
                                    <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span>
                                        files here <br /> or <a href="" id=""
                                            class="text-blue-600 hover:underline">select a file</a> from your computer
                                    </p>
                                </div>
                                <input type="file" name="image" class="hidden">
                            </label>
                        </div>
                    </div>
                    <p class="text-sm text-gray-300">
                        <span>File type: jpg, jpeg, and png</span>
                    </p>
                    <div>
                        <input type="submit" name="submit"
                            class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        </input>
                    </div>
                </form>
            </div>
        </div>

        <style>
            .has-mask {
                position: absolute;
                clip: rect(10px, 150px, 130px, 10px);
            }
        </style>
    </section>c

</body>

</html>