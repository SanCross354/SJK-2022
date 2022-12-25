<?php 

session_start(); 

include "koneksi.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);

    if (empty($email)) {
        header("Location: cobacoba.php?error=Isikan kolom email anda terlebih dahulu");
        exit();
    } else if (empty($pass)) {
        header("Location: cobacoba.php?error=Isikan kolom password anda terlebih dahulu");
        exit();
    } else {
        $sql = "SELECT * FROM pengunjung WHERE email='$email' AND pass='$pass'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['pass'] === $pass) {
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['telefon'] = $row['telefon'];
                $_SESSION['foto'] = $row['foto'];
                $_SESSION['id_pengunjung'] = $row['id_pengunjung'];
                header("Location: PROFIL.php");
                exit();
            } else {
                header("Location: PROFIL.php?error=Email atau password yang anda ketikkan salah");
                exit();
            }
        } else {
            header("Location: PROFIL.php?error=Kesalahan dalam penamaan tabel DB atau atribut tabel");
            exit();
        }
    }
} else {
    header("Location: PROFIL.php");
    exit();
}
?>