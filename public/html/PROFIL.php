<?php
session_start();
include 'koneksi.php';
$query=mysqli_query($koneksi, "select * from pengunjung");
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

<body class="bg-gray-400">
    <header>
        <nav class="px-2 sm:px-4 py-2.5 bg-blue-700 fixed w-full z-20 top-0 left-0 border-b border-blue-600">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="#" class="flex items-center">
                    <img src="/public/img/logo plesiran.png" class="h-6 mr-3 sm:h-9" alt="Sthira Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">PLESIRAN</span>
                </a>

                <div class="flex md:order-2 space-x-3">
                    <a href="logout.php"
                        class="inline-flex items-center justify-center px-3 py-3 mr-3 text-base font-bold text-center text-blue-500 rounded-lg bg-white hover:bg-gray-300 focus:ring-4 focus:ring-gray-600">
                        Log Out
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <img class="h-10 w-10 rounded-full block" src="/public/img/bali gurl-unsplash.jpg" alt="">
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
                            <a href="/public/html/PROFIL.html"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700""
                                aria-current=" page">Profil</a>
                        </li>
                        <li>
                            <a href="/public/html/UPLOAD POST PAGE.php"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Upload</a>
                        </li>
                        <li>
                            <a href="/public/html/POSTINGAN.html"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Postingan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
                        <img alt="Photo by aldi sigun on Unsplash" src="imageView.php?image=<?php echo $row["foto"]; ?>"
                            class="mx-auto object-cover rounded-full h-24 w-24 bg-white p-1" />                                
                        </span>
                </div>
                <div class="">
                    <div class="px-7 mb-8">
                        <h2 class="text-3xl font-bold text-green-800 dark:text-gray-300"><?php echo $_SESSION['nama'] ?></h2>
                        <p class="text-gray-400 mt-2 dark:text-gray-400">Pengunjung</p>
                        <p class="mt-2 text-gray-600 dark:text-gray-300"><?php echo $_SESSION['caption'] ?></p>
                        <div
                            class="justify-center px-4 py-2 cursor-pointer bg-green-900 max-w-min mx-auto mt-8 rounded-lg text-gray-300 hover:bg-green-800 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-gray-200">
                            <?php echo $_SESSION['email'] ?>
                        </div>
                        <?php 
                        if (mysqli_num_rows($query) === 1) {
                             $row = mysqli_fetch_assoc($query);
                
                $_SESSION['email'] = $row['email'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['telefon'] = $row['telefon'];
                $_SESSION['id_pengunjung'] = $row['id_pengunjung'];
                $_SESSION['caption'] = $row['caption']; 
             
             ?>             
             <a class="text-gray-400 mt-2" href="edit_profil.php?id_pengunjung=<?= $row["id_pengunjung"] ?>">Edit Profil</a>
        <?php }?>
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