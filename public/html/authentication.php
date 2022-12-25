<?php
session_start();
include 'koneksi.php';

if(isset($_POST['button'])){

    $email =  $_POST['email'];
    $pass = $_POST['pass'];
    $query=mysqli_query($koneksi, "select * from pengunjung where email='$email' and pass='$pass'");

    if(mysqli_num_rows($query)===1){
        $row=mysqli_fetch_array($query);
        $_SESSION['email']=$row['email'];
        $_SESSION['pass']=$row['pass'];
        $_SESSION['telefon']=$row['telefon'];

        header("Location : index.html");
    }else{
        echo "<script>alert('username atau password salah')</script>";
        header("Location:login.php");
    }
}

?>  