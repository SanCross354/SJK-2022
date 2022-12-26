<?php 
// Include the database configuration file  
session_start();
require_once 'koneksi.php'; 
 
// Get image data from database 
// $result = $koneksi->query("SELECT image FROM postingan ORDER BY id DESC"); 
$id = $_SESSION['id'];
$query=mysqli_query($koneksi, "select * from postingan where id = $id");
$baris = mysqli_fetch_array($query);
?>

<?php while($row = mysqli_fetch_array($query)) {?>
            <table hidden>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["image"] ?></td>
                <td><?= $row["caption"] ?></td>
            </tr></table>
            
        <?php }?>

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
    <?php if($query->num_rows > 0){ ?>
    <div class="gallery">
        <?php while($row = $query->fetch_assoc()){ ?>
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
                <img src="postingan/<?php echo $baris['foto']?>" />
                <div class="px-3 pb-2">
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

