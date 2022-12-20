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
    <header>
        <nav class="px-2 sm:px-4 py-2.5 bg-blue-700 fixed w-full z-20 top-0 left-0 border-b border-blue-600">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="#" class="flex items-center">
                    <img src="/public/img/logo plesiran.png" class="h-6 mr-3 sm:h-9" alt="Sthira Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">PLESIRAN</span>
                </a>

                <div class="flex md:order-2 space-x-3">
                    <a href="/public/html/LOGIN PAGE.php"
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
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
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
                            name="caption"
                            type="text" placeholder="Masukkan Caption">
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