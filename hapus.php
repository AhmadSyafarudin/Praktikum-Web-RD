<?php
 include "koneksi.php";
 $nim = $_GET["nim"];

 mysqli_query($kon, "DELETE FROM webinar WHERE nim='$nim'");
 
 header("location:peserta.php")
?>