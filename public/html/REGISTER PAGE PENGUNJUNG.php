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
    <header>
        <nav
            class="px-2 sm:px-4 py-2.5 bg-blue-700 fixed w-full z-20 top-0 left-0 border-b border-blue-600">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="#" class="flex items-center">
                    <img src="/public/img/logo plesiran.png"
                        class="h-6 mr-3 sm:h-9" alt="Sthira Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">PLESIRAN</span>
                </a>
                <div class="flex md:order-2">
                    <a href="/public/html/LOGIN PAGE.php"
                        class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-bold text-center text-blue-500 rounded-lg bg-white hover:bg-gray-300 focus:ring-4 focus:ring-gray-600">
                        Log In
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">
                        <li>
                            <a href="/index.html"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700""
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/public/html/ABOUT US PAGE.html"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header -->


        <!-- main -->
        <form action="controller_tambah_pengunjung.php" method="POST">
            <div class="md:grid-cols-1 px-60 pt-28">
                <div>
                    <p class="text-white font-bold text-2xl mb-3">*Data Diri</p>

                    <label class="block mb-1 font-bold text-sm text-gray-400">Nama</label>
                    <input type="text" name="nama" class="bg-white text-black rounded-lg w-full py-1 px-2 
                    placeholder:text-sm mb-2" placeholder="Masukkan nama anda" required>
                </div>

                <div>
                    <label class="block mb-1 font-bold text-sm text-gray-400">Email</label>
                    <input type="text" name="email" class="bg-white text-black rounded-lg w-full py-1 px-2 
                    placeholder:text-sm mb-2" placeholder="Masukkan email anda" required>
                </div>

                <div>
                    <label class="block mb-1 font-bold text-sm text-gray-400">Nomor Telepon</label>
                    <input type="text" name="telefon" class="bg-white text-black rounded-lg w-full py-1 px-2 
                    placeholder:text-sm mb-2" placeholder="Masukkan nomor telepon aktif" required>
                </div>

                <div>
                    <label class="block mb-1 font-bold text-sm text-gray-400">Password</label>
                    <input type="password" name="pass" class="bg-white text-black rounded-lg w-full py-1 px-2 mb-5
                    placeholder:text-sm" placeholder="Masukkan password anda" required>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center
                  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
        <!-- main -->

        <!-- footer -->
        <div class="pt-48">
            <footer
                class="p-4 bg-white shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
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