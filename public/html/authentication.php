<?php      
    include('koneksi.php');  
    $email = $_POST['email'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($koneksi, $email);  
        $password = mysqli_real_escape_string($koneksi, $password);  
      
        $sql = "select *from registrasi where email = '$email' and pass = '$password'";  
        $result = mysqli_query($koneksi, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: LANDING PAGE.html");   
        }  
        else{  
            header("Location: Login gagal.php");  
        }     
?>  