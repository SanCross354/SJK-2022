<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-600">

    <!-- container -->
    <div>

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
                        <div class="hidden md:flex items-center space-x-1 pl-72">
                            <a href="index.html"
                                class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold ">Home</a>
                            <a href="ABOUT US PAGE.html"
                                class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">About
                                Us</a>
                        </div>
                    </div>
                    <!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3 ">
                        <a href="LOGIN PAGE.php"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-blue-500 hover:text-white transition duration-300">Log
                            In</a>
                        <a href="REGISTER PAGE PENGUNJUNG.php"
                            class="py-2 px-2 font-medium text-white bg-blue-500 rounded hover:bg-blue-700 transition duration-300">Sign
                            Up</a>
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
                    <li class="active"><a href="index.html"
                            class="block text-sm px-2 py-4 hover:bg-blue-400 transition duration-300">Home</a></li>
                    <li><a href="ABOUT US PAGE.html"
                            class="block text-sm px-2 py-4 hover:bg-blue-400 transition duration-300">About Us</a>
                    <li><a href="LOGIN PAGE.php"
                            class="block text-sm px-2 py-4 hover:bg-blue-400 transition duration-300">Log In</a>
                    <li><a href="REGISTER PAGE PENGUNJUNG.php"
                            class="block text-sm px-2 py-4 text-white bg-blue-500 font-semibold">Sign Up</a>

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


        <!-- main -->
        <form action="controller_tambah_pengunjung.php" method="POST" enctype="multipart/form-data">
            <div class="md:grid-cols-1 px-60 pt-28">
                <div>
                    <p class="text-white font-bold text-2xl mb-3">*Data Diri</p>

                    <label class="block mb-1 font-bold text-sm text-gray-400">Nama</label>
                    <input type="text" name="nama" class="bg-white text-black py-1 px-2 
                    placeholder:text-sm mb-2 sm:text-sm rounded-lg block w-full p-2.5" placeholder="Masukkan nama anda"
                        required>
                </div>

                <div>
                    <label class="block mb-1 font-bold text-sm text-gray-400">Email</label>
                    <input type="text" name="email" class="bg-white text-black py-1 px-2 
                    placeholder:text-sm mb-2 sm:text-sm rounded-lg block w-full p-2.5"
                        placeholder="Masukkan email anda" required>
                </div>

                <div>
                    <label class="block mb-1 font-bold text-sm text-gray-400">Nomor Telepon</label>
                    <input type="text" name="telefon" class="bg-white text-black rounded-lg w-full py-1 px-2 
                    placeholder:text-sm mb-2 sm:text-sm block` p-2.5" placeholder="Masukkan nomor telepon aktif"
                        required>
                </div>

                <div>
                    <label class="block mb-1 font-bold text-sm text-gray-400">Password</label>
                    <input type="password" name="pass" class="bg-white text-black rounded-lg w-full py-1 px-2 mb-5
                    placeholder:text-sm sm:text-sm block p-2.5" placeholder="Masukkan password anda" required>
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

                <input type="submit" name="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center
                  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></button>
            </div>
        </form>
        <!-- main -->

        <!-- footer -->
        <div class="pt-48">
            <footer class="p-4 bg-white shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href=""
                        class="hover:underline">Plesiran</a>. All Rights Reserved.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </footer>
        </div>
        <!-- footer -->


    </div>
    <!-- container -->
</body>

</html>