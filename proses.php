<?php
include "koneksi.php";

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$instansi = $_POST["instansi"];
$email = $_POST['email'];
$kontak = $_POST['kontak'];


$foto = $_FILES['foto']['name'];
$ekstensi = array('png', 'jpg', 'jpeg');
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($foto, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location : index.php?alert=ekstensi");
}
else {
    if ($ukuran < 1500000) {
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$foto);
        $sql = "INSERT INTO webinar VALUES('$nim', '$nama', '$instansi', '$email', '$kontak', '$foto')";
        $query = mysqli_query($kon, $sql);
        header("location:index.php?alert=sukses");
    }
    else {
        header("location:index.php?alert=ukuran");
    }
}



if (!$query) {
    die("Data Gagal Ditambahkan, Coba Lagi".mysqli_error($kon));
}
?>