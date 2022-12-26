<?php 
// Include the database configuration file  
session_start();
require_once 'koneksi.php'; 
 
// If file upload form is submitted 
if(isset($_POST['submit'])) {
    $caption = $_POST['caption'];
    
    $folder = "postingan/";
    $image_file=$_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $path = $folder . $image_file;
    $target_file=$folder.basename($image_file);
    $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

    //Allow only JPG, JPEG, PNG & GIF etc formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
         $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
    }

    //Set image upload size 
  if ($_FILES["image"]["size"] > 8048576) {
       $error[] = 'Sorry, your image is too large. Upload less than 8 MB in size.';
    }

    if(!isset($error)) {
        //move image to the folder 
        move_uploaded_file($file,$target_file); 
        $result = mysqli_query($koneksi,"INSERT INTO postingan (image, caption) VALUES ('$image_file', '$caption')"); 

        if($result) {
            $image_success=1;
      header("Location: cobacoba.php");
        } else {
            echo 'Something went wrong'; 
        }
    }
}
?>