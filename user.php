<?php
include "koneksi.php";

session_start();

$_SESSION["nim"] = $_GET['nim'];
$_SESSION["nama"] = $_GET['nama'];
$_SESSION["instansi"] = $_GET['instansi'];

$nim = $_GET['nim'];
$nama = $_GET['nama'];
$instansi= $_GET['instansi'];


$sql = "INSERT INTO webinar (nim, nama, instansi) VALUES ('$nim', '$nama', '$instansi')";
$query = mysqli_query($kon, $sql);

if ($query) {
    header("location:form.php");
}

?>
