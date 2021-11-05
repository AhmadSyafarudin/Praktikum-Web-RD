<?php
include "koneksi.php";

switch ($_GET['action'])
{
    case 'tambah' :
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        $sql = "INSERT INTO mahasiswa (nim, nama, prodi) values ('$nim', '$nama', '$prodi')";
        $hasil = mysqli_query($kon, $sql);
        if ($hasil)
        {
            echo "Data Berhasil Ditambahkan";
        }
        else
        {
            echo "Data Gagal Ditambahkan :" . mysqli_error($kon);
        }
    break;

    case 'edit':

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi= $_POST['prodi'];

        $query = mysqli_query($kon, "UPDATE mahasiswa SET nama='$nama', prodi = '$prodi' WHERE nim='$nim'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($kon);
        }
    break;

    case 'delete':

        $nim = $_POST['nim'];
        $query = mysqli_query($kon, "DELETE FROM mahasiswa WHERE nim='$nim'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($kon);
        }
    break;
}
?>