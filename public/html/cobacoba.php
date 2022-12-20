<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTINGAN PAGE</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php 
// Include the database configuration file  
require_once 'koneksi.php'; 
 
// Get image data from database 
$result = $koneksi->query("SELECT image FROM postingan ORDER BY id DESC"); 
?>

    <?php if($result->num_rows > 0){ ?>
    <div class="gallery">
        <?php while($row = $result->fetch_assoc()){ ?>
        <section class="pt-24 flex flex-col items-center justify-center">
            <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
                <div class="w-full flex justify-between p-3">
                    <div class="flex">
                        <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                            <img src="/public/img/profilMangunan.jpg" alt="profilMangunan">
                        </div>
                        <span class="pt-1 ml-2 font-bold text-sm">Mangunan_Official</span>
                    </div>
                    <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i
                            class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
                </div>
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                <div class="px-3 pb-2">
                    <div class="pt-2">
                        <i class="far fa-heart cursor-pointer"></i>
                        <span class="text-sm text-gray-400 font-medium">2,048 likes</span>
                    </div>
                    <div class="pt-1">
                        <div class="mb-2 text-sm">
                            <span class="font-medium mr-2">Mangunan_Official</span> <?php echo $row['caption'] ?>
                        </div>
                    </div>
                    <div class="text-sm mb-2 text-gray-400 cursor-pointer font-medium">View all 357 comments</div>
                    <div class="mb-2">
                        <div class="mb-2 text-sm">
                            <span class="font-medium mr-2">dita.avina</span>Biaya masuknya skrng brpa ya min ?
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
    </div>
    <?php }else{ ?>
    <p class="status error">Image(s) not found...</p>
    <?php } ?>
</body>