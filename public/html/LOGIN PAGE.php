<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main>
        <section class="bg-no-repeat bg-cover bg-center md:bg-none" style="background-image: url(/public/img/unsplash-beach.jpg);">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-blue-700">
                    <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg"
                        alt="logo">
                    STHIRA
                </a>
                <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-white">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-600 md:text-2xl text-center">
                            Log In
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="authentication.php" method="POST">
                            <div>
                                <label name="email"
                                    class="block mb-2 text-sm font-medium text-gray-500">
                                    Email</label>
                                <input type="email" name="email"
                                    class="bg-gray-100 border border-gray-300 text-gray-600 sm:text-sm rounded-lg block w-full p-2.5"
                                    placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label name="password"
                                    class="block mb-2 text-sm font-medium text-gray-500">Password</label>
                                <input type="password" name="pass" id="password" placeholder="••••••••"
                                    class="bg-gray-100 border border-gray-300 text-gray-600 sm:text-sm rounded-lg block w-full p-2.5"
                                    required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            class="w-4 h-4 border rounded"
                                            required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 ">Ingat
                                            Saya</label>
                                    </div>
                                </div>
                                <a href="#" class="text-sm font-medium text-blue-600 hover:underline">Lupa Password ?</a>
                            </div>
                            <button type="submit"
                                class="w-full text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700">Sign
                                in</button>
                            <p class="text-sm font-light text-gray-500">
                                Baru di Sthira ? <a href="/public/html/REGISTER PAGE PENGUNJUNG.php"
                                    class="font-medium hover:underline text-blue-500">Daftar</a>
                            </p>
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } 
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>