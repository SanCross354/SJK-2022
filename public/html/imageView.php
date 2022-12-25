<?php
include 'koneksi.php';
require_once __DIR__ . '/koneksi.php';
if (isset($_GET['image'])) {
    $sql = "SELECT foto FROM pengunjung WHERE id_pengunjung= $_SESSION['id_pengunjung']";
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $_GET['image']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    $row = $result->fetch_assoc();
    // header("Content-type: " . $row["imageType"]);
    echo $row["foto"];
}
?>